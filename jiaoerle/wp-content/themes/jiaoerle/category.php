<?php   
$post = $wp_query->post;   
if ( in_category('1') ) {      
include(TEMPLATEPATH . '/cat-other.php');     
}   
else if ( in_category('6') ) {      
include(TEMPLATEPATH . '/cat-ct.php');     
}      
else if ( in_category('7') )    
{      
include(TEMPLATEPATH . '/cat-ts.php');     
}      
else if ( in_category('8') )    
{      
include(TEMPLATEPATH . '/cat-yb.php');     
}      
else {include(TEMPLATEPATH . '/cat-other.php');     
}     
?> 