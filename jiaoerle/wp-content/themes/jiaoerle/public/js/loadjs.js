    $(function() {
    	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {} else {
    		$('#video').append('<source src="http://www.jiaoerle.me/wp-content/themes/jiaoerle/public/images/video.mp4" type="video/mp4" -webkit-playsinline=true; />')
    	}
    });