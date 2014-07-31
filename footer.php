<?php global $asteria;?>
<?php if (!empty ($asteria['totop_id'])) { ?>
<!--To Top Button-->
<a class="to_top"><i class="fa-angle-up fa-2x"></i></a>
<?php } ?>
<!--To Top Button END-->


<!--Footer Start-->
<div class="fixed_site">
	<div class="fixed_wrap footefixed">

<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_footwdgt'])) ) { ?>
<?php }else{ ?>
<div id="footer">
    <div class="center">
        <!--Footer Widgets START-->
        <div class="widgets"><ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(__('Footer Widgets', 'asteria')) ) : ?><?php endif; ?></ul></div>
        <!--Footer Widgets END-->
    </div>
</div>
<?php } ?>
<!--Footer END-->

<!--Copyright Footer START-->
<div id="copyright">
    <div class="center">
        <!--Site Copyright Text START-->
        <div class="copytext">
		<?php if (!empty ($asteria['footer_text_id'])) { ?>
        <?php $foot = html_entity_decode($asteria['footer_text_id']); $foot = stripslashes($foot); echo $foot; ?>
        <?php } ?>
        </div>
        <!--Site Copyright Text END-->
        
		</div>
</div>
<!--Copyright Footer Start-->
    </div>
</div>

<!--Google Analytics Start-->
<?php if (!empty ($asteria['google_analytics_id'])) { ?><script><?php echo $asteria['google_analytics_id']; ?></script><?php } ?>
<!--Google Analytics END-->

<?php wp_footer(); ?>
</body>
</html>