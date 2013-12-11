<div class="categories index">
<h2>Products</h2>
<table cellpadding="0" cellspacing="0">
<tbody>
	<tr>
		<th><a href="#">ID PRODUCT</a></th>
		<th><a href="#">NAME PRODUCT</a></th>
		<th><a href="#">DESCRIPTION</a></th>
		<th><a href="#">ID CATEGORIES</a></th>
		<th><a href="#">PRICE</a></th>
		<!-- <th><a href="/phukiencauca/categories/index/sort:name/direction:asc">DESCRIPTION</a></th> -->
		<th><a href="#">QUANTITY</a></th>
		<th><a href="#">URL</a></th>
		<th><a href="#">NAME IMAGE</a></th>
		<th>Actions</th>
	</tr>
<?php
	foreach($data as $v){
		// echo('<h1>'.$v['Product']['name'].'</h1>');
		echo('<tr><td>'.$v['Product']['id'].'</td>'.
			 '<td>'.$v['Product']['name'].'</td>'.
			 '<td>'.$v['Product']['description'].'</td>'.
			 '<td>'.$v['Product']['id_categories'].'</td>'.
			 '<td>'.$v['Product']['price'].'</td>'.
			 '<td>'.$v['Product']['quantity'].'</td>'.
			 '<td>'.$v['Product']['url'].'</td>'.
			 '<td>'.$v['Product']['image_name'].'</td>'.
			 '<td class="actions">
			 	<a href="/phukiencauca/products/edit/'.$v['Product']['id'].'">
			 		Edit
			 	</a>
			 	<a href="/phukiencauca/products/delete/'.$v['Product']['id'].'">
			 		Delete
			 	</a>  			 	
			 </td>
		</tr>');

	}
?>
<!-- <a href="#" onclick="if (confirm(&quot;Are you sure you want to delete # '.$v['Product']['id'].'?&quot;)) { document.post_521b269c693e6613329844.submit(); } event.returnValue = false; return false;">Delete
			 	</a> -->
</tbody>
</table>
</div>
