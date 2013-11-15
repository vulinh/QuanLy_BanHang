<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           LOẠI KHO
        </div>
    </div>
    <div class="span3">
    	<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Chức Năng</li>
              <li><?php echo $this->Html->link('Thêm một loại kho mới',array('controller'=>'typestocks','action'=>'add')) ?></li>
            </ul>
    	</div>
    </div>
     <div class="span8">
    	<div class="well">
    		<table class="table table-hover">
	    		<thead>
	                <tr>
	                <th>#</th>
	                <th>Tên Loại Kho</th>
	                <th colspan="2" style="text-align: center;">Chức Năng</th>
	                </tr>
	            </thead>
              	<tbody>
             
              
	    		<?php foreach ($dataTypestock as $valueTypestock) {
	    		
				echo '<tr>';
				echo '<td>'.$valueTypestock['Typestock']['id'].'</td>';
				echo '<td>'.$valueTypestock['Typestock']['nameTypeStock'].'</td>';
				echo '<td style="width:65px">'.$this->Html->link('Cập Nhật',array('controller'=>'typestocks','action'=>'edit/'.$valueTypestock['Typestock']['id'])).'</td>';
				echo '<td>'.$this->Html->link('Xóa',array('controller'=>'typestocks','action'=>'delete/'.$valueTypestock['Typestock']['id'])).'</td>';
				echo '</tr>';
	    		
	    		} 
	    		?>
    			</tbody>
    		</table>
        </div>
</div>