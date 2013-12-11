<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:25px">
       
           NGƯỜI DÙNG
        </div>
    </div>
</div>

<div class="row-fluid">
  <div class="span2 pull-right">
    <?php echo $this->Html->link('Tạo Người Dùng Mới',array('controller'=>'users','action'=>'add'),array('class'=>'btn btn-success')) ?>
  </div>
</div>

<div class="row-fluid">
     <div class="span12">
    	<div class="well">
    		<table class="table table-striped table-bordered table-advance table-hover">
	    		<thead style="text-align:center">
	                <tr>
	                <!-- <th>#</th> -->
	                <th>Tên Đăng Nhập</th>
                  <!-- <th>Mật Khẩu</th> -->
                  <th>Họ Tên</th>
                  <th>Loại Tài Khoản</th>
                  <!-- <th>Điện Thoại Bàn</th> -->
                  <!-- <th>Di Động</th> -->
                  <!-- <th>Khu Vực</th> -->
                  <!-- <th>Mã Số Thuế</th> -->
                  <!-- <th>Tài Khoản Ngân Hàng</th> -->
                  <!-- <th>Ngân Hàng</th> -->
                  <!-- <th>Nick Yahoo</th> -->
                  <!-- <th>Nick Skype</th> -->
	                <th colspan="3" style="text-align: center;">Chức Năng</th>
	                </tr>
	            </thead>
              	<tbody style="text-align:center">
             
              
	    		<?php foreach ($dataUser as $valueUser) {
	    		
				echo '<tr>';
	
				echo '<td>'.$valueUser['User']['username'].'</td>';
        echo '<td>'.$valueUser['User']['name'].'</td>';
        if($valueUser['User']['isCustomer']==true){
          echo '<td>'.'<span class="label label-info">Khách Hàng</span></td>';
        }
        else{
          if($valueUser['User']['isPartner']==true){
            echo '<td>'.'<span class="label label-info">Đại Lý</span></td>';
          }
          else{
            if($valueUser['User']['isEmployee']==true){
            echo '<td>'.'<span class="label label-info">Nhân Viên</span></td>';
            }
          }
        }
        // echo '<td>'.$valueUser['users']['phone'].'</td>';
        // echo '<td>'.$valueUser['users']['mobile'].'</td>';
        // echo '<td>'.$valueUser['areas']['nameArea'].'</td>';
        // echo '<td>'.$valueUser['users']['taxID'].'</td>';
        // echo '<td>'.$valueUser['users']['accountBank'].'</td>';
        // echo '<td>'.$valueUser['users']['bank'].'</td>';
        // echo '<td>'.$valueUser['users']['nickYahoo'].'</td>';
        // echo '<td>'.$valueUser['users']['nickSkype'].'</td>';
        // echo '<td>'.$valueUser['users']['accountBank'].'</td>';
        // echo '<td>'.$valueUser['User'][''].'</td>';

        echo '<td style="width:20px">'.$this->Html->link('<i class="icon-list"></i>',array('controller'=>'users','action'=>'view/'.$valueUser['User']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xem Chi Tiết '.$valueUser['User']['username'])).'</td>';
        
        echo '<td style="width:20px">'.$this->Html->link('<i class=" icon-pencil"></i>',array('controller'=>'users','action'=>'edit/'.$valueUser['User']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Sửa đổi thông tin của '.$valueUser['User']['username'])).'</td>';
				echo '<td style="width:20px">'.$this->Html->link('<i class=" icon-remove"></i>',array('controller'=>'users','action'=>'delete/'.$valueUser['User']['id']),array('class'=>'tt','escape'=>false,'data-toggle'=>'tooltip','data-original-title'=>'Xóa '.$valueUser['User']['username'])).'</td>';
        
				
        
				echo '</tr>';
	    		
	    		} 
	    		?>
    			</tbody>
    		</table>

        </div>
</div>
</div>
