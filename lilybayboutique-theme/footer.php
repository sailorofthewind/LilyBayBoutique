<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lilybayboutique
 */

?>

<?php wp_footer(); ?>

	<!--Scroll To Top Button-->

	<div><i class="fa fa-angle-up fa-2x scroll-to-top" aria-hidden="true"></i></div>

	</div>

	<footer id="main-footer">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-sm-6 col-sm-push-6">

				<!-- Footer Menu -->
				<?php 

					wp_nav_menu( array(

						'theme_location'	=> 'footer',
						'container'			=> 'nav',
						'menu_class'		=> 'list-unstyled'

					));

				?>

				</div>


				<div class="col-xs-12 col-sm-6 col-sm-pull-6">

					<p>Get on the <span class="list-handwriting">List</span></p>

					<!-- Mail Poet Newsletter -->
					<div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html59033a87003ac-2" class="wysija-msg ajax"></div><form id="form-wysija-html59033a87003ac-2" method="post" action="#wysija" class="widget_wysija html_wysija">
					<p class="wysija-paragraph">
					    
					    
					    	<input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Email Address" placeholder="Email Address" value="" />
					    
					    
					    
					    <span class="abs-req">
					        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
					    </span>
					    
					</p>
					<input class="wysija-submit wysija-submit-field" type="submit" value="JOIN" />

					    <input type="hidden" name="form_id" value="1" />
					    <input type="hidden" name="action" value="save" />
					    <input type="hidden" name="controller" value="subscribers" />
					    <input type="hidden" value="1" name="wysija-page" />

					    
					        <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
					    
					 </form></div>


					<!-- Social Media & Copyright -->
					<div id="socialmediafooter">

						<!-- Social Media Links -->
						<a href="https://www.instagram.com/lilybayboutiqueshop/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://en-gb.facebook.com/lilybayboutique/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.etsy.com/shop/LilyBayBoutique" target="_blank"><i class="fa fa-etsy" aria-hidden="true"></i></a>
						<a href="https://twitter.com/lilybayboutique" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

						<!-- Copyright -->
						<p class="copyright">2017 &copy; Lily Bay Boutique</p>

					</div>
				</div>


			</div>
		</div>
		
	</footer>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Jquery fallback -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<!-- custom js -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
<!-- Instafeed js -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/instafeed.min.js"></script>
<!-- Mail Poet -->
<script type="text/javascript" src="http://localhost/wordpress/wp-includes/js/jquery/jquery.js?ver=2.7.10"></script>
<script type="text/javascript" src="http://localhost/wordpress/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.7.10"></script>
<script type="text/javascript" src="http://localhost/wordpress/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.10"></script>
<script type="text/javascript" src="http://localhost/wordpress/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.10"></script>
<script type="text/javascript">
                /* <![CDATA[ */
                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://localhost/wordpress/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
                /* ]]> */
                </script><script type="text/javascript" src="http://localhost/wordpress/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.10"></script>

</body>
</html>
