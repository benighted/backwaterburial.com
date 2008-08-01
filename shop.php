<?php
	echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd' />\n";
	echo "<html>";
	include('head.php');
	echo " <body>";
	echo "	<div class='top'></div>";
	echo "	<div class='middle'>";
	echo "			<div class='center'>";
	echo "				<div class='logo'></div>";
	include('menu.php');
?>

<div id="store">
	<h2>Online Store</h2>
	<p>All purchases go directly to the band, so <a href="contact.php">contact us</a> with any issues.  All procedes will be used to get us around to shows and produce more merchandise for our loyal fans.  If you have any suggestions for new products you'd like to see, let us know.  Thanks!</p>

	<h2>CDs</h2>
	<p>These are nothing too fancy, the price you pay here covers our expense and the rest goes toward getting some nicer CDs printed professionally. The artwork on top is burned on to the disc (LightScribe), so there is no cheap label to get stuck in your CD player.</p>

	<img src="./img/2008_demo_disc.png" style="margin: auto" /><br/><br/>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	</form>


	<h2>T-Shirts</h2>
	<p>Please specify your preferred size(s) in the shipping details during checkout.  If we do not have your size, we will contact you by email with replacement or refund options.</p>

	<img src="./img/shirt_sizes.jpg" style="margin: auto" /><br/><br/>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHdwYJKoZIhvcNAQcEoIIHaDCCB2QCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYACGDt1GwQBAPJOHEi9ogSMe5nETO3mk9ZdBXquzaiUivwzVNq/Cz5mHxtLtcMpRp3+0Q12xJeY0SHETUkX8jlYp5c6oH8yaDDUhM7ZC+XE/o5iij2VgS0qLoecbVtRCm5kv0gqAqFeAoT4BHagCCsP0PBMc/d7pmC9ePKZcsu5JDELMAkGBSsOAwIaBQAwgfQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQI7d7/S/dabgeAgdDDSCIxjPZERppFhYJKJeXYxJaS1JyVohUJLZxMpb1XW87ygiGGn/4eyA8e9hHuUkZYdtVEbjVRSM+bYRejjA/Egltee31VJaezJDzzkZ6Kvq0x3AMo/m0gZLFrFBv2Y57TdlzkCuRsEKrwqtXN/Wn8sMY1t1d0bc+EAzFWAHmu4vZ/43PGxqfhVeisxQ80qOnke46XArQLBynnC/aUfbRyZntbBC2xUfge0sPem9XaamVnG013pYVAndHmLDHRTJL3VNxFzVyTpZprOw8RrWphoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMDgwNTExMTUzNzM1WjAjBgkqhkiG9w0BCQQxFgQU0/nX9LL+MT60sHg8zs/IQJ+0yg8wDQYJKoZIhvcNAQEBBQAEgYBBBlOwkhyYTRYOJsqgkIzwooIPW4Aehxr55blLWQIOC9l4ai2ZCkfkQtKXYm1J+64i3GbEEa8OdbMkvFt56FhdHZnXZMom9JBZDgFLrrzUlZkPKWVQrMJqtM4rce1QMgBnQJvQKE3cdgD75JHUudqCGpuCrml/hTDN4P4J0bwY1A==-----END PKCS7-----
	">
	</form>


	<h2>Stickers</h2>
	<p>Large stickers are approximately 2.5" tall and 7" long, small stickers are about 1.5" tall and 4" long.  All are made of high-quality vinyl in almost any color you want.  Please specify what color you would like in the shipping details during checkout, or else we will assume you want white lettering on black background.</p>

	<img src="./img/sticker.png" style="margin: auto" /><br/><br/>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	</form>


	<h2>Donations</h2>
	<p>Traveling around and playing shows is not cheap and we are not rich men. Any donation helps to keep us on the road, even $1 adds up if enough people help out...</p><br/><br/>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
	">
	</form>

<?php 
	echo "			</div>";
	echo "	</div>";
	echo "	<div class='bottom'></div>";
	echo "	</body>";
	echo "</html>";
?>

