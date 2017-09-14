<?php include('include.inc.php');  ?>
<?php $category = get_the_category();//定义分类目录?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>天园_特色手信</title>
    <meta name="keywords" content="杏仁饼,鸡仔饼">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="/assets/img/favicon.ico">
    <?php include('header_css.php');?>
    <?php include('header_js.php');?>
</head>
<body class="is-loaded is-scroll">
        <?php include('header_list.php'); ?>
        <main class="site-main-1">
                <div class="product bn-dec">
                    <img src="<?=ty_img?>dist/images/sx/sx-banner.jpg<?=$A_webps?>?v=709837cd51" class="hidden-xs">
                </div>
                <div class="section ">
                    <div class="container">
                    <?php if (have_posts()) :$ashu_i=0; ?>
                    <?php setPostViews(get_the_ID());//设置获取阅读数在主循环
                global $query_string;
                 query_posts($query_string . "&order=ASC&cat=7");
                    while (have_posts()) : the_post();$ashu_i++; 
                    ?>
                    <?php if($ashu_i%2 ==0){ ?>
                        <div class="row bn-det split--left">
                            <div class=" col-sm-push-6 col-sm-6 m-b-60-xs-max p-r-60-md-min op0" data-scroll-reveal="enter right over 2s"> 
                                <div class="col-inner clearfix ">
                                    <img class="img-responsive float-l-sm-min m-x-auto-xs-max lazy "  data-original="<?php bloginfo('template_url');?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=500&w=500&zc=1"">
                                </div>
                            </div>
                            <div class="col-sm-pull-6 col-sm-6 pd50">
                              <?php }  else { ?>
                               <div class="row bn-det split--right">
                 <div class="col-sm-6 m-b-60-xs-max p-r-60-md-min op0" data-scroll-reveal="enter left over 2s">
                 <div class="col-inner clearfix ">
                                    <img class="img-responsive float-l-sm-min m-x-auto-xs-max lazy " data-original="<?php bloginfo('template_url');?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=500&w=500&zc=1"">
                                </div>
                            </div>
                             <div class="col-sm-6 pd50">
                   <?php } ?>
                                <div class="col-inner">
                                    <div class="section-heading ">
                                        <h3><?php the_title(); ?> </h3>
                                    </div>
                                    <!-- .section-heading -->
                                    <div class="section-content" style="text-align:left;">
                                        <p><?php the_excerpt() ?></p>
                                        <p><a href="<?php the_permalink() ?>" class="btn">了解更多</a></p>
                                    </div>
                                    <!-- .section-content -->
                                </div>
                            </div>
                        </div>
             <?php endwhile; ?>  
                <?php endif; ?>
                        </div>
            </main>
       <?php include('footer_t.php');?>
    </body>
    </html>
       <?php include('footer_js.php');?>
