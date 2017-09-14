<?php include('include.inc.php');  ?>
<?php $category = get_the_category();//定义分类目录?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>天园_传统礼饼</title>
    <meta name="keywords" content="西樵大饼,核桃酥,鸡蛋糕,红菱,白菱,龙凤喜饼">
    <meta name="description" content="西樵传统礼饼是婚嫁的传统食品,尽管时下婚礼形式越来越不拘一格,但买喜饼,送喜饼,仍是不少新人的“规定动作”。在馅料口味上,传统的喜饼大体分为四种：西樵大饼、核桃酥、鸡蛋糕、红菱、白菱、龙凤喜饼,如今随着岁月变迁,又出现了五仁馅、冬蓉、豆蓉、叉烧等的新鲜口味。这些传统风味的喜饼,一直以来,都较受长辈们喜爱。">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="/assets/img/favicon.ico">
    <?php include('header_css.php');?>
    <?php include('header_js.php');?>
</head>
<body class="is-loaded is-scroll">
        <?php include('header_list.php'); ?>
        <main class="site-main-1">
                <div class="product bn-dec">
                    <img src="<?=ty_img?>dist/images/ct/ct-banner.jpg<?=$A_webps?>?v=61dce504ec" class="hidden-xs">
                    <div class="container section">
                        <div class="row">
                            <div class="header-text text-center  col-md-8 col-md-offset-2">
                                <p>
                                喜饼是婚嫁的传统食品 </br>
                                    尽管时下婚礼形式越来越不拘一格，但买喜饼，送喜饼，仍是不少新人的“规定动作”。</br>
                                    在馅料口味上，传统的喜饼大体分为四种：</br>
                                    西樵大饼、核桃酥、鸡蛋糕、红菱、白菱、龙凤喜饼</br>
                                    如今随着岁月变迁，又出现了五仁馅、冬蓉、豆蓉、叉烧等的新鲜口味。</br>
                                    这些传统风味的喜饼，一直以来，都较受长辈们喜爱。</br>
                                </p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section ">
                    <div class="container">
                    <?php if (have_posts()) :$ashu_i=0; ?>
                    <?php setPostViews(get_the_ID());//设置获取阅读数在主循环
                global $query_string;
                 query_posts($query_string . "&order=ASC&cat=6");
                    while (have_posts()) : the_post();$ashu_i++; 
                    ?>
                    <?php if($ashu_i%2 ==0){ ?>
                        <div class="row bn-det split--left">
                            <div class=" col-sm-push-6 col-sm-6 m-b-60-xs-max p-r-60-md-min op0" data-scroll-reveal="enter right over 2s"> 
                                <div class="col-inner clearfix ">
                                    <img class="img-responsive float-l-sm-min m-x-auto-xs-max lazy " data-original="<?php bloginfo('template_url');?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=500&w=500&zc=1"">
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
