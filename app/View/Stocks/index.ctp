<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           KHO
        </div>
    </div>
    <div class="span3">
    	<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li><?php echo $this->Html->link('Thêm một kho mới',array('controller'=>'stocks','action'=>'add')) ?></li>
            </ul>
    	</div>
    </div>
     <div class="span8">
    	<div class="well">
    		<table class="table table-hover">
	    		<thead>
	                <tr>
	                <th>#</th>
	                <th>Tên Kho</th>
	                <th colspan="3" style="text-align: center;">Chức Năng</th>
	                </tr>
	            </thead>
              	<tbody>
             
              
	    		<?php foreach ($dataStock as $valueStock) {
	    		
				echo '<tr>';
				echo '<td>'.$valueStock['Stock']['id'].'</td>';
				echo '<td>'.$valueStock['Stock']['nameStock'].'</td>';

        echo '<td style="width:20px">'.$this->Html->link('<i class="icon-list"></i>',array('controller'=>'stocks','action'=>'view/'.$valueStock['Stock']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xem Chi Tiết '.$valueStock['Stock']['nameStock'])).'</td>';
        echo '<td style="width:20px">'.$this->Html->link('<i class=" icon-pencil"></i>',array('controller'=>'stocks','action'=>'edit/'.$valueStock['Stock']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$valueStock['Stock']['nameStock'])).'</td>';
        echo '<td style="width:20px">'.$this->Html->link('<i class=" icon-remove"></i>',array('controller'=>'stocks','action'=>'delete/'.$valueStock['Stock']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$valueStock['Stock']['nameStock'])).'</td>';

				// echo '<td style="width:65px">'.$this->Html->link('Cập Nhật',array('controller'=>'stocks','action'=>'edit/'.$valueStock['Stock']['id'])).'</td>';
				// echo '<td>'.$this->Html->link('Xóa',array('controller'=>'stocks','action'=>'delete/'.$valueStock['Stock']['id'])).'</td>';
				echo '</tr>';
	    		
	    		} 
	    		?>
    			</tbody>
    		</table>
        </div>
</div>