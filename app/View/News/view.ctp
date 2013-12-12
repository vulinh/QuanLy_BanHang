<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            <?php echo h($news['News']['title']); ?>
        </div>
    </div>
</div>

<div class="row-fluid">
     <div class="span12">
            <div class="well">
                <table class="table table-striped table-bordered">
                    <tbody>       
            <tr>        <td><strong><?php echo __('Time'); ?></strong></td>
        <td>
            <?php echo h($news['News']['time']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('View'); ?></strong></td>
        <td>
            <?php echo h($news['News']['view']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Status'); ?></strong></td>
        <td>
            <?php echo h($news['News']['status']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('Image'); ?></strong></td>
        <td>
            <?php echo h($news['News']['image']); ?>
            &nbsp;
        </td>
</tr><tr>        <td><strong><?php echo __('IdTypeNews'); ?></strong></td>
        <td>
            <?php echo h($news['News']['idTypeNews']); ?>
            &nbsp;
        </td>
</tr>
                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <div>
                      <?php echo html_entity_decode($news['News']['epitomize']); ?>  
                    </div>    
                </div><!-- .form-group -->
                <br>
                <div class="form-group">
                    <label>Nội dung</label>
                    <div>
                      <?php echo html_entity_decode($news['News']['content']); ?>  
                    </div>    
                </div><!-- .form-group -->
                <br>


         </div>
    </div>

</div> 
<?php
        switch($news['News']['idTypeNews']){
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
 ;?>