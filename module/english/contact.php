<!--CONTACT TITLE-->
<h2 id="contact" class="sectionHead">Contact Me</h2>
<!--CONTACT FORM-->
<div id="contactform" class="contact">
	<form action="sendMail.php" method="post">
		<div id="contactInfo">
			<p>
				<label class="smallInput" for="name">Name <span class="required">*</span></label><br/>
				<input type="text" name="name" id="name" value="" class="input round3"/>
			</p>
			<p>
				<label class="smallInput" for="email">Email <span class="required">*</span></label><br/>
				<input type="text" name="email" id="email" value="" class="input round3"/>
			</p>
			<p>
				<label class="smallInput" for="phone">Phone</label><br/>
				<input type="text" name="phone" id="phone" value="" class="input round3"/>
			</p>
		</div>
		<p id="emailMessage">
			<label class="smallInput" for="message">Message <span class="required">*</span></label><br/>
			<textarea name="message" id="message" class="input round3"></textarea>
		</p>

		<!-- EMAIL SUBJECT -->
		<input name="subject" id="subject" type="hidden" value="ZHIHUA·WEI Resume Email Message"/>
		<!-- YOUR EMAIL ADDRESS -->
		<input name="repemail" id="repemail" type="hidden" value="zhihua_wei@qq.com"/>
		<!-- ENTER YOUR URL BELOW: MUST CONTAIN #contact AT THE END OF THE URL-->
		<input name="pagelink" id="pagelink" type="hidden" value="http://resume.zhihuawei.xyz/index.php#return"/>
		<input name="send" id="submit_btn" type="submit" class="round3 clearRight" value="Send Message"/>

		<p id="required"><span class="required">*</span> <em>= Required field</em></p>
	</form>
</div>
<!--END CONTACT FORM-->
<p id="messageSent">Message sent. Thank you!</p>

<div class="clear"></div>