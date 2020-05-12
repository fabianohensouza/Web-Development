<?php
$gymzone_fitness_copyright = get_theme_mod('gymzone_fitness_copyright');
$gymzone_fitness_design    = get_theme_mod('gymzone_fitness_design');
?>
<?php if ($gymzone_fitness_copyright || $gymzone_fitness_design) { ?>
    <div class="footer-bottom">

        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-xs-12">

                    <div class="design text-center">

                        <?php if (get_theme_mod('gymzone_fitness_design')) { ?>
                            <?php echo esc_html($gymzone_fitness_design); ?>
                        <?php } ?>

                    </div><!--design-->

                </div><!--col-sm-6-->

                <div class="col-sm-12 col-xs-12">

                    <div class="copyright text-center">


                        <?php if (get_theme_mod('gymzone_fitness_copyright')) { ?>
                            <?php echo esc_html($gymzone_fitness_copyright); ?>
                        <?php } ?>         
                    </div><!--copyright-->

                </div>



            </div><!--row-->

        </div><!--container-->

    </div><!--footer-bottom-->
    <?php
}?>