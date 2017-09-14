<?php
define('url_root','../'); //定义路径
define('ty_of','//res.tybj-food.com/'); //定义路径  http://res.tybj-food.com/   本地 /wp-content/themes/tybj/
define('ty_img','//image.tybj-food.com/'); //定义路径 http://image.tybj-food.com/  本地 /wp-content/themes/tybj/dist/images/
define('version','?20161011'); //定义版本

$A_webps='';
if(isset($_COOKIE["webps"]))
{
$A_webps='_.webp';
}else{
	$A_webps='';
}
define('Iswebps',$A_webps);
?>

