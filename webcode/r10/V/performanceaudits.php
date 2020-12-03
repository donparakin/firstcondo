<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Performance Audits';
	public $pageLayout = '01112';
	public $pageMenu = 'ps.pa';
	
	function doArea1() {
?>
	<h1 class="atTop">Performance Audits</h1>
	<?= G::$accent_p ?> 
	<p>The Condominium Act, 1998, requires that the first board of directors
		of a new residential condominium, even if it is controlled by the
		developer, commission a performance audit to determine whether there
		are any deficiencies in the construction of the common elements in
		time to submit a claim to <a href="http://www.tarion.com/">Tarion
		Warranty Corporation</a> (formerly known
		as the Ontario New Home Warranty Program).</p>
	<h1>Our Report</h1>
	<p>First Condo's <i>Performance Audit</i> complies with the requirements
		of both the Condominium Act, 1998 (5c), and the 
		<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_90o31_e.htm">
		Ontario New Home Warranties Plan Act</a>.</p>
	<?= G::$accent_p ?> 
	<p>In the first stage of the <i>Performance Audit</i> process we will
		conduct inspections, investigations and analyses in order
		to determine if any deficiencies exist with respect to code violations,
		material defects and workmanship.  As part of the investigation,
		condominium unit owners will be surveyed about any possible damage to
		their units due to any common element defects.</p>
	<p>The <i>Performance Audit Report</i> will also contain recommendations
		for remediation of documented deficiencies in the common elements.</p>
	<?= G::$accent_p ?> 
	<p>The second stage of the <i>Performance Audit</i> is carried out closer
		to the end of the first year to ensure that all deficiencies identified
		in the Performance Audit have been successfully corrected by the
		developer and the results are submitted to Tarion.</p>
	<?= G::$accent_p ?> 
	<p>An optional service to our clients is the second year Performance Audit
		which is focused on the second year warranty items which are also
		identified by the Ontario New Home Warranties Plan Act.</p> 
<?php		
	}
	function doArea2_links() {
?>
		<ul class="fcg">
			<li><a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_90o31_e.htm">Ontario New Home Warranties Plan Act</a></li>
			<li><a href="http://www.tarion.com/">Tarion Warranty Corporation</a></li>
		</ul>
<?php		
	}
}
