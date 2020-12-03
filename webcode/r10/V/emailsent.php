<?php
$V = new TheView();
$V->doPage();

class TheView extends V_Layouts_LeftNav1 {
	public $pageTitle = 'Email Sent';
	public $pageLayout = '01112';
	public $pageMenu = 'cu';
	
	function doArea1() {
?>
	<h1 class="atTop">Email Sent</h1>
	<?= G::$accent_p ?> 
	<table id="contacts">
		<tr>
			<td class="c1">Status:</td>
<?php
	if ( G::$M['sentOkay'] )
		echo "\t\t\t<td>Your email was sent.</td>\n";
	else
		echo "\t\t\t<td><span style=\"font-size:240%; color:#fff; background-color:#f00;\">==ERROR==</span><br>Your email was NOT sent.</td>\n";
?>
		</tr>
		<tr>
			<td class="c1"></td>
			<td id="email">
				<p>To:</p>
				<div class="in"><?= G::$M['mail']['to'] ?>&nbsp;</div>
				<p>Your name:</p>
				<div class="in"><?= G::$M['mail']['fromName'] ?></div>
				<p>Your phone:</p>
				<div class="in"><?= G::$M['mail']['fromPhone'] ?>&nbsp;</div>
				<p>Your email id:</p>
				<div class="in"><?= G::$M['mail']['fromEmail'] ?>&nbsp;</div>
				<p>Subject:</p>
				<div class="in"><?= G::$M['mail']['subject'] ?></div>
				<p>Message:</p>
				<div class="in"><?= str_replace("\n",'<br>',G::$M['mail']['message']) ?></div>
			</td>
		</tr>
	</table>
<?php
	}
}