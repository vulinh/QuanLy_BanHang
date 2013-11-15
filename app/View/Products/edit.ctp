<div class="categories form">
	   <h2>Edit product</h2>
		<?php 
			
			echo $this->Form->create('Product', array('action' => 'edit'));

    		echo $this->Form->text('id',array('type' => 'hidden')); 
			echo $this->Form->label('Name');
    		echo $this->Form->text('name');
    		echo $this->Form->label('Description');
    		echo $this->Form->text('description');
    		echo $this->Form->label('Price');
    		echo $this->Form->number('price');
    		echo $this->Form->label('category');
    		echo $this->Form->select('id_categories',$data);
    		echo $this->Form->label('Quantity');
    		echo $this->Form->text('quantity');
    		echo $this->Form->label('Url');
    		echo $this->Form->text('url');
    		echo $this->Form->label('Name Image');
    		echo $this->Form->text('image_name');
    		echo $this->Form->end('Submit');
    		
		 ?>
	
</div>


<!-- <div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><a href="/phukiencauca/products/index">List Product</a></li>
	</ul>
</div> -->