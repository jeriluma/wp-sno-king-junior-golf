<!DOCTYPE html>
<html ng-app="skjrgolfapp">
<head>
    <title>SKJrGolf</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500, 400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
</head>
<body ng-controller="skjrgolfctrl">

<header>
    <div class="container">
        <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
    </div>
</header>

