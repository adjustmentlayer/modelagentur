<nav class="ph4 f5_5 flex flex-wrap justify-center ">

<?php 
    
    // Чистим все теги, кроме ссылок
    print strip_tags( wp_nav_menu( 
                                [
                                    'echo' => false,
                                    'menu' => 'header-menu'
                                ] 
                            ), '<a>' );
    ?>

</nav>

