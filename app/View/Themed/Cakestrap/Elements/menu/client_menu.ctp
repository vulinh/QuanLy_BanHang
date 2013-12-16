<ul class="sf-menu span12">
     <li>
                        
        <?php echo  $this->Html->link("Trang Chủ",array("controller"=>"","action"=>"/")) ?>
    </li>
    <li>
        <?php echo  $this->Html->link("Sản Phẩm",array("controller"=>"clients","action"=>"index")) ?>
    </li>
    <li>
        <a href="#">Dịch Vụ</a>
    </li>
    <li id="project" class="current">
        <?php  echo $this->Html->link("Dự Án",array("controller"=>"news","action"=>"projectindex")) ?>
    </li>
    <li id="review">
        <?php echo  $this->Html->link("Đánh Giá",array("controller"=>"news","action"=>"reviewindex")) ?>
    </li>
    <li id="guide">
        <?php echo $this->Html->link("Hướng Dẫn",array("controller"=>"news","action"=>"guideindex")) ?>
    </li>
    <li>
        <a href="#">Liên Hệ</a>
    </li>
    
</ul>