<footer class="ph4 ph0-ns helvetica-neue fw3 pv4 mv3 silver flex flex-column items-center f5_5">
        <div class="m-100 mw5 tc">

            <nav class="mb4">
            <?php 

                // Чистим все теги, кроме ссылок
                print strip_tags( wp_nav_menu( 
                                            [
                                                'echo' => false,
                                                'menu' => 'footer-menu'
                                            ] 
                                        ), '<a>' );
                ?>
            </nav>
            <div>Copyright © All rights reserved 2015 Modelagentur Frei</div>
        </div>

    </footer>