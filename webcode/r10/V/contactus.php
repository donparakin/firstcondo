<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Contact Us';
	public $pageLayout = '01112';
	public $pageMenu = 'cu';
	
	function doPageInsideHeadTags() {
// <xxxlink rel="stylesheet" type="text/css" href="http://o.aolcdn.com/dojo/1.2.0/dijit/themes/soria/soria.css">
// <xxxlink rel="stylesheet" type="text/css" href="http://o.aolcdn.com/dojo/1.2.0/dojo/resources/dojo.css">
?>
<?php
	}

	function doArea1() {
?>
	<h1 class="atTop">Contact Us</h1>
	<?= G::$accent_p ?> 
	<table id="contacts">
		<tr>
			<td class="c1">Mail:</td>
			<td>
				First Condo Group Limited<br>
				64 Jardin Drive, Suite 3B<br>
				Vaughan, Ontario<br>
				L4K 3P3<br><br>
				(<a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=64+Jardin+Drive,+Vaughan,+Ontario&sll=37.0625,-95.677068&sspn=48.15347,114.169922&ie=UTF8&hq=&hnear=64+Jardin+Dr,+Vaughan,+York+Regional+Municipality,+Ontario,+Canada&ll=43.74084,-79.401627&spn=0.345769,0.891953&z=11">Google Map</a>)
			</td>
		</tr>
		<tr>
			<td class="c1">Phone:</td>
			<td>(905) 761-9500</td>
		</tr>
		<tr>
			<td class="c1">Fax:</td>
			<td>(905) 761-9504</td>
		</tr>
		<tr>
			<td colspan="2">
			<iframe 
				src="https://docs.google.com/forms/d/e/1FAIpQLSfx6LbtIBIPoqWW0__nii33wwqK88SWijTOJn9bHt25OxOpbg/viewform?embedded=true"
				width="640" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
			</td>
		</tr>
	</table>
<?php
	}
}