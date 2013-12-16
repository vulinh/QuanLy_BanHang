<?php 
    echo $this->Html->script('tinymce/tinymce.min');
?> 
<script>
        tinymce.init({selector:'#NewsEpitomize'});
        tinymce.init({selector:'#NewsContent',
            plugins:["advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"],
            height : 500});
</script>
<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo __('Thêm Tin Tức '.$typenews['Typenews']['name']); ?>
        </div>
    </div>
</div> 
<div class="row-fluid">    
    <div class="span12">    
          <div class="well">  
            <?php echo $this->Form->create('News', array('role' => 'form')); ?>

                <fieldset>

                    <div class="form-group">
                        <?php echo $this->Form->input('title', array('label' => 'Tiêu đề','class' => 'form-control', 'style' => 'width:80%')); ?>
                    </div><!-- .form-group -->
                    <br>
                    <div class="form-group">
                        <?php echo $this->Form->input('summary', array('label' => 'Tóm tắt','class' => 'form-control', 'style' => 'width:80%')); ?>
                    </div><!-- .form-group -->
                    <br>
                    <div class="form-group">
                        <?php
                             echo $this->Form->input('content', array('label' => 'Nội dung','class' => 'form-control', 'style' => 'width:80%')); 
                            ?>
                    </div><!-- .form-group -->
                    <br>
                    <div class="form-group">
                        <label for="NewsStatus">Hiển thị</label>
                        <?php echo $this->Form->input('status', array('type' => 'checkbox','checked'=>true,'label' => false)); ?>
                    </div><!-- .form-group -->
                    <br>
                    <div class="form-group">
                        <?php echo $this->Form->file('image'); ?>
                    </div><!-- .form-group -->
                    <div class="form-group">
                        <?php echo $this->Form->input('idTypeNews', array('type' => 'hidden','value' => $typenews['Typenews']['id'],'class' => 'form-control')); ?>
                    </div><!-- .form-group -->
                    <?php
                    switch($typenews['Typenews']['id']){
                      case 1:
                        echo $this->Html->link('Quay Lại',array('controller'=>'news','action'=>'project'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
                        break;
                      case 2:
                        echo $this->Html->link('Quay Lại',array('controller'=>'news','action'=>'review'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
                        break;
                      case 3:
                        echo $this->Html->link('Quay Lại',array('controller'=>'news','action'=>'guide'),array('class'=>'btn btn-success pull-right','style'=>'margin-top:30px;'));
                        break;  
                    };
                    echo $this->Form->input('Chấp Nhận',array('type'=>'button','class'=>'btn btn-primary pull-right','div'=>false,'label'=>false,'style'=>'margin-right:5px;margin-top:30px;')); ?>
                    

                </fieldset>

            <?php echo $this->Form->end(); ?>
           </div> 
    </div>

</div>