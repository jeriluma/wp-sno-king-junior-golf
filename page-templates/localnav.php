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
    <h2><?php 
        if($pagename == '') {
            echo "Coaching for the Love of the Game";
        } else {
            echo $pagename;
        }
    ?></h2>
    <div class="row content">
        <div class="col-xs-12 col-md-push-8 col-md-4">
            <ul ng-init="current = 0" class="local-nav">
                <?php
                    if($pagename == '') {
                        $pagename = 'home';
                    }

                    $q = 'category_name=' . $pagename . '&orderby=date&order=asc';
                    query_posts($q);
                    $i = 0;
                    while (have_posts()) : the_post();
                        ?> <li ng-click="current = <?php echo $i; ?>" ng-class="{active : current == <?php echo $i; ?>}"> <?php   
                            the_title();
                        ?> </li> <?php   
                        $i++;
                    endwhile;
                ?>
            </ul>
        </div>
        <div class="col-xs-12 col-md-pull-4 col-md-8">
            <div class="row">
            <?php
                if($pagename == '') {
                    $pagename = 'home';
                }

                $q = 'category_name=' . $pagename . '&orderby=date&order=asc';
                query_posts($q);
                $i = 0;
                while (have_posts()) : the_post();
                    ?> <div class="col-xs-12" ng-if="current == <?php echo $i; ?>"> <?php   
                        ?> <h3> <?php the_title(); ?> </h3> <?php   
                        ?> <p> <?php the_content(); ?> </p> <?php
                    ?> </div> <?php   
                    $i++;
                endwhile;
            ?>
            </div>
        </div>
    </div>
</div>
 
<?php get_footer(); ?>