<?php 
//详情页lazyload
include('include.inc.php');
 //lazyload Iswebps
function add_image_placeholders( $content ) {
    // Don't lazyload for feeds, previews, mobile
    if( is_feed() || is_preview() || ( function_exists( 'is_mobile' ) && is_mobile() ) )
        return $content;
    if ( false !== strpos( $content, 'data-original' ) )
        return $content;
    $placeholder_image = apply_filters( 'lazyload_images_placeholder_image', get_template_directory_uri() . '' );
    $content = preg_replace( '#<img([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#', sprintf( '<img class="lazy" src="%s" data-original="${2}"${3}><noscript><img${1}src="${2}"${3}></noscript>', $placeholder_image ), $content );
    return $content;
}
add_filter( 'the_content', 'add_image_placeholders', 99 );
  ?>

<?php     // Start the 获取文章次数
setPostViews(get_the_ID()); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php the_title(); ?>_天园资讯</title>
    <meta name="description" content="<?php the_excerpt();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="assets/img/favicon.ico">
    <?php include('header_css.php');?>
    <?php include('header_js.php');?>
</head>

<body class="is-loaded is-scroll">
        <?php include('header_list.php');?>
 <div id="main singlewp" class="container mt10 c-self">
                <div class="row ">
                    <div class="col-md-9 act pd0">
                        <div class="newleft">
							<?php
                        
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );
//评论模块
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }
//文章导航
			// if ( is_singular( 'attachment' ) ) {
			// 	// Parent post navigation.
			// 	the_post_navigation( array(
			// 		'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
			// 	) );
			// } elseif ( is_singular( 'post' ) ) {
			// 	// Previous/next post navigation.
			// 	the_post_navigation( array(
			// 		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="post-title">%title</span>',
			// 		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
			// 			'<span class="post-title">%title</span>',
			// 	) );
			// }

			// End of the loop.
		endwhile;?>
                        </div> 
                           <div class="xianguan">
                            <div class="xianguantitle">相关文章！</div>
                            <ul class="pic web-of">
                                <?php
                                global $post;
                                $cats = wp_get_post_categories($post->ID);
                                if ($cats) {
                                $args = array(
                                'category__in' => array( $cats[0] ),
                                'post__not_in' => array( $post->ID ),
                                'showposts' => 3,
                                'caller_get_posts' => 1
                                );
                                query_posts($args);
                                if (have_posts()) {
                                while (have_posts()) {
                                the_post(); update_post_caches($posts); ?>
                                <li>
                                    <a href="<?php the_permalink() ?>">
                                        <div class="pic-left goods-pic ">
                                             <img class="lazy"  data-original="<?php bloginfo('template_url');?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=200&w=300&zc=1"" />   
                                        </div>
                                    </a>
                                    <div class="pic-right">
                                        <a rel="bookmark" href="" title="  <?php the_title(); ?> " class="link" >  <?php the_title(); ?> </a>
                                        <address class="xianaddress">
                                            <time>
                                                <?php the_time('Y-n-j'); ?> </time>
                                            阅 <?php echo getPostViews(get_the_ID()) ?> </address>
                                    </div>
                                </li>
                        
<?php
    }
  }
  else {
    echo '<li>* 暂无相关文章</li>';
  }
  wp_reset_query();
}
else {
  echo '<li>* 暂无相关文章</li>';
}
?>

                            </ul>
                        </div>
            </div><!-- col-md-9 -->
                <div class="col-md-3 column sitebar-right ">
                    <?php include('sitebar.php');?>
<!-- col-md-3 -->
                    </div>
                    </div>
            </div>
                <!--newslist-->
		<!-- 外部的html结构应该替换成自己模板的结构 -->
        <?php include('footer_t.php');?>

   </body>
    </html>
         
        <?php include('footer_js.php');?>
   
    <script type="text/javascript">
/* <![CDATA[ */
var kodex_posts_likes = {"ajaxurl":"..\/..\/wp-admin\/admin-ajax.php"};
/* ]]> */

</script>

    <script type='text/javascript' src='../wp-content/plugins/kodex-posts-likes/public/js/kodex-posts-likes-public.js'></script>
    