<!DOCTYPE html>
<html ng-app="skjrgolfapp">
<head>
    <title>Sno-King Junior Golf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500, 400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
</head>
<body ng-controller="skjrgolfctrl">

<header>
    <div class="container">
        <nav>
        	<h1>
    	        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <?php
                        $array = explode(' ', esc_attr( get_bloginfo( 'name', 'display' ) ), 2);
                        ?> <span> <?php echo $array[0]; ?> </span><?php
                        echo $array[1];
                    ?>
    	        </a>
    	    </h1>

            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
        </nav>
    </div>
    
    <h2 class="subtitle">
    	<div class="container">
            <?php bloginfo( 'description' ); ?>      
        </div>
    </h2>

</header>

