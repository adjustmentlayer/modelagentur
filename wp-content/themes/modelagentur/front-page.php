<?php
/*
Template Name:  Stratseite
*/
?>

<!-- html код шаблона -->

<?php get_header(); ?>

    <main class="flex-grow1">
        <section class="ph4-l w-100 pv2 pv3-ns pv5-l">
            <div class="mw9 center slider2">
            <?php 
                // параметры по умолчанию
                $args = array(
                    'numberposts' => 0
                );
                
                $posts = get_posts( $args );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                    <div class="pa3">
                        <div class="pa3 relative flex hide-child" >
                            <div class="absolute aspect-ratio--object child shadow-2">
                                <div class="absolute top-1 bottom-1 right-1 left-1 hide-child">
                                    <div class="bg-gray-73 h-100 child flex flex-column items-center justify-center white">
                                        <p class="tc"><?php the_title();?></p>
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/plus.png" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <img style="100%" height="auto" src="<?php the_post_thumbnail_url('model_cart_preview');?>" alt="<?php the_title() ?>">

                            
                            
                        </div>
                    </div>
                
                    <?php
                    }
                        wp_reset_postdata(); // сброс
                    ?>
            </div>
        </section>
        <section class="ph4-l pv2 bt bb b--moon-gray bg-near-white">
            <div class="mw9 center flex flex-column items-center mb5">
                <h2 class="helvetica-neue fw3 f2_2 h2 heading__has-separator">Über Uns</h2>
                <div class="mw8 tc f6 ph4">
                    <?php
                        wp_reset_query();
                        the_content(); 
                    ?>
                </div>
                
            </div>
        </section>
        <section class="pv2">
            <div class="helvetica-neue flex flex-column items-center">
                <h2 class=" fw3 f2_2 heading__has-separator">Anfrage senden</h2>
                <form action="" class="ph4 ph0-ns w-100 mw6 flex flex-column mb5 ">
                    <input class="f4_4 pa3 mv1 ba b--moon-gray" type="text" placeholder="Ihre Name">
                    <input class="f4_4 pa3 mv1 ba b--moon-gray" type="text" placeholder="Ihre Vorname">
                    <textarea class="feedback-form__textarea f4_4 pa3 mv1 h4 ba b--moon-gray" name="" id="" placeholder="Ihre Nachricht"></textarea>
                    <input class="dim pointer fw4 pa3 mv1 bg-gray light-silver bn f4_4" type="submit" value="JETZT KOSTENLOSE ANFRAGE">
                </form>
            </div>
        </section>
    </main>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>