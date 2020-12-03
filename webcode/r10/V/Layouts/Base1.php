<?php

class V_Layouts_Base1 {
	public $pageTitle = '???';
	public $pageLayout = '01112';
	public $M;

	function doPageInsideHeadTags() {}
	function doArea0() {echo "\tArea0()\n"; }
	function doBody() { echo "\tdoBody()\n"; }
	function doPageScripts() {}
	
	function doPage($M=array()) {
		$this->M = $M;
		$yui_template = ( false!==strpos($this->pageLayout,'0') ) 
			? 'yui-t1' : 'yui-t7';		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>FirstCondo<?= empty($this->pageTitle) ? '' : (' | ' . $this->pageTitle) ?></title>
 <link rel="icon" href="/sc/<?=REV?>/all/img/fcg.favicon.ico" type="image/x-icon" />
 <link rel="stylesheet" type="text/css" href="/bc/<?=REV?>/en/css/style.css">
<?php $this->doPageInsideHeadTags() ?>
</head>
<body>
 <div id="doc2" class="<?= $yui_template ?> pageDoc">
  <div id="hd" class="pageHead"><p>First Condo Group Limited</p></div>
  <div id="pageBody">
   <div id="yui-main"><div class="yui-b">
<?php $this->doBody(); ?>
   </div></div>
<?php if ($yui_template=='yui-t1') { ?>
   <div id="area0" class="yui-b">
<?php $this->doArea0(); ?>
   </div>
<?php } ?>
  </div>
  <div id="ft">
   <p class="ftnote">
    First Condo Group Limited, Tele: (905) 761-9500, Fax: (905) 761-9504,
    Email: <a href="/ContactUs">CLICK</a>
   </p>
  </div>
 </div>
</body>
<?php $this->doPageScripts(); ?>
</html>
<?php
	}
}
