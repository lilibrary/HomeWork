<?php get_header();?>
<div id="Header"></div>
<div id="Content">
	<div class="cate cate_post">
		<h3 class="cate_title">分类：文章</h3>
		<?php
		query_posts(array('category_name' => 'post','posts_per_page' => 24,));
		if(have_posts()) : while (have_posts()) : the_post();
		?>
		<div class="post post<?php the_ID()?>">
			<a href="<?php the_permalink()?>"><?php the_title();?>
			</a>
			<!-- <span class="post_title"><?php the_title();?></span> -->
			<span class="post_date"><?php the_time('y/m/d');?></span>
			<span class="post_exc"><?php the_excerpt();?></span>
		</div>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- 文章 -->
	<div class="cate cate_img">
		<?php
		query_posts(array('category_name' => 'img','posts_per_page' => 8,));
		if(have_posts()) : while (have_posts()) : the_post();
		?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- 图片 -->
	<div class="cate cate_music">
		<?php
		query_posts(array('category_name' => 'music','posts_per_page' => 12,));
		if(have_posts()) : while (have_posts()) : the_post();
		?>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<!-- 音乐 -->
</div>
<div class="cate cate_other">
	<?php
	query_posts(array('category_name' => 'other','posts_per_page' => 24,));
	if(have_posts()) : while (have_posts()) : the_post();
	?>
	<?php endwhile; endif; wp_reset_query(); ?>
</div>
<!-- 其它 -->
<div id="Footer"></div>
<?php get_footer();?>