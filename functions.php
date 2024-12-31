<?php 
function getSpecifiedPosts($postTypes=''){
	$postData = array('post_type'=>$postTypes,
						'post_per_page'=>-1,
							'orderby'=>'ID',
							'order'=>'ASC',);
							return new WP_Query($postData);
}
?>



