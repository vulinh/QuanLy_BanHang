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
            <?php echo $this->Html->link('Quản Lý Nhân Sự <b class="caret"></b>',array('action'=>'#'),array('id'=>'drop1','role'=>'button','class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false))?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><?php echo $this->Html->link('Người Dùng',array('controller'=>'users','action'=>'index'),array('role'=>'menuitem')) ?></li>
               	<li role="presentation"><?php echo $this->Html->link('Phân Quyền',array('controller'=>'employees','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Chuyển Kho</a></li> -->
                <!-- <li role="presentation" class="divider"></li> -->
                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li> -->
           	</ul>
        </li>
      <li class="dropdown">
            <?php echo $this->Html->link('Quản Lý Sản Phẩm <b class="caret"></b>',array('action'=>'#'),array('id'=>'drop1','role'=>'button','class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false))?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><?php echo $this->Html->link('Sản Phẩm',array('controller'=>'products','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Loại Sản Phẩm',array('controller'=>'categoryproducts','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Nhà Cung Cấp',array('controller'=>'suppliers','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Đơn Vị Tính',array('controller'=>'units','action'=>'index'),array('role'=>'menuitem')) ?></li>
                <li role="presentation"><?php echo $this->Html->link('Tiền Tệ',array('controller'=>'exchangerates','action'=>'index'),array('role'=>'menuitem')) ?></li>
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

                   
    </ul>
  </li>
</ul>
  </div>
</div>