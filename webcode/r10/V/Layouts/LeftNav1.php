<?php
class V_Layouts_LeftNav1 extends V_Layouts_Base1 {
	public $pageLayout = '01112';
	public $pageMenu = '';
	
	private $yui_grids_list = Array(
		'12'   => 'yui-g',
		'123'  => 'yui-gb',
		'112'  => 'yui-gc',
		'122'  => 'yui-gd',
		'1112' => 'yui-ge',
		'1222' => 'yui-gf',
	);
	
	function doBody() {
		if ( $this->pageLayout=='1' ) {
			$this->doArea1();
		} else {
			$bodyCols = str_replace('0','',$this->pageLayout);
			$yui_grids = ( array_key_exists($bodyCols,$this->yui_grids_list) )
				? $this->yui_grids_list[$bodyCols]
				: 'yui-gf';
?>
    <div class="<?= $yui_grids ?>">
     <div id="area1" class="yui-u first">
     <div class="splash">
      <img src="/sc/<?=REV?>/all/img/FCG.splash.180.jpg"/>
     </div>
<?php $this->doArea1(); ?>
     </div>
<?php if ( false!==strpos($this->pageLayout,'2') ) { ?>
     <div id="area2" class="yui-u">
<?php $this->doArea2(); ?>
     </div>
<?php } ?>
<?php if ( false!==strpos($this->pageLayout,'3') ) { ?>
     <div id="area3" class="yui-u">
<?php $this->doArea3(); ?>
     </div>
<?php } ?>
    </div>
<?php
		}
	}
	
	function doArea0() {
		$m['h'] = $m['au'] = $m['ca'] = $m['p'] = $m['cu'] = '';
		$m['au'] = $m['au.fcg'] = $m['au.oc'] = $m['au.of'] = '';
		$m['ps'] = $m['ps.rfs'] = $m['ps.ia'] =$m['ps.pa'] = '';
		$m[$this->pageMenu] = ' class="on"';
		if ( substr($this->pageMenu,0,2)=='au' ) $m['au'] = ' class="in"';
		if ( substr($this->pageMenu,0,2)=='ps' ) $m['ps'] = ' class="in"';
		?>
	<ul class="menu">
		<li<?=$m['h']?>><a class="menu" href="/">Home</a></li>
		<li<?=$m['au']?>><a class="menu" href="/AboutFCG">About Us</a>
<?php if ( substr($this->pageMenu,0,2)=='au' ) { ?>
			<ul class="menu">
				<li<?=$m['au.fcg']?>><a class="menu" href="/AboutFCG">First Condo Group</a></li>
				<li<?=$m['au.of']?>><a class="menu" href="/AboutOurFounder">Our Founder</a></li>
			</ul>
<?php } ?>
		</li>
		<li<?=$m['ps']?>><a class="menu" href="/ReserveFundStudies">Professional Services</a>
			<ul class="menu">
				<li<?=$m['ps.rfs']?>><a class="menu" href="/ReserveFundStudies">Reserve Fund Studies</a></li>
				<li<?=$m['ps.ia']?>><a class="menu" href="/InsuranceAppraisals">Insurance Appraisals</a></li>
				<li<?=$m['ps.pa']?>><a class="menu" href="/PerformanceAudits">Performance Audits</a></li>
			</ul>
		</li>
		<li<?=$m['ca']?>><a class="menu" href="/CondoAct">Condominium Act, 1998</a></li>
		<li<?=$m['p']?>><a class="menu" href="/Publications">Publications</a></li>
		<li<?=$m['cu']?>><a class="menu" href="/ContactUs">Contact Us</a></li>
	</ul>
<?php
	}
	function doArea1() {}
	function doArea2() {
?>
		<p class="quote">&#8220;Developing and delivering our services to the
			Condominium Industry since 1978&#8221;</p>
<?php $this->doArea2_links(); ?>
<?php
	}
	function doArea2_links() {}
	function doArea3() {}
}
