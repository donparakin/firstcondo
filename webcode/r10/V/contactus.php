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
			<td class="c1">Email:</td>
			<td>To reduce spam, our email id is no longer displayed here. Use this instead:
				<form id="email" class="email" method="post" action="/Email" onsubmit="return checkStuff();">
					<p><label for="to">To:</label></p>
					<input id="to" name="to" type="text" value="First Condo Group: More Info" />
					<p><label for="fromName">Your name:</label></p>
					<input id="fromName" name="fromName" type="text" />
					<p><label for="fromPhone">Your phone: (optional)</label></p>
					<input id="fromPhone" name="fromPhone" type="text" />
					<p><label for="fromEmail">Your email id: (optional)</label></p>
					<input id="fromEmail" name="fromEmail" type="text" />
					<p><label for="subject">Subject:</label></p>
					<input id="subject" name="subject" type="text" value="More Info" />
					<p><label for="message">Message:</label></p>
					<textarea id="message" name="message" wrap="virtual" rows="8"></textarea>
					<br><br>
					<input id="sendEmail" name="sendEmail" type="submit" value="  Send Email To First Condo Group  " />
				</form>
			</td>
		</tr>
	</table>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
		function checkStuff() {
			isEmpty = /^\s*$/ ;
			if ( isEmpty.test($("#fromName").val()) ) {
				alert("Your Name: is blank.\n\nEnter your name (example: John Smith).");
				$("#fromName").focus();
				return false;
			}
			if ( isEmpty.test($("#fromPhone").val()) && isEmpty.test($("#fromEmail").val()) ) {
				alert("We cannot reply to you if you do not provide a phone or email id.\n\nEnter your phone or your email id (or both).");
				$("#fromPhone").focus();
				return false;
			}
			if ( !isEmpty.test($("#fromEmail").val()) ) {
				emailExp = /^\s*[\w\-\.]+\@[\w\-]+\.[\w\-\.]+\s*$/ ;
				if ( !emailExp.test($("#fromEmail").val()) ) {
					alert("Your Email: is invalid.\n\nEnter an valid email id (example: myUserid@myHost.com).");
					$("#fromEmail").focus();
					return false;
				}
			}
			if ( isEmpty.test($("#subject").val()) ) {
				alert("Subject: is blank.\n\nEnter a subject or title for your message.");
				$("#subject").focus();
				return false;
			}
			if ( isEmpty.test($("#message").val()) ) {
				alert("Message: is blank.\n\nEnter your email message.");
				$("#message").focus();
				return false;
			}
			return true;
		}
	</script>
<?php
	}
}