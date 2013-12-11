<div class="row-fluid">
    <div class="span12">
        <div class="well" style="text-align:center;font-size:30px">
           Client
        </div>
    </div>
    <div class="span3" style = "width: 30%;float: left;">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Danh mục sản phẩm</li>
               <?php foreach ($categoryproducts as $categoryproduct) { ?>
                    <li><?php echo $this->Html->link($categoryproduct['Categoryproduct']['nameCategoryProduct'],array('action'=>'index/'.$categoryproduct['Categoryproduct']['id'])) ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
     <div class="span8" style = "width: 70%;float: left;">
        <div class="well">
            <div class="row">
                <?php foreach ($Products as $Product) {   ?>
                    <div class="col-sm-6 col-md-3" style="float: left;width: 150px;height: 150px;background: #ccc;margin: 5px;">
                        <?php echo $this->Html->link($Product['Product']['nameProduct'],array('action'=>'viewproduct/'.$Product['Product']['idSite'])) ?>
                    </div>
              <?php  } ?>
            </div> 
            <div style="clear:both"></div>
            <p><small>
                <?php
                    echo $this->Paginator->counter(array(
                    'format' => __('Trang {:page}/{:pages} - hiển thị {:current}/{:count} - từ {:start}, đến {:end}')
                    ));
                ?>
            </small></p>

            <ul class="pagination" style = 'list-style:none'>
                <?php
                    // echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                    // echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                ?>
            </ul><!-- /.pagination -->
        </div>
     </div>
</div>