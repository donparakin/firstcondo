<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Reserve Fund Studies';
	public $pageLayout = '01112';
	public $pageMenu = 'ps.rfs';
	
	function doArea1() {
?>
	<h1 class="atTop">Reserve Fund Studies</h1>
	<?= G::$accent_p ?> 
	<p>A <i>Reserve Fund Study</i> is a financial document that provides the
		basis for the funding of major repairs and replacement of the common
		elements and assets of the corporation.</p>
	<p>Condominium corporations in Ontario are legally required to set up and
		maintain at least one reserve fund. Minimum legal requirements are set
		out in Sections 93, 94, and 95 of Ontario's Condominium Act, 1998(5a),
		and clauses 27 to 33 of its Regulation 48/01.</p>
	<?= G::$accent_p ?> 
	<p>First Condo's <i>Functional Reserve Fund Study</i> exceeds legal
		requirements and provides condominiums with an effective and realistic
		plan for managing reserve funds.</p>
	<p>First Condo's <i>Functional Reserve Fund Study</i> has been adopted as
		the standard for the Real Estate Institute of Canada's professional
		designation of Certified Reserve Planner and is widely recognized as
		the most advanced reserve fund planning system in Canada.</p>

	<h1>Our Report</h1>
	<?= G::$accent_p ?> 
	<p>First Condo's <i>Functional Reserve Fund Study</i> is a clear
		step-by-step report that incorporates clear explanations, comprehensive
		physical and financial analyses, and valuable tools to assist clients
		to understand and implement effective reserve fund strategies.</p>
	<p>Highlights of our Report include:</p>
	<ul class="fcg">
		<li><b>Reserve Fund Component Description and Analysis:</b>includes an
			information sheet for each of the Corporation's common elements,
			detailing normal lifespan, observed condition and deficiencies,
			and estimated repair timelines and costs.</li>
		<li><b>First Condo Statement of Reserve Fund Operations:</b> examines and
			compiles the Corporation's past reserve fund transactions to more
			accurately forecast future reserve fund expenditures.</li>
		<li><b>First Condo Economic Analysis:</b> examines trends in overall
			construction cost inflation and achievable interest rates for the
			Corporation's reserve fund in order to provide realistic projections
			for repair costs and reserve fund balances;</li>
		<li><b>First Condo Benchmark Analysis:</b> estimates optimum reserve fund
			contributions using a sinking fund method, which is more appropriate
			than the straight line method commonly used;</li>
		<li><b>First Condo Reserve Fund Deficiency Analysis:</b> compares actual
			reserve fund balances to estimated reserve requirements to effectively
			determine recommended annual contributions by unit owners to the
			reserve fund;</li>
		<li><b>30 Year Reserve Fund Projection:</b> presents the proposed reserve
			fund operations for the next 30 years in one convenient chart.</li>
	</ul>  
<?php		
	}
	function doArea2_links() {
?>
	<img src="/sc/<?=REV?>/all/img/fcg.rfe.gif"/>
<?php
	}
}
