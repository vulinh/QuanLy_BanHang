<style type="text/css">
	.img-polaroid{
		background-color:#4cc5cd;
	}
</style>
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
            <?php echo __('TẠO SLIDE MỚI'); ?>
        </div>
    </div>
</div> 

<div class="row-fluid">    
	<div class="span12">	
		<?php echo $this->Form->create('Slide', array('controller'=>'slides','action' => 'edit')); ?>
		<table class="table table-striped table-bordered table-advance table-hover">

			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Tựa Đề'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('title', array('type' => 'text','div'=>false , 'label' => false,'class' => 'form-control','placeholder'=>'Tựa Đề')); ?>
					&nbsp;
				</td>
			</tr>


			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Hình Ảnh'); ?></strong>
				</td>
				<td id="image_here" style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('image', array('type' => 'hidden','id'=>'link_pic','div'=>false , 'label' => false,'class' => 'form-control','placeholder'=>'Link Hình')); ?>
					<!-- <input type="text" id="link_pic" name="link_pic" placeholder="link hình"> -->
					<a href="#myModal" id="choose_img" role="button" class="btn btn-primary" data-toggle="modal">Chọn Hình</a>
					<!--  -->
				</td>
			</tr>
			
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Nội Dung'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('content', array('div'=>false, 'label'=>false , 'placeholder' => 'Nội Dung','class' => 'form-control')); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td style="width:50%; text-align:center;font-size:15px">
					<strong><?php echo __('Link'); ?></strong>
				</td>
				<td style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Form->input('link', array('div'=>false, 'label'=>false , 'placeholder' => 'Link','class' => 'form-control')); ?>
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
		
			

			
				<td colspan=2 style="width:50%; text-align:center;font-size:15px">
					<?php echo $this->Html->link('Quay Lại',array('controller'=>'slides','action'=>'index'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
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
	one_link = $('#link_pic').val().slice(0, -6)+"_s.jpg";
	$('<img>').prop("id","image_chose").prop('src', one_link).appendTo('#image_here');
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
        	// links = $('#link_pic').val().split(",");
        	if($(".list_img span .img-polaroid").length<1 || $(this).hasClass('img-polaroid'))
        	{
     			
        			$(this).toggleClass('img-polaroid');
        		
        	}
        	else
        	{
        		alert("Mỗi Silde Chỉ Được Chọn 1 Hình");
        	}

        	 
        });

    });
	}
$("#choose_img").click(function(event) {
	$(".list_img").empty();
	$('#link_pic').val("");
	$('#image_here #image_chose').remove();
	loadImagesFlickr();
});

$("#btn_ok").click(function(event) {
	one_thumb_link = $(".list_img span .img-polaroid").attr('src');
   	one_link = $(".list_img span .img-polaroid").attr('src').slice(0, -6)+"_b.jpg";
   	$('#link_pic').val(one_link);
   	$('<img>').prop("id","image_chose").prop('src', one_thumb_link).appendTo('#image_here');
	$('#myModal').modal('hide');
});


</script>