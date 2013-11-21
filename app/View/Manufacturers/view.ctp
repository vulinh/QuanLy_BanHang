<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
            THÔNG TIN NHÀ CUNG CẤP
        </div>
    </div>
</div>

<div class="row-fluid">
     <div class="span12">
           
                <table class="table table-striped table-bordered">
                    <tbody>
                       
                        <tr>		<td><strong><?php echo __('Tên nhà sản xuất'); ?></strong></td>
                            <td>
                                <?php echo h($manufacturer['Manufacturer']['nameManufacturer']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>		<td><strong><?php echo __('URL logo'); ?></strong></td>
                            <td>
                                <?php echo h($manufacturer['Manufacturer']['logo']); ?>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>		<td><strong><?php echo __('Hiện Thị'); ?></strong></td>
                            <td>
                                <?php
                                 if(h($manufacturer['Manufacturer']['enable']!=0))
                                {
                                    echo 'Có';
                                }
                                else
                                {

                                    echo 'Không';
                                } ?>
                                &nbsp;
                            </td>
                        </tr>					</tbody>
                </table><!-- /.table table-striped table-bordered -->



    </div>

</div>
 <?php echo $this->Html->link('Quay Lại',array('controller'=>'manufacturers','action'=>'index'),array('class'=>'btn btn-success pull-right'));?>