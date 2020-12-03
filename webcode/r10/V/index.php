<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = '';
	public $pageLayout = '01112';
	public $pageMenu = 'h';
	
	function doArea1() {
?>
	<h1 class="atTop">First Condo Group</h1>
	<?= G::$accent_p ?> 
	<p>First Condo's Team of Certified Reserve Planners, 
		and Insurance Appraisers have been providing professional services to the
		condominium industry since 1978.</p>
	<p>First Condo has a proven record of service excellence and leadership in
		the condominium industry.  Our achievements include:
	<ul class="fcg">
		<li>First Condo developed the Functional Reserve Fund Study, which is
			now recognized as the most advanced standard in Canada.</li>
		<li>First Condo is recommended by major Insurance Providers for its
			comprehensive Insurance Appraisals.</li>
		<li>First Condo has published manuals on property management and reserve
			fund planning.  New Release as of May 2005:  Effective Reserve Fund
			Planning and Management for Ontario Condominium Corporations.</li>
	</ul>
	
	<?= G::$accent_p ?> 
	<p>Our core business is providing
		<a href="ReserveFundStudies">Reserve Fund Studies</a>,
		<a href="/InsuranceAppraisals">Insurance Appraisals</a>
		and <a href="/PerformanceAudits">Performance Audits</a>
		to the condominium industry.</p>
	<p>We are proud to be members of the following associations:</p>
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

	<h1>Our Clients</h1>
	<?= G::$accent_p ?> 
	<p>First Condo's clients range from small projects to large, complex
		developments. Our expertise encompasses townhomes, apartment buildings,
		recreation centres, industrial buildings, office and commercial buildings
		as well as common element corporations.</p>
	<p>First Condo is committed to assisting our clients to achieve their
		objectives and to comply with Ontario's Condominium Act, 1998.</p>
	<p>Please contact us for further information or to receive a proposal
		for our services.</p>
<?php		
	}
	function doArea2_links() {
?>
		<ul class="fcg">
			<li><a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm">Ontario Condominium Act</a></li>
			<li><a href="http://www.e-laws.gov.on.ca/html/regs/english/elaws_regs_010048_e.htm#BK45">Ontario Regulation 48/01</a></li>
			<li><a href="http://www.e-laws.gov.on.ca/html/regs/english/elaws_regs_010049_e.htm">Ontario Regulation 49/01</a></li>
		</ul>
<?php
	}
}
