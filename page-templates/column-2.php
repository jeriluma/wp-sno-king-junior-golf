<?php 
    /**
     * Template Name: 2 Column
     *
     * Content organized in 2 columns
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
        <?php
            if($pagename == '') {
                $pagename = 'home';
            }

            $q = 'category_name=' . $pagename . '&orderby=date&order=asc';
            query_posts($q);
            while (have_posts()) : the_post();
                ?> <div class="col-xs-12 col-md-6"> <?php   
                    ?> <h3> <?php the_title(); ?> </h3> <?php   
                    ?> <p> <?php the_content(); ?> </p> <?php
                ?> </div> <?php   
            endwhile;
        ?>
    </div>
</div>
 
<?php get_footer(); ?>