<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post
*/

?>
<?php get_header(); ?>
    <main class=" helvetica-neue flex-grow1 pt3">
        <h2 class="tc fw3 f2_2 h2 heading__has-separator">Top Models</h2>
        <section class=" cf mw9 center">
                <div class="fl w-50-l w-100 pa4">
                
                    <?php $images = get_post_block_gallery_images( get_the_ID() ); ?>
                    <div class="fl w-100 pb2 ">
                        <div class="slider3-for">
                            <?php if(!empty($images)){?>
                                <?php 
                                    foreach( $images as $image ){
                                    setup_postdata($image);
                                ?>
                                <img class="w-100 db" src="<?php echo $image ?>" alt="">
                                
                                <?php
                                }
                                    wp_reset_postdata(); // сброс
                                ?>
                            <?php }else { ?>
                                    <img class="w-100 db" src="<?php echo get_template_directory_uri(); ?>/assets/img/No_Img_Avail.jpg" alt="">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="fl w-100 slider3-nav">
                        <?php 
                            foreach( $images as $image ){
                            setup_postdata($image);
                        ?>
                        <div class="mr2"><img class="w-100 db" src="<?php echo $image ?>" alt=""></div>
                        
                        <?php
                        }
                            wp_reset_postdata(); // сброс
                        ?>
                    </div>
                    
                    
                </div>
                <div class="fl w-50-l w-100 pa4">
                    <h3 class="helvetica mb4 pb3 f3_3 fw7 mt0">
                        <?php the_title(); ?>
                    </h3>
                    <dl class="pv2 ph3 bg-near-white ba b--moon-gray">
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Größe: </dt>
                            <dd><?php the_field('grose'); ?> cm</dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Konfektion: </dt>
                            <dd><?php the_field('konfektion'); ?></dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Brust: </dt>
                            <dd><?php the_field('brust'); ?> cm</dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Taille: </dt>
                            <dd><?php the_field('taille'); ?> cm</dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Hüfte: </dt>
                            <dd><?php the_field('hufte'); ?> cm</dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Schuhe </dt>
                            <dd><?php the_field('schuhe'); ?></dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Haare:</dt>
                            <dd><?php the_field('haare'); ?></dd>
                        </div>
                        <div class="w-100 flex bb b--dotted bt-0 br-0 bl-0 pv1 mv1">
                            <dt class="w-30">Augen: </dt>
                            <dd><?php the_field('augen'); ?></dd>
                        </div>
                    </dl>
                    <div class="w-100 mt4">
                        <div class="f5_5 fw4 helvetica lh-copy">
                            <?php 
                                wp_reset_query();
                                wpse_get_content_without_images()
                            ?>
                        </div>
                    </div>
                </div>
        </section>
        
    </main>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>
</html>