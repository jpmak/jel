(function(doc) {
  // 给html根节点加上webps类名
  function addRootTag() {
    doc.documentElement.className += "webps";
  }
  // 判断是否有webps=A这个cookie
  if (!/(^|;\s?)webps=A_webps/.test(document.cookie)) {
    var image = new Image();
    // 图片加载完成时候的操作
    image.onload = function() {
      // 图片加载成功且宽度为1，那么就代表支持webp了，因为这张base64图是webp格式。如果不支持会触发image.error方法
      if (image.width == 1) {
        // html根节点添加class，并且埋入cookie
        addRootTag();
        document.cookie = "webps=A_webps; max-age=31536000; ";
      }
    };
    // 一张支持alpha透明度的webp的图片，使用base64编码
    image.src = 'data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==';
  } else {
    addRootTag();
  }
}(document));
//
//         function changeImage(){
//         var c_webp=document.cookie.indexOf("A");
//      var  pic=document.getElementsByTagName("img");
//         if(c_webp){
//             for (var i = 0; i < pic.length; i++) {
//                pic[i].src = pic[i].src+'.webp';
//               }
//         }
// };
// changeImage();
//  
$(function() {
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

  } else {
    $('#video').append('<source src="http://www.jiaoerle.com/wp-content/themes/jiaoerle/public/images/video.mp4" type="video/mp4" -webkit-playsinline=true; />')

  }
});