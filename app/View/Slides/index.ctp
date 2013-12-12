<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
       
           SLIDES
        </div>
    </div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link('Tạo Slide Mới',array('controller'=>'slides','action'=>'add'),array('class'=>'btn btn-success')) ?>
  </div>
</div>

<div class="row-fluid">
     <div class="span12">
    	<div class="well">
    		<table class="table table-striped table-bordered table-advance table-hover">
	    		<thead style="text-align:center">
	                <tr>
	                <th>#</th>
	                <th>Tựa Đề</th>
                  <th>Hình Ảnh</th>
                  <th>Hiển Thị</th>
	                <th colspan="3" style="text-align: center;">Chức Năng</th>
	                </tr>
	            </thead>
              	<tbody style="text-align:center">
             
              
	    		<?php foreach ($dataSlide as $valueSlide) {
	    		
				echo '<tr>';
	
				echo '<td>'.$valueSlide['Slide']['id'].'</td>';
        echo '<td>'.$valueSlide['Slide']['title'].'</td>';
        $a = str_replace('_b.jpg','_s.jpg',$valueSlide['Slide']['image']);
        echo '<td><img src ="'.$a.'"/></td>';

        if($valueSlide['Slide']['enable']==true){
          echo '<td>'.'<span class="label label-info">Có</span></td>';
        }
        else
        {
          echo '<td>'.'<span class="label label-info">Không</span></td>';
          
        }
        



    
        
        echo '<td style="width:20px">'.$this->Html->link('<i class=" icon-pencil"></i>',array('controller'=>'slides','action'=>'edit/'.$valueSlide['Slide']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$valueSlide['Slide']['title'])).'</td>';
				echo '<td style="width:20px">'.$this->Html->link('<i class=" icon-remove"></i>',array('controller'=>'slides','action'=>'delete/'.$valueSlide['Slide']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$valueSlide['Slide']['title'])).'</td>';
        
				
        
				echo '</tr>';
	    		
	    		} 
	    		?>
    			</tbody>
    		</table>

        </div>
</div>
</div>
