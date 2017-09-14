! function(A) {
	function e() {
		A.documentElement.className += "webps"
	}
	if (/(^|;\s?)webps=A_webps/.test(document.cookie)) e();
	else {
		var i = new Image;
		i.onload = function() {
			1 == i.width && (e(), document.cookie = "webps=A_webps; max-age=31536000; ")
		}, i.src = "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA=="
	}
}(document), $(function() {
	/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || $("#video").append('<source src="/wp-content/themes/jiaoerle/dist/images/video.mp4" type="video/mp4" -webkit-playsinline=true; />')
});