
</div><!-- #page -->
</div><!-- homeContentWrap / contentwrap -->
<footer id="colophon" class="site-footer">

<a id="footer"></a>	
	<?php get_template_part('partials/content','footerWidgets'); ?>
	<?php //get_template_part('partials/content','footerMenuCredit'); ?>
</footer><!-- #colophon -->


            <div id="credits">
			<?php printf( __( '&copy;', 'skematik' )); ?> <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name');?></a> <?php echo date('Y');?> <span>|</span> <a href="http://www.mayecreate.com/what-we-do/web-design/" target="_blank">Web Design by MayeCreate Design</a>
            </div>


</div><!-- // pagewrapper -->






<?php get_template_part('partials/content','mobileMenu'); ?>
<?php wp_footer(); ?>


</body>

</html>

