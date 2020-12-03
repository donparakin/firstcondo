<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'About FCG';
	public $pageLayout = '01112';
	public $pageMenu = 'au.fcg';
	
	function doArea1() {
?>
	<h1 class="atTop">About First Condo Group</h1>
	<?= G::$accent_p ?> 
	<p>With a client base of over 600 condominium corporations, First Condo
		Group is one of the largest firms in southern Ontario and specializes
		in providing the following professional services to the condominium
		industry:</p>
	<ul class="fcg">
		<li><a href="ReserveFundStudies">Reserve Fund Studies</a></li>
		<li><a href="/InsuranceAppraisals">Insurance Appraisals</a></li>
		<li><a href="/PerformanceAudits">Performance Audits</a></li>
	</ul>
	<p>The First Condo Team is comprised of Certified Reserve Planners and
		Insurance Appraisers. First Condo Group has
		been providing these services to the Condominium industry since 1977
		and we have grown and developed the Functional Reserve Fund Study. The
		study explains step by step the various factors culminating in a plan that
		is effective and useful to the Condominium managers and owners.</p>
	<p>Our Appraisal Services and Reserve Fund Study Services have expanded to
		include clients in the Cooperative, Commercial and not-for-profit
		industries.</p>
	<?= G::$accent_p ?> 
	<p>Many firms perform these services as a small part of a much larger
		selection of technical services. First Condo Group only
		consults on these services so that we remain independent and without
		conflict. By focussing on this as our core business, it allows us to
		evolve our products and pay close attention to our clients' requirements
		at all times.</p>
	<?= G::$accent_p ?> 
	<p>First Condo Group is fully insured and has aligned itself with some of
		the best information services in Canada to service our clients needs.
		These services include:</p>
	<ul class="fcg">
		<li>R.S. Means Construction Publishers</li>
		<li>Marshall Swift / Boeckh Building Valuation Software</li>
		<li>Subscriptions to Economic Outlook data and Market Trend forecasts
			through major financial institutions.</li>
	</ul> 
	<p>First Condo Group maintains membership in all major Condominium Industry
		associations and educational institutes:</p>
	<table class="assocs">
		<tr>
			<td class="c1"><a href="http://www.reic.com/">Real Estate Institute of Canada</a></td>
			<td class="c2"><img src="/sc/<?=REV?>/all/img/assoc.reic.gif"/></td>
		</tr>
		<tr>
			<td class="c1"><a href="http://www.acmo.org/">Association of Condominium Managers of Ontario</a></td>
			<td class="c2"><img src="/sc/<?=REV?>/all/img/assoc.acmo.gif"/></td>
		</tr>
		<tr>
			<td class="c1"><a href="http://www.cci.ca/">Canadian Condominium Institute</a></td>
			<td class="c2"><img src="/sc/<?=REV?>/all/img/assoc.cci.gif"/></td>
		</tr>
		<tr>
			<td class="c1"><a href="http://www.corenetglobal.org/">CoreNet Global</a></td>
			<td class="c2"><img src="/sc/<?=REV?>/all/img/assoc.cng.gif"/></td>
		</tr>
	</table>

<?php		
	}
}
