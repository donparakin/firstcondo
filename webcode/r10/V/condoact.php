<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Condo Act';
	public $pageLayout = '01112';
	public $pageMenu = 'ca';
	
	function doArea1() {
?>
	<h1 class="atTop">Condominium Act, 1998</h1>
	<?= G::$accent_p ?> 
	<p>Ontario's Condominium Act, 1998, was passed on December 17, 1998, and
		proclaimed on May 5, 2001.  The following sections* of the Act are
		relevant to Reserve Funds, Insurance Appraisals and Performance Audits.
	<p>* These excerpts are unofficial versions of the Government of Ontario
		legal materials and are provided for convenience only in accordance with
		copyright policies of the Queen's Printer for Ontario.  Please refer to
		the <a href="http://www.e-laws.gov.on.ca/tocBrowseCL_E.asp?lang=en&selLetter=C&selectedAct=Condominium%20Act,%201998#act44">
		E-laws website</a> for the official version of Government of Ontario
		legal materials.</p>
		
	<h1>Relevant Sections</h1>
	<ul class="fcg">
		<li><b>Reserve Fund:</b> The corporation shall establish and maintain
			one or more reserve funds.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s1">1998, c. 19, s. 93 (1)</a>.</li>
		<li><b>Purpose of fund:</b> A reserve fund shall be used solely for the
			purpose of major repair and replacement of the common elements and
			assets of the corporation.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s2">1998, c. 19, s. 93 (2)</a>.</li>
		<li><b>Designation not required:</b> A fund set up for the purpose
			mentioned in subsection (2) shall be deemed to be a reserve fund
			even though it may not be so designated.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s3">1998, c. 19, s. 93 (3)</a>.</li>
		<li><b>Contributions to fund:</b> The corporation shall collect
			contributions to the reserve fund from the owners, as part of their
			contributions to the common expenses.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s4">1998, c. 19, s. 93 (4)</a>.</li>
		<li><b>Amount of contributions:</b> Unless the regulations made under
			this Act specify otherwise, until the corporation conducts a first
			reserve fund study and implements a proposed plan under section 94,
			the total amount of the contributions to the reserve fund shall be
			the greater of the amount specified in subsection (6) and 10 per cent
			of the budgeted amount required for contributions to the common
			expenses exclusive of the reserve fund.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s5">1998, c. 19, s. 93 (5)</a>.</li>
		<li><b>Same, after first reserve fund study:</b> The total amount of
			the contributions to the reserve fund after the time period specified
			in subsection (5) shall be the amount that is reasonably expected to
			provide sufficient funds for the major repair and replacement of the
			common elements and assets of the corporation, calculated on the basis
			of the expected repair and replacement costs and the life expectancy
			of the common elements and assets of the corporation.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s6">1998, c. 19, s. 93 (6)</a>.</li>
		<li><b>Income earned:</b> Interest and other income earned from the
			investment of money in the reserve fund shall form part of the fund.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s93s7">1998, c. 19, s. 93 (7)</a>.</li>
		<li><b>Reserve fund study:</b> The corporation shall conduct periodic
			studies to determine whether the amount of money in the reserve fund
			and the amount of contributions collected by the corporation are
			adequate to provide for the expected costs of major repair and
			replacement of the common elements and assets of the corporation.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s94s1">1998, c. 19, s. 94 (1)</a>.</li>
		<li><b>Contents of study:</b> A reserve fund study shall be of the
			prescribed class, shall include the material that is prescribed for
			its class and shall be performed in accordance with the standards that
			are prescribed for its class.
			<a href="http://www.e-laws.gov.on.ca/html/statutes/english/elaws_statutes_98c19_e.htm#s94s2">1998, c. 19, s. 94 (2)</a>.</li>
	</ul>
<?php		
	}
}
