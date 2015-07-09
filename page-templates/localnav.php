<?php 
    /**
     * Template Name: Local Nav
     *
     * Content organized in 1 column with local navigation
     *
     * @package wp-sno-king-junior-golf-theme
     * @since wp-sno-king-junior-golf-theme 2.0
     */
?>

<?php get_header(); ?>
 
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-push-8 col-lg-4">
            <ul ng-init="current = 0">
                <?php
                    if($pagename == '') {
                        $pagename = 'home';
                    }

                    $q = 'category_name=' . $pagename . '&orderby=date&order=asc';
                    query_posts($q);
                    $i = 0;
                    while (have_posts()) : the_post();
                        ?> <li ng-click="current = <?php echo $i; ?>"> <?php   
                            the_title();
                        ?> </li> <?php   
                        $i++;
                    endwhile;
                ?>
            </ul>
        </div>
        <div class="col-xs-12 col-lg-pull-4 col-lg-8">
            <?php
                if($pagename == '') {
                    $pagename = 'home';
                }

                $q = 'category_name=' . $pagename . '&orderby=date&order=asc';
                query_posts($q);
                $i = 0;
                while (have_posts()) : the_post();
                    ?> <div class="col-xs-12" ng-show="current == <?php echo $i; ?>"> <?php   
                        ?> <h3> <?php the_title(); ?> </h3> <?php   
                        ?> <p> <?php the_content(); ?> </p> <?php
                    ?> </div> <?php   
                    $i++;
                endwhile;
            ?>
        </div>
    </div>
</div>
 
<?php get_footer(); ?>