<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Insurance Appraisals';
	public $pageLayout = '01112';
	public $pageMenu = 'ps.ia';
	
	function doArea1() {
?>
	<h1 class="atTop">Insurance Appraisals</h1>
	<?= G::$accent_p ?> 
	<p>The requirement for <i>Insurance Appraisals</i> is set out in the
		Condominium Act, 1998(5b), and in each Condominium Corporation's
		Declaration. The Declaration typically states the frequency of repeating
		<i>Insurance Appraisals</i> and specifies that it must be completed by an
		independent insurance appraiser. To be in compliance with the declaration
		it is important that the appraisal is not completed by your insurance
		company representatives.</p>
	<p>First Condo's <i>Insurance Appraisals</i> comply with all legal
		requirements and are recognized by major insurance providers.
	<p>First Condo's <i>Insurance Appraisals</i> estimate the cost of replacing
		the Corporation's buildings and site improvements with new structures,
		buildings and facilities of similar design, quality, material,
		workmanship and utility.</p>
	<p>The final replacement cost estimate includes construction cost,
		demolition and disposal costs, material dumping fees, and applicable
		taxes.  There are no deductions for depreciation.</p>
	
	<h1>Insurance Appraisal Updates</h1>
	<?= G::$accent_p ?> 
	<p>First Condo also provides annual update services to keep a comprehensive
		insurance appraisal current for more than one year. This is a cost
		effective way for corporations to ensure that they maintain adequate
		insurance coverage given the volatility of construction costs in recent
		years.</p>
	<p>First Condo will advise each client corporation on the most effective
		insurance appraisal schedule.  First Condo clients may also request
		reminders for their insurance appraisal updates.  These update reminders
		are free of charge.</p>  
<?php		
	}
}
