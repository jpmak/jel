<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
	
?>

<article id="post-<?php the_ID(); ?>" class="content">
	<header class="contenttitle">
		<h1 class="mscctitle"> <a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h1>
		<address class="msccaddress ">
                     <time>  <?php echo esc_html( get_the_date() ); ?> </time>
                                    -<a href="<?php echo get_category_link($category[0]->term_id ) ?>" rel="category tag"><?php 
$category = get_the_category(); echo $category[0]->cat_name;?></a> - 阅 <?php echo getPostViews(get_the_ID()); ?> </address>
	</header><!-- .entry-header -->
<!-- 文章详情 -->
	<?php twentysixteen_excerpt(); ?>



<div class="post-thumbnail">
		<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
echo $large_image_url[0];?>">	
		</div>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php twentysixteen_entry_meta(); ?> -->
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
