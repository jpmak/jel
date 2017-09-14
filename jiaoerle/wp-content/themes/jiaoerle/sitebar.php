

            <div id="sitebar" class="sitebar-right">
                            <div id="soutab">
                            <form role="search" method="get" class="search" id="searchform" action="<?php echo home_url( '/' ); ?>">  
    <input class="text" type="text" name="s" placeholder=" 请输入关键词" 
    value="<?php echo get_search_query() ?>">
     <input class="butto" value="搜索" type="submit">
</form>  
<!--                                 <form method="get" class="search" action="http://www.ishayou.com/">
                                    <input class="text" type="text" name="s" placeholder=" 请输入关键词" value="">
                                    <input class="butto" value="搜索" type="submit">
                                </form>  -->

                            </div>
                            <div class=" hidden-xs">
                                <span class="tagtitle">分类目录</span>
                                <div id="tagg">
                                    <ul  class="menu">
                                    <?php   
                                     global $wpdb;
    $request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
    $request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
    $request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' ";
    $request .= " ORDER BY term_id asc";
    $categorys = $wpdb->get_results($request);
    foreach ($categorys as $category) {
    	  ?>
                                        <li id="<?php echo $category->term_id ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-603"><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a></li>
                                            <?php } ?>     
                                    </ul>
                                </div>
                                <div class="sitebar_list visible-lg">
                                    <h4 class="sitebar_title">随机热文</h4>
                 <?php global $post; $categories = get_the_category(); //函数获取分类ID好
               
                 ?>

                                    <ul class="sitebar_list_ul">
                                                <?php $posts = get_posts('numberposts=5&orderby=rand');
                 foreach($posts as $post){
                ?>
                                        <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a> </li>
      
                                                      <?php }?>
                                    </ul>
                                           
                                </div>
                            </div>
                        </div>
