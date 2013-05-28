<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->
	<a id="contactMe"></a>
	<footer id="colophon" role="contentinfo">
		<!-- MY CODE STARTS HERE - 3 columns in footer -->
		<div class="3col_wrapper">
			<!-- FIRST COLUMN, SCHEDULE FOR EACH QUARTER INFO -->
			<div class="col-footer">
				<h3 class="footer-h3">Summer 2013 class schedule</h3>
				
				<!-- Doug's Schedule -->
				<h4 class="footer-h4">Douglas Brull</h4>
				<div class="class-schedule">
					<p class="schedule-bold">Portfolio / Portfolio Prep</p>
					<p class="schedule">T/R 5:00pm – 8:00pm</p>
					<p class="schedule-bold">Design Production Team</p>
					<p class="schedule">T/R 8:00pm – 11:00pm</p>
				</div>
				<!-- Matthews's Schedule -->
				<h4 class="footer-h4">Matthew Luken</h4>
				<div class="class-schedule">
					<p class="schedule-bold">Not teaching this quarter</p>
				</div>
			</div>
			
			<!-- SECOND COLUMN, CONTACT INFO -->
			<div class="col-footer">
				<h3 class="footer-h3">Contact Information &amp; Office Hours</h3>
				<h4 class="footer-h4">Douglas Brull</h4>
				<p class="schedule-bold">grandpubbah@gmail.com</p>
				<p class="schedule-toppadding">If you don't care when I see the email:</p>
				<p class="schedule-bold">dbrull@aii.edu</p>
				<h4 class="footer-h4">Matthew Luken</h4>
				<p class="schedule-bold">ridledidle@gmail.com</p>
			</div>
			
			<!-- THIRD COLUMN, MISSING CLASS FORM -->
			<div class="col-footer">
				<h3 class="footer-h3">I won't be here...</h3>
			</div>
			<div class="footer-info">
				<p>© Grandpubbah. Website built by OpticPop</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>