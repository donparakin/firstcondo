<?php
//----------------------------------------------------------------------
// app_dispatcher:
//  - called by index.php (after configs for local)
//----------------------------------------------------------------------
function app_dispatcher() {
	//REQS: / ; /public/ ; /public/c1/ ; /public/c1/c2/ ; /sysadmin/events
	$req = explode('/',trim(strtolower($_REQUEST['urlpath']),' /'));
	if ( empty($req[0]) ) {
		$handler = sprintf('%s/V/index.php', PHP_ROOT);
	} else if ( $req[0]=='bc' ) {
		$handler = sprintf('%s/C/bc/builder.php', PHP_ROOT);
	} else {
		$path = implode('/',$req);
		$try = array(
			sprintf('%s/C/%s.php', PHP_ROOT, $path),
			sprintf('%s/C/%s/index.php', PHP_ROOT, $path),
			sprintf('%s/V/%s.php', PHP_ROOT, $path),
			sprintf('%s/V/%s/index.php', PHP_ROOT, $path)
		);
		for ($i=0; $i<4; $i++) {
			if ( file_exists( $try[$i] ) ) {
				$handler = $try[$i];
				break;
			}
		}
	}

	try {
		require ( empty($handler)
			? sprintf('%s/V/templates/t1notfound.php', PHP_ROOT)
			: $handler
		);
	} catch (Exception $e) {
		G::$M['exception'] = $e;
		//G::$V = 'templates/t1exception';
?>
	<h1><i>Ka-BOOM!</i>  An <b>Exception</b> Has Occurred</h1>
	<p><u>Message</u>: <?= $e->getMessage() ?></p>
	<p><u>Code</u>: <?= $e->getCode() ?></p>
	<p><u>PHP Stack Trace</u>:</p><pre>
	<?= str_ireplace(APP_ROOT,'',$e->getTraceAsString()) ?>
	</pre>
<?php
	}
	return;
}

require PHP_ROOT . '/V/Layouts/Base1.php';
require PHP_ROOT . '/V/Layouts/LeftNav1.php';

//----------------------------------------------------------------------
// G: the Global object
//----------------------------------------------------------------------
G::init_before_local();

class G {
	//--- Site Config
	public static $EnvType = 'prod';
	public static $cache = false;
	
	public static $M = array();

	public static $accent_p = '<div class="accent-p"></div>';
	
	//###################################################################
	//###################################################################
	//###################################################################
	
	//--- Appl Config
	public static $rev = REV;
	public static $urlpath;
	public static $UseDAO = 'DAO_sqlite';
	//--- Globals
	public static $req_eid;
	public static $req_returns = 'html';

	public static function init_before_local($type=null) {
	}

	//---------------------------------------------
	public static function debug($msg) {
		echo "<script>console.log('".addslashes($msg)."')</script>";
	}
	//---------------------------------------------
	public static function uts2ymd($uts) {
		return ( is_numeric($uts) && $uts > 10000000 )
			? date('Y-m-d',$uts)
			: '';
	}
	//---------------------------------------------
	function ymd2uts($ymd,$hms='12:00:00') {
		if ( !is_numeric(str_replace('-','',$ymd)) ) return 0;
		if ( !is_numeric(str_replace(':','',$hms)) ) return 0;
		if ( 3!=count($ymd = explode('-',$ymd)) ) return 0;
		if ( 3!=count($hms = explode(':',$hms)) ) return 0;
		return mktime($hms[0],$hms[1],$hms[2],$ymd[1],$ymd[2],$ymd[0]);
	}
}

//----------------------------------------------------------------------
// Other: 
//----------------------------------------------------------------------
define('NL',"\n"); define('T1',"\t"); define('T2',"\t\t"); define('T3',"\t\t\t");

function __autoload($className) {   //---- for automatic class loading
	if ( substr($className,0,4)==='DAO_' )
		$className = substr_replace($className,G::$UseDAO,0,3);
	require_once
		PHP_ROOT . '/' . str_replace('_','/',$className) . '.php';
}
