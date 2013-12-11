<style type="text/css">
	.img-polaroid{
		background-color:#4cc5cd;
	}
</style>
<?php
    function printCategory($categorys,$id,$kitu,$idselect)
        {  
            foreach($categorys as $category)
            {
                if($category['Categoryproduct']['idParent'] == $id)
                {
                    $select = '';
                    if($idselect == $category['Categoryproduct']['id']){
                        $select = 'selected="selected"';
                    }
                    echo "<option value='".$category['Categoryproduct']['id']."' $select >".$kitu.' '.$category['Categoryproduct']['nameCategoryProduct']."</option>";
                    printCategory($categorys,$category['Categoryproduct']['id'],$kitu.$kitu,$idselect);
                   
                }
            }
    }
?>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Danh Sách Hình Ảnh</h3>
  </div>
  <div class="modal-body">
  	<div id="upload"> 
  		<legend> Upload </legend>
  		<!-- <div id="progress">

        	<div id="bar"></div>
        	<div id="percent">0%</div >
    	</div> -->
    <?php echo $this->Form->create('Product',array('controller'=>'products','action'=>'upLoadToFlickr','enctype'=>'multipart/form-data','id'=>'ProductUpLoadToFlickrForm')) ?>
    <!-- <form action="/upLoadToFlickr" id="ProductUpLoadToFlickrForm" enctype="multipart/form-data"> -->
    		<input type="text" name="name_pic" placeholder="Tên Hình">
    		<?php echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px','id'=>'submit_upload'));?>
			<input type="file" name="file_pic">

    <!-- </form> -->
    <?php echo $this->Form->end() ?>
    </div>

    <legend>Tất Cả Hình Ảnh</legend>
    <div class="list_img">

    	<div id="loading" style="z-index:2000;position:fixed;left:45%;top:50%;display:none">
			<img src="<?php echo $this->Html->url('/img/loading-animation-fd.gif')?>" alt="">
		</div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Đóng</button>
    <button class="btn btn-primary" id="btn_ok">Đồng Ý</button>
  </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('THÊM SẢN PHẨM'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">    
	<div class="span12">	
		<?php echo $this->Form->create('Product', array('controller'=>'products','action' => 'add','enctype'=>'multipart/form-data')); ?>
		<table class="table table-striped table-bordered table-advance table-hover">

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('ID Sản Phẩm'); ?></strong>
				</td>
				
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('idProductManufacturer', array('type' => 'text','div'=>false , 'label' => false,'class' => 'form-control','placeholder'=>'ID Sản Phẩm')); ?>
					&nbsp;
				</td>
			</tr>

			<!-- <tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('ID Site'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('idSite', array('type' => 'text','div'=>false , 'label' => false,'class' => 'form-control','placeholder'=>'ID Site')); ?>
					&nbsp;
				</td>
			</tr> -->

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tên Sản Phẩm'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('nameProduct', array('type' => 'text','div'=>false , 'label' => false,'class' => 'form-control','placeholder'=>'Tên Sản Phẩm')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Hình Ảnh'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<input type="text" id="link_pic" name="link_pic" placeholder="link hình">
					<a href="#myModal" id="choose_img" role="button" class="btn btn-primary" data-toggle="modal">Chọn Hình</a>
					<!--  -->
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Giá'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('price', array('type' => 'number','div'=>false, 'label'=>false , 'placeholder' => 'Giá','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
				
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Giá Bán Lẻ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('retail', array('type' => 'number','div'=>false,'label'=>false,'placeholder' => 'Giá bán lẻ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Giá Bán Sỉ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('wholesale', array('type' => 'number','div'=>false,'label'=>false, 'placeholder' => 'Giá bán sỉ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Số Lượng'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('quantity', array('type' => 'number','div'=>false,'label'=>false, 'placeholder' => 'Số Lượng','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<!-- <tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Ngày Nhập'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('import_time', array('label'=>false, 'placeholder' => 'Ngày nhập','div'=>false,'class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr> -->
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Xuất Xứ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('made_in', array('type' => 'text','label'=>false, 'div'=>false,'placeholder' => 'Xuất xứ','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Thời Gian Bảo Hành'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('warranty_time', array('type' => 'text','label'=>false, 'div'=>false,'placeholder' => 'Thời gian bảo hành','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tag'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('tag', array('type' => 'text','label'=> false, 'div'=>false,'placeholder' => 'Tag','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
		
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Khuyến Mãi'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('promotion', array('type' => 'text','div'=>false,'label'=>false, 'placeholder' => 'Khuyến Mãi','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
	
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Nhà Cung Cấp'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idSupplier', $suppliers , array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
         	
            <tr>
                <td style="width:50%; text-align:center;font-size:15px">
                    <strong><?php echo __('Loại Sản Phẩm'); ?></strong>
                </td>
                <td style="width:50%; text-align:center;font-size:15px">
                     <select name="data[Product][idCategoryProduct]">
                        <option value='0'>Không có</option>
                        <?php
                           printCategory($categoryproducts,0, '++',0); 
                        ?>
                     </select>
                </td>
            </tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Nhà Sản Xuất'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idManufacturer', $manufacturers, array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tiền Tệ'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idExchangeRate', $exchangerates , array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Đơn Vị Tính'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->select('idUnit', $units, array('class' => 'span2')); ?>
					&nbsp;
				</td>
			</tr>
       		
       		<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Hiển Thị'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo '<br/>'.$this->Form->input('enable', array('type' => 'checkbox','div'=>false,'checked'=>true,'label' => false)); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan=2 style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'products','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
            echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
					&nbsp;
				</td>
			</tr>

		
		</table>
		<?php echo $this->Form->end(); ?>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	multi_link=" ";
	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	// $("#bar").width('0%');
    	// $("#message").html("");
		// $("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
    	// $("#bar").width(percentComplete+'%');
    	// $("#percent").html(percentComplete+'%');
    	$("#submit_upload").hide("fast");

    
    },
    success: function() 
    {
     //    $("#bar").width('100%');
    	// $("#percent").html('100%');

    },
	complete: function(response) 
	{
		// $("#message").html("<font color='green'>"+response.responseText+"</font>");
		// HideUpload();
		// addImagesToCanvas('http://rena.vn/files//uploads/'+$('#val_file').val());
		// $("#bar").width('100%');
    	// $("#percent").html('100%');
		alert('Upload Thành Công');
		$(".list_img").empty();
		loadImagesFlickr();
		$("#submit_upload").show("fast");
	},
	error: function()
	{
		alert(response.responseText);
		$(".list_img").empty();
		loadImagesFlickr();
		$("#submit_upload").show("fast");

	}
     
}; 
	$("#ProductUpLoadToFlickrForm").ajaxForm(options);
});

function loadImagesFlickr(){
		$.ajax({
        url: 'http://api.flickr.com/services/rest/',
        cache: true,
    	beforeSend: function(){
        	$('#loading').show();
        	$('body').css('opacity', '0.8');
    	},
        success: function(html){
        	$('#loading').show();
        	$('body').css('opacity', '0.9');
      	},
      	complete: function(){
        	$('#loading').hide();
        	$('body').css('opacity', '1');
      	},
        data: {
            format: 'json',
            method: 'flickr.people.getPublicPhotos',
            // api_key: '5a6ccc06cdd7ca221b1baa42bb272f66',
            // user_id: '99511867@N02',
            api_key: '6c7a1f9d92974509f3f053d8cfe0759d',
            user_id: '56204052@N06',
            // per_page: per_page,
            // page: page
        },
	    dataType: 'jsonp',
        jsonp: 'jsoncallback'
    }).done(function (data) {
        var gallery = $('.list_img'),
            url;
        $.each(data.photos.photo, function (index, photo) {
            url = 'http://farm' + photo.farm + '.static.flickr.com/' +
                photo.server + '/' + photo.id + '_' + photo.secret;
            $('<span>')
            .prop('id', url + '_b.jpg')
            .prop('title', photo.title)
            .prop('class', 'span2 grid')
            .append($('<img>').prop('src', url + '_s.jpg')
            ,$('<span>').prop('class','masoao')
            .append(photo.title))
            .appendTo(gallery);
         
        });
        $(".list_img span img").click(function(event) {
        	if($(".list_img span .img-polaroid").length<5 || $(this).hasClass('img-polaroid')){
        		$(this).toggleClass('img-polaroid');
        	}
        	else{
        		alert("Mỗi Sản Phẩm Chỉ Được Chọn 5 Hình");
        	}

        	 
        });
    });
	}
$("#choose_img").click(function(event) {
	$(".list_img").empty();
	loadImagesFlickr();
});

$("#btn_ok").click(function(event) {
	$(".list_img span .img-polaroid").each(function(){
		// $(this).attr('src').slice(0, -4);
   		multi_link +=$(this).attr('src').slice(0, -6)+"_b.jpg,";
   		$('#link_pic').val(multi_link);
	});
	$('#myModal').modal('hide')
});


</script>