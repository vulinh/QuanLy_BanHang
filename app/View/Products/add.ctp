<style type="text/css" media="screen">
        #ProductUrl{
            color: #222;
            text-shadow:0px 2px 3px #555;
            width: 400px;
        }
        #quanlity_img h1{
            display: inline;
            margin-left: 10px;
            cursor: pointer;
        }
        #quanlity_img h1:hover{
            display: inline;
            margin-left: 10px;
            cursor: pointer;
            text-decoration: underline;
        }
        #gallery img{
            cursor: pointer;
            margin-left: 10px;
        }
        #gallery img:hover{
            cursor: pointer;
            margin-left: 10px;
            border: 2px groove #3399FF;
        }
</style>
<div class="categories form">
	<h2>Create a new product</h2>
		<?php 
			
			echo $this->Form->create('Product', array('action' => 'add'));

    		// echo $this->Form->text('id',array('hiddenField' => true)); 
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
    		echo $this->Form->text('url',array('style' =>'width:98%'));
    		echo $this->Form->label('Name Image');
    		echo $this->Form->text('image_name');
            echo $this->Form->input('abc',array('type'=>'file'));
        ?>
            <div id="gallery"></div>
            <div id="quanlity_img">
                <h1 id="s_img">Square</h1><h1 id="m_img">Small</h1><h1 id="c_img">Medium</h1><h1 id="b_img">Big</h1>
            </div>
        <?php
    		echo $this->Form->end('Submit');
    		
		 ?>
	
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        // Load images via flickr for demonstration purposes:
    $.ajax({
        url: 'http://api.flickr.com/services/rest/',
        data: {
            format: 'json',
            method: 'flickr.people.getPublicPhotos',
            api_key: '5a6ccc06cdd7ca221b1baa42bb272f66',
            user_id: '99511867@N02'
        },
        dataType: 'jsonp',
        jsonp: 'jsoncallback'
    }).done(function (data) {
        var gallery = $('#gallery'),
            url;
        var i=0;
        $.each(data.photos.photo, function (index, photo) {
            i=i+1;
            url = 'http://farm' + photo.farm + '.static.flickr.com/' +
                photo.server + '/' + photo.id + '_' + photo.secret;

                $('<img>').prop('src', url + '_s.jpg').prop('class','img_flickr').appendTo(gallery);
                var src_img = $('.img_flickr').attr('src');
                src_img = src_img.replace("_s.jpg", "_b.jpg");
                $('#ProductUrl').val(src_img);
                return (i!=5);
            
        });
        $('#s_img').click(function() {
            changeQuanlity('_s.jpg');

        });
        $('#m_img').click(function() {
            changeQuanlity('_m.jpg');
        }); 
        $('#b_img').click(function() {
            changeQuanlity('_b.jpg');
        }); 
        $('#c_img').click(function() {
            changeQuanlity('_c.jpg');
        });     
        $('.img_flickr').click(function() {
            var src_img = $(this).attr('src');
            src_img = src_img.replace("_s.jpg", "_b.jpg");
            $('#ProductUrl').val(src_img); 

        });
        function changeQuanlity(convert_quanlity){
            var cur_src = $('#ProductUrl').val();
            var q = cur_src.charAt(cur_src.length-5);
            if(q=='m')
            {
                cur_src = cur_src.replace("_m.jpg",''+convert_quanlity);
                $('#ProductUrl').val(cur_src); 
            }
            else{
                if(q=='b')
                {
                    cur_src = cur_src.replace("_b.jpg",''+convert_quanlity);
                    $('#ProductUrl').val(cur_src); 
                }
                else{
                    if(q=='c')
                    {
                        cur_src = cur_src.replace("_c.jpg",''+convert_quanlity);
                        $('#ProductUrl').val(cur_src); 
                    }
                    else{
                        if(q=='s')
                        {
                            cur_src = cur_src.replace("_s.jpg",''+convert_quanlity);
                            $('#ProductUrl').val(cur_src); 
                        }
                    }
                }
            }
            return cur_src;
        }
        
    });
    </script>