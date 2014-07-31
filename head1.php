<?php global $asteria;?>
<div class="header">
    <div class="center">
       <!--SOCIAL ICONS START -->
        <div class="head_soc tophead">
        <?php if(!empty($asteria['facebook_field_id'])){ ?><a target="_blank" class="ast_fb" href="<?php echo $asteria['facebook_field_id']; ?>"><i class="fa-facebook soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['twitter_field_id'])){ ?><a target="_blank" class="ast_twt" href="<?php echo $asteria['twitter_field_id']; ?>"><i class="fa-twitter soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['gplus_field_id'])){ ?><a target="_blank" class="ast_gplus" href="<?php echo $asteria['gplus_field_id']; ?>"><i class="fa-google-plus soc_big"></i></a> <?php } ?>
        <?php if(!empty($asteria['youtube_field_id'])){ ?><a target="_blank" class="ast_ytb" href="<?php echo $asteria['gplus_field_id']; ?>"><i class="fa-youtube-play soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['flickr_field_id'])){ ?><a target="_blank" class="ast_flckr" href="<?php echo $asteria['flickr_field_id']; ?>"><i class="fa-flickr soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['linkedin_field_id'])){ ?><a target="_blank" class="ast_lnkdin" href="<?php echo $asteria['linkedin_field_id']; ?>"><i class="fa-linkedin soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['pinterest_field_id'])){ ?><a target="_blank" class="ast_pin" href="<?php echo $asteria['pinterest_field_id']; ?>"><i class="fa-pinterest soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['tumblr_field_id'])){ ?><a target="_blank" class="ast_tmblr" href="<?php echo $asteria['tumblr_field_id']; ?>"><i class="fa-tumblr soc_big"></i></a><?php } ?>
        <?php if(!empty($asteria['instagram_field_id'])){ ?><a target="_blank" class="ast_insta" href="<?php echo $asteria['instagram_field_id']; ?>"><i class="fa-instagram soc_big"></i></a><?php } ?>  
        <?php if(!empty($asteria['rss_field_id'])){ ?><a target="_blank" class="ast_rss" href="<?php echo $asteria['rss_field_id']; ?>"><i class="fa-rss soc_big"></i></a><?php } ?>   
        </div>
        <!--SOCIAL ICONS END-->
    <!--LOGO START-->
    <div class="logo">
    <?php $logo = $asteria['logo_image_id']; if(!empty($logo['url'])){ ?>
    	<?php $logo = $asteria['logo_image_id']; ?>
    	<a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logo['url']; ?>" /></a>
    <?php }else{ ?>
			<?php if ( is_home() ) { ?>   
            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
            <?php }else{ ?>
            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
            <?php } ?>
    
    <?php } ?>
    </div>
    <!--LOGO END-->
  
	<!--MENU START--> 
        <!--MOBILE MENU START--><a id="simple-menu" href="#sidr"><i class="fa-align-justify"></i> <?php _e('Menu' , 'asteria'); ?></a><!--MOBILE MENU END--> 
    <div id="topmenu"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?></div>
   
    <!--MENU END-->
    
    </div>
</div>
