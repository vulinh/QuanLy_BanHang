
<?php 
	$content = "";
	$i=1;
	$enter=true;
	$url_img="";
	foreach ($list as $v){
			if (strlen($v['Product']['url']) == 0){
				$url_img = 'img/default_img.png';
			}
			else{
				$url_img = $v['Product']['url'];
			}

			$content .= 
				'<div class="span3" style="margin:15px auto auto 15px">
					<div class="img_product">
		         		<img class="img-circle" src="'.$url_img.'"class="img_content" />
		         	</div>
		         	<div class="detail_product">
			        	<p><i class=" icon-th-large"></i>'.$v['Product']['name'].'</p>
			        	<p><i class=" icon-shopping-cart"></i>'.$v['Product']['price'].'VND </p>
		        	</div>
			 	</div>';
		
		
	}
	echo $content;
?>	

<!-- <h2>'.$v['Product']['name'].'</h2> -->
<!-- $content .= '<div class="row-fluid"><div class="span3" style="margin:15px auto auto 15px">
	          
	          <p><img src="'.$url_img.'"class="img_content" /></p>
	          <p><i class=" icon-th-large"></i>'.$v['Product']['name'].'</p>
	          <p><i class=" icon-shopping-cart"></i>'.$v['Product']['price'].'VND </p>
			  </div>'; -->
<!-- if ($enter==true) {
				$content .= 
			'<div class="row-fluid">
				<div class="span3" style="margin:15px auto auto 15px">
					<div class="img_product">
		         		<p><img src="'.$url_img.'"class="img_content" /></p>
		         	</div>
		         	<div class="detail_product">
			        	<p><i class=" icon-th-large"></i>'.$v['Product']['name'].'</p>
			        	<p><i class=" icon-shopping-cart"></i>'.$v['Product']['price'].'VND </p>
		        	</div>
			 	</div>';
			  	$enter = false;
			}
			else{
				if ($i>2) {
					$content .= 
			 '<div class="span3" style="margin:15px auto auto 15px">
	          
	          	<div class="img_product">
		          
		          		<img src="'.$url_img.'"class="img_content" />
		          
	          	</div>
	          	<div class="detail_product">
	          		<p><i class=" icon-th-large"></i>'.$v['Product']['name'].'</p>
	          		<p><i class=" icon-shopping-cart"></i>'.$v['Product']['price'].'VND </p>
			  	</div>
			  </div></div>';
			  		$i=1;
			  		$enter = true;
				}
				else{
					$content .= 
			'<div class="span3" style="margin:15px auto auto 15px">
				<div class="img_product">
		   			<p>
		          		<img src="'.$url_img.'"class="img_content" />
		          	</p>
		        </div>
		        <div class="detail_product">
	          		<p><i class=" icon-th-large"></i>'.$v['Product']['name'].'</p>
	          		<p><i class=" icon-shopping-cart"></i>'.$v['Product']['price'].'VND </p>
	          	</div>
			 </div>';
			  		$i=$i+1;
				}
			} -->

<!-- 	<div class="span3" style="margin-left:15px">
	          <h2>Heading</h2>
	          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          <p><a class="btn" href="#">View details »</a></p>
	</div>
</div> -->