<?php include('include.inc.php');  ?>
<?php

/**
 * Template Name: Article List
 *
 */

/** 如果你需要为该页面引入自定义的脚本的样式表，写在这里,不需要自定义样式就删除下面两行代码 */
//wp_enqueue_script( 'articleList', get_template_directory_uri() . '/articlelist.js' );
wp_enqueue_style( 'articleList', get_template_directory_uri() . '/articlelist-406bca6078.css');

// get_header(); 

/** 配置信息 */

/**
 * 排序字段
 * 可以是none, ID, author, title, date, modified, parent, rand, comment_count, menu_order, meta_value, meta_value_num
 */

$order_by = 'date'; 

/** 升序还是降序，DESC表示降序，ASC表示升序 */
$order = 'DESC';

/** 每页显示多少篇文章 */
$posts_per_page = 10;

/**
 * 只显示或不显示某些目录下的文章,目录ID用逗号分隔，排除目录前面加-
 * 例如排除目录29和30下的文章, $cat = '-29,-30';
 * 只显示目录29和30下的文章, $cat = '29, 30';
 */
$cat = '';

/** 是否只在第一页显示页面内容，false表示只在第一页显示页面内容 */
$show_content = true;
/* 配置结束 **/

/** 获取该页面的标题和内容 */
global $post;
$post_title = $post->post_title;
if( $show_content || $paged == 1  ) $post_content = apply_filters('the_content', $post->post_content);

/** 当前显示的是第几页 */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

/** 用WP_Query获取posts */
$post_list = new WP_Query(
	"posts_per_page=" . $posts_per_page .
	"&orderby=" . $order_by .
	"&order=" . $order .
	"&cat=" . $cat .
	"&paged=" . $paged
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo get_search_query()?>_娇尔乐</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="assets/img/favicon.ico">
    <?php include('header_css.php');?>
    <?php include('header_js.php');?>
</head>

<body class="is-loaded is-scroll">
                <?php include('header_list.php');?>
             <!--newslist-->
         <div id="main searchwp" class="container mt10">
                <div class="row ">
                    <div class="col-md-9 pd0">
                 <ul class="newleft">
                  <?php  global $query_string;  $posts=query_posts($query_string .'&posts_per_page=8'); ?>  
<?php if (have_posts()) :  ?>  
			<div class="tag-description hidden-xs">
			<div class="tag-content"><?php printf( __( '关键字"%s"的搜索结果如下：', 'tanhaibonet' ), '<span>' . get_search_query() . '</span>' ); echo '搜到 ' . $wp_query->found_posts . ' 篇文章'; ?></div>
		</div>
	<?php  while (have_posts()) : the_post(); ?>
                    <li class="list">
                    <div class="mecc">
                    <h2 class="mecctitle">
                    <a href="<?php the_permalink() ?>" >
                    <?php the_title(); ?> 
                    </a>
                    </h2>
                    <address class="meccaddress">
                    <time><?php the_time('Y-n-j'); ?></time>
                    -
                    <a href="<?php echo get_category_link($category[0]->term_id ) ?>" rel="category tag"><?php 
                    echo $category[0]->cat_name;?></a>  阅 <?php echo getPostViews(get_the_ID()) ?> </address>
                    </div>
                    <span class="titleimg ">
                    <a href="<?php the_permalink() ?>" >
                    <img class="lazy" src="<?=ty_of?>/loadbg.jpg<?=$A_webps?>?v=062bdb31aa"  
          
                    data-original="<?php bloginfo('template_url');?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=400&w=600&zc=1""     />   

                    </a>
                    </span>

                    <div class="zuiyao hidden-xs">
                    <a href="<?php the_permalink() ?>">
                    <?php the_excerpt() ?>
                    </a>
                    </div>
                    <div class="clear"></div>
                    </li>

                  <?php endwhile; ?>  
                  	<?php else : ?>
		<div id="post-0" class="post no-result">
				<span>抱歉,您找的页面不存在</span>
		</div><!-- #post-0 -->
<?php endif; ?>  
                 </ul> <!-- col-md-9 -->

            	<?php wp_pagenavi();  ?>

            <div class="clear"></div>
                    </div>
                    <div class="col-md-3 column sitebar-right">
                <?php include('sitebar.php');?>
                    </div>
                </div>
            </div>
                <!--newslist-->
		<!-- 外部的html结构应该替换成自己模板的结构 -->
                <?php include('footer_t.php');?>
    </body>
    </html>
         <?php include('footer_js.php');?>