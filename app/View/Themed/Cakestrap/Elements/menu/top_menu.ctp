<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Quản Lý Bán Hàng</a>
    <ul class="nav nav-tabs">
  <li>
    <a href="#">Home</a>
  </li>
  <li>
  	<ul class="nav" role="navigation">
		<li class="dropdown">
            <?php echo $this->Html->link('Quản Lý Người Dùng <b class="caret"></b>',array('action'=>'#'),array('id'=>'drop1','role'=>'button','class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false))?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><?php echo $this->Html->link('Người Dùng',array('controller'=>'users','action'=>'index'),array('role'=>'menuitem')) ?></li>
               	<li role="presentation"><?php echo $this->Html->link('Loại Kho',array('controller'=>'typestocks','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chuyển Kho</a></li>
                <!-- <li role="presentation" class="divider"></li> -->
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li> -->
           	</ul>
        </li>

        <li class="dropdown">
            <!-- <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Kho<b class="caret"></b></a> -->
            <?php echo $this->Html->link('Quản Lý Kho <b class="caret"></b>',array('action'=>'#'),array('id'=>'drop1','role'=>'button','class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false))?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><?php echo $this->Html->link('Kho',array('controller'=>'stocks','action'=>'index'),array('role'=>'menuitem')) ?></li>
               	<li role="presentation"><?php echo $this->Html->link('Loại Kho',array('controller'=>'typestocks','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chuyển Kho</a></li>
                <!-- <li role="presentation" class="divider"></li> -->
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li> -->
           	</ul>
        </li>

        <li class="dropdown">
            <?php echo $this->Html->link('Quản Lý Sản Phẩm <b class="caret"></b>',array('action'=>'#'),array('id'=>'drop1','role'=>'button','class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false))?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><?php echo $this->Html->link('Sản phẩm',array('controller'=>'Products','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Nhà cung cấp',array('controller'=>'Suppliers','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Nhà sản xuất',array('controller'=>'Manufacturers','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Loại sản phẩm',array('controller'=>'Categoryproducts','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Ngoại tệ',array('controller'=>'Exchangerates','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Đơn vị',array('controller'=>'Units','action'=>'index'),array('role'=>'menuitem')) ?></li>
            </ul>
        </li>
        
        <li class="dropdown">
            <?php echo $this->Html->link('Quản Lý Hóa Đơn <b class="caret"></b>',array('action'=>'#'),array('id'=>'drop1','role'=>'button','class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false))?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><?php echo $this->Html->link('Hóa đơn',array('controller'=>'Bills','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Chi tiết hóa đơn',array('controller'=>'Detailbills','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Loại hóa đơn',array('controller'=>'Typebills','action'=>'index'),array('role'=>'menuitem')) ?></li>
            </ul>
        </li>
                   
    </ul>
  </li>
</ul>
  </div>
</div>