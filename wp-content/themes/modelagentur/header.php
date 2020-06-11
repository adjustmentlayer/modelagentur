<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<title>Modelagentur</title>

<?php wp_head(); ?>
</head>
<body class="helvetica flex flex-column vh-100">
    <?php if(is_front_page()) { ?>
        <div class="main-screen w-100">
            <div class="slider1 ">
                <img class="db" src="<?php echo get_template_directory_uri();?>/assets/img/main-screen.png" alt="">
                <img class="db" src="<?php echo get_template_directory_uri();?>/assets/img/main-screen.png" alt="">
                <img class="db" src="<?php echo get_template_directory_uri();?>/assets/img/main-screen.png" alt="">
            </div>
        </div>
    <?php } ?>
    <header class="ph4-l w-100 bg-black light-gray pv3">
        <div class="mw9 center flex flex-column flex-row-l justify-between-l items-center">
            <?php the_custom_logo(); ?>
            <?php get_template_part('nav'); ?>
        </div>
    </header>