<?php
/*
    Template Name: Models
*/
?>
<?php get_header(); ?>
    <main class=" helvetica-neue flex-grow1 pt3">
        <h2 class="tc fw3 f2_2 h2 heading__has-separator">Top Models</h2>
        <section class=" cf mw9 center">
            <?php 
                
                $args = array(
                    'numberposts' => 0
                );
                
                $posts = get_posts( $args );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                    <div class="fl w-50 w-third-l pa3">
                    <div class="pa3 relative flex hide-child" >
                        <div class="absolute aspect-ratio--object child shadow-2">
                            <div class="absolute top-1 bottom-1 right-1 left-1 hide-child">
                                <div class="bg-gray-73 h-100 child flex flex-column items-center justify-center white">
                                    <p class=""><?php the_title();?></p>
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
            
                
                
                
 
            
            
        </section>
        
    </main>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>