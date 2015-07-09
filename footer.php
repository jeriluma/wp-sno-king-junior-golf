<footer>
	<div class="container">
		<!-- <div class="row">
			<div class="col-xs-12 col-lg-4"></div>
			<div class="col-xs-12 col-md-6 col-lg-4"></div>
			<div class="col-xs-12 col-md-6 col-lg-4"></div>
			<div class="col-xs-12"></div>
		</div> -->
		<?php
			query_posts('category_name=footer&orderby=date&order=desc');
			$i = 1;
			while (have_posts()) : the_post();
				if($i == 1) {
					?> <div class="col-xs-12 col-lg-4"> <?php
				} else if (i == 4) {
					?> <div class="col-xs-12"> <?php
				} else {
					?> <div class="col-xs-12 col-md-6 col-lg-4"> <?php
				}

				if($i != 1 && $i != 4) {
					?> <h3> <?php the_title(); ?> </h3> <?php	
				}
				
				?> <p> <?php the_content(); ?> </p> <?php

				?> </div> <?php

				$i++;
			endwhile;
		?>
	</div>
</footer>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/app.js"></script>
</body>
</html>