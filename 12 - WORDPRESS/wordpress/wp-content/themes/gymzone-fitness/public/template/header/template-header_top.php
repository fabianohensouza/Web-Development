<a class="skip-link screen-reader-text" href="#contentdiv">
<?php esc_html_e( 'Skip to content', 'gymzone-fitness' ); ?></a>
<div id="maintopdiv">
    <div class="header-top">
        <div class="container" >
            <div class="row">  
                <div class="col-md-4  col-sm-12 col-lg-4 headercommon header-left">            
                    <ul> 
                        <li>
                            <?php $gymzone_fitness_phone = get_theme_mod('gymzone_fitness_phone'); ?>
                            <?php if (get_theme_mod('gymzone_fitness_phone')) { ?>
                                <i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo esc_html($gymzone_fitness_phone); ?>
                            <?php } ?>
                        </li>
                        <li class="lastemail">
                            <?php $gymzone_fitness_email = get_theme_mod('gymzone_fitness_address'); ?>
                            <?php if (get_theme_mod('gymzone_fitness_address')) { ?>
                                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo esc_html(sanitize_email($gymzone_fitness_email)); ?>
                            <?php } ?>                             
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div> <!--col-sm-3--> 
                <div class="col-md-4  col-lg-4  col-sm-12 header_middle  leftlogo">

                    <?php if (display_header_text() == true) { ?>
                        <div class="logotxt">
                            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                            <p><?php bloginfo('description'); ?></p>
                        </div>
                    <?php } ?>


                </div><!--col-md-4 header_middle-->
                <div class="col-md-4 col-lg-4 col-sm-12 social-icons headercommon">
                    <ul>
                        <?php if (get_theme_mod('gymzone_fitness_fb')) { ?>
                            <li><a title="<?php esc_attr_e('Facebook', 'gymzone-fitness'); ?>" class="fa fa-facebook" target="_blank" href="<?php echo esc_url(get_theme_mod('gymzone_fitness_fb')); ?>"></a> </li>
                        <?php } ?>
                        <?php if (get_theme_mod('gymzone_fitness_twitter')) { ?>
                            <li><a title="<?php esc_attr_e('twitter', 'gymzone-fitness'); ?>" class="fa fa-twitter" target="_blank" href="<?php echo esc_url(get_theme_mod('gymzone_fitness_twitter')); ?>"></a></li>
                        <?php } ?>
                        <?php if (get_theme_mod('gymzone_fitness_glplus')) { ?>
                            <li><a title="<?php esc_attr_e('googleplus', 'gymzone-fitness'); ?>" class="fa fa-google-plus" target="_blank" href="<?php echo esc_url(get_theme_mod('gymzone_fitness_glplus')); ?>"></a></li>
                        <?php } ?>
                        <?php if (get_theme_mod('gymzone_fitness_in')) { ?>
                            <li><a title="<?php esc_attr_e('linkedin', 'gymzone-fitness'); ?>" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url(get_theme_mod('gymzone_fitness_in')); ?>"></a></li>
                        <?php } ?>
                    </ul>
                    <div class="clear"></div>
                </div><!--col-md-34 col-lg-4 header_right-->
                <div class="clearfix"></div>
            </div><!--row-->
        </div><!--container-->
    </div><!--main-navigations-->
    <section id="main_navigation">
        <div class="container" >
            <div class="row"> 
                <div class="main-navigation-inner rightmenu">
                    <div class="toggle">
                        <a class="togglemenu" href="#"><?php esc_html_e('Menu', 'gymzone-fitness'); ?></a>
                    </div><!-- toggle --> 
                    <div class="sitenav">
                        <div class="nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary'                            
                        ));
                        ?>
                        </div>
                    </div><!-- site-nav -->
                </div><!--<div class=""main-navigation-inner">-->
            </div><!--row-->
        </div><!--container-->
    </section><!--main_navigation-->
</div><!--maintopdiv-->