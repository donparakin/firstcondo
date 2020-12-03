<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Publications';
	public $pageLayout = '01112';
	public $pageMenu = 'p';
	
	function doArea1() {
?>
	<h1 class="atTop">Publications</h1>
	<?= G::$accent_p ?> 
	<p><b>&#147;Effective Reserve Fund Planning and Management for Ontario
		Condominium Corporations&#148;</b></p>
	<p>This authoritative manual on Reserve Fund Planning and Management is an
		indispensable reference resource for Property Managers and Boards of
		Directors.
	<ul class="fcg">
		<li>Price:  $95.60 (includes G.S.T. and Shipping)</li>
		<li>Order:  please contact us by e-mail or telelphone</li>
		<li>Contents:  <a href="/sc/<?=REV?>/en/ERFPM.toc.pdf">click to view (PDF)</a></li>
		<li>Cover:
			<img src="/sc/<?=REV?>/all/img/ERFPM.jpg">
		</li>
	</ul>
	
<?php		
	}
}
