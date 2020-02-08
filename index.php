<?php get_header();?>
	<div class="container">
		<div class="col-lg-12 about-main">
			<div class="about-agency-title">
				<h4><?php the_field('about-agency-title')?></h4>
			</div>
			<div class="about-agency-content">
				<?php the_field('about-agency-content')?>
			</div>
			<div class="autograph">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/signature.png" alt="">
			</div>
		</div>
	</div>
<div class="bgc">
	<div class="container">
	<?php $arg = array(
                'post_type'      => 'portfolio', /*<--отут указується назніє поста який в вордпресі */
                'order'        => 'ASC',
                'orderby'      => 'menu_order',
                'posts_per_page'    => 4
                );
          $the_query = new WP_Query( $arg ); 
            if ($the_query->have_posts() ) :?> 
          <div class="row">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-lg-3">
              	<div class="about-main-content">
                  <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('', array('class' => ' about__img'/*<--отут задавать клас картинки*/));} ?> 
                
                  <?php the_excerpt(); ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif;?>
	</div>
</div>
<?php wp_reset_postdata(); ?>
<div class="container">
	<div class="row best_projects">
		<div class="col-lg-12">
			<div class="gallery-tittle-for"><?php the_field('gallery-tittle')?></div>
			<div class="gallery-content"><?php the_field('gallery-about')?></div>
		</div>
	</div>
</div>
<?php 
    $images = get_field('tables');
    if( $images ): ?>
    	<div class="row tables">
    		<?php foreach( $images as $image ): ?>
				<div class="col-lg-4 ">
					<div class="tables">
						<img src="<?php echo esc_url($image['sizes']['table1.png'/*<-в function.php указується розмєр виводімих картінок.Названіє должно буть однаковим!!!*/]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<div class="bgc-slider">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12 slider-items">
				<?php $arg = array(
	                'post_type'      => 'slider_first', /*<--отут указується назніє поста який в вордпресі */
	                'order'        => 'ASC',
	                'orderby'      => 'menu_order',
	                'posts_per_page'    => 3
	                );
         			 $the_query = new WP_Query( $arg ); 
           			 if ($the_query->have_posts() ) :?> 
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php if ( has_post_thumbnail() ) {
                  	the_post_thumbnail('', array('class' => ' about__img'/*<--отут задавать клас картинки*/));} ?>                
                  		<div class="exerpt"><?php the_excerpt(); ?>
                  		</div>
					<?php endwhile; ?>
				</div>
			<?php endif;?>
		</div>
	</div>
</div>
<div class="ssss">
<div class="container">
	<?php $arg = array(
                'post_type'      => 'parthners', /*<--отут указується назніє поста який в вордпресі */
                'order'        => 'ASC',
                'orderby'      => 'menu_order',
                'posts_per_page'    => 5
                );
          		$the_query = new WP_Query( $arg ); 
           	 	if ($the_query->have_posts() ) :?> 
					<div class="row">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="parthners_2">
								<a href="#"><div class="parthners"></div></a>
				 		<?php if ( has_post_thumbnail() ) {
                 		 the_post_thumbnail('', array('class' => ' about__img'/*<--отут задавать клас картинки*/));} ?>                
                  <?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	 <?php endif;?>
</div>
</div>
<?php wp_reset_postdata(); ?>	<!-- НАДА ВСТАВЛЯТЬ ПІСЛЯ КАЖДОГО ЦИКЛА ШОБ ОБНУЛИТЬ ШОСЬ -->
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="latest_blog">
	 			<?php the_field('latest_blog')?>
			 </div>
		</div>
	</div>
</div>
<!-- ---------------------------------------------------------------------------------------------------------------- -->
<?php 
    $images = get_field('second_slider');
    if( $images ): ?>
    	<div class="row second_slider">
    		<?php foreach( $images as $image ): ?>
				<div class="col-lg-12">
					<div class="slider-items_for">
						<img src="<?php echo esc_url($image['sizes']['img1.png'/*<-в function.php указується розмєр виводімих картінок.Названіє должно буть однаковим!!!*/]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer();?>

