<div id="page" class="dashboard" style="padding:45px">
	<div class="row-fluid circle-state-overview">
		<div class="span2 responsive" data-tablet="span3" data-desktop="span2" style="background-color:#4cc5cd">
			<div class="circle-stat block">
				<div class="visual">
					<div class="circle-state-icon">
						<i class="icon-user turquoise-color"></i>
					</div>
					<div style="display:inline;width:100px;height:100px;">
					<canvas width="100" height="80px"></canvas>
					
				</div>
				</div>
				<div class="details">
				<div class="number" style="color:transparent;font-weight:bolder"><?php echo $countAllUser?></div>
				<div class="title" style="color:transparent;font-weight:bolder">Người Dùng</div>
			</div>
			</div>
			
		</div>

		<div class="span2 responsive" data-tablet="span3" data-desktop="span2" style="background-color:#c8abdb">
			<div class="circle-stat block">
				<div class="visual">
				<div class="circle-state-icon">
					<i class="icon-tags purple-color"></i>
				</div>
				<div style="display:inline;width:100px;height:100px;">
					<canvas width="100" height="80px"></canvas>
					
				</div>
			</div>
			<div class="details" >
				<div class="number" style="color:transparent;font-weight:bolder">
					<?php
					echo $total .' VND';  ?></div>
				<div class="title" style="color:transparent;font-weight:bolder">Thu</div>
			</div>
		</div>
	</div>

		<div class="span2 responsive" data-tablet="span3" data-desktop="span2" style="background-color:#b9baba">
			<div class="circle-stat block">
				<div class="visual">
					<div class="circle-state-icon">
						<i class="icon-shopping-cart gray-color"></i>
					</div>
					<div style="display:inline;width:100px;height:100px;">
					<canvas width="100px" height="80px"></canvas>
					
				</div>
				</div>
				<div class="details">
				<div class="number" style="color:transparent;font-weight:bolder"><?php echo $totalExpense ?></div>
				<div class="title" style="color:transparent;font-weight:bolder">Chi</div>
			</div>
			</div>
		</div>

		<div class="span2 responsive" data-tablet="span3" data-desktop="span2" style="background-color:#e17f90">
			<div class="circle-stat block">
				<div class="visual">
					<div class="circle-state-icon">
						<i class="icon-minus red-color"></i>
					</div>
					<div style="display:inline;width:100px;height:100px;">
						<canvas width="100" height="80px"></canvas>
					
					</div>
				</div>
				<div class="details" >
					<div class="number" style="color:transparent;font-weight:bolder">
						<?php echo $totalDebit .' VND';  ?>
					</div>
					<div class="title" style="color:transparent;font-weight:bolder">
						Nợ Nhà Cung Cấp
					</div>
				</div>
			</div>
		</div>

		<div class="span2 responsive" data-tablet="span3" data-desktop="span2" style="background-color:#a8c77b">
			<div class="circle-stat block">
				<div class="visual">
					<div class="circle-state-icon">
						<i class="icon-minus green-color"></i>
					</div>
					<div style="display:inline;width:100px;height:100px;">
						<canvas width="100" height="80px"></canvas>
					
					</div>
				</div>
				<div class="details" >
					<div class="number" style="color:transparent;font-weight:bolder">
						<?php echo $totalDebit .' VND';  ?>
					</div>
					<div class="title" style="color:transparent;font-weight:bolder">
						Khách Hàng Nợ
					</div>
				</div>
			</div>
		</div>

		<div class="span2 responsive" data-tablet="span3" data-desktop="span2" style="background-color:#93c4e4">
			<div class="circle-stat block">
				<div class="visual">
					<div class="circle-state-icon">
						<i class="icon-th-large blue-color"></i>
					</div>
					<div style="display:inline;width:100px;height:100px;">
						<canvas width="100" height="80px"></canvas>
					
					</div>
				</div>
				<div class="details" >
					<div class="number" style="color:transparent;font-weight:bolder">
						<?php echo $totalProduct;  ?>
					</div>
					<div class="title" style="color:transparent;font-weight:bolder">
						Sản Phẩm Trong Kho
					</div>
				</div>
			</div>
		</div>


	</div>
</div>

<!-- <div id="page" class="dashboard">
	<div class="row-fluid circle-state-overview">
		<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
			<div class="circle-stat block">
				<a href="#"><div class="visual">
					
					<div style="display:inline;width:100px;height:100px;">
						<canvas width="100" height="100px"></canvas>
						<input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value=<?php echo $countAllUser  ?> data-fgcolor="#4CC5CD" data-bgcolor="#ddd" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;" readonly>
						<div class="circle-state-icon">
						<i class="icon-user turquoise-color"></i>
						</div>
					</div>
				</div></a>
				<div class="details">
					 <div class="number">1</div> 
					<div class="title">New Users</div>
				</div>
			</div>
		</div>
		<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
			<div class="circle-stat block">
				<div class="visual">
				<div class="circle-state-icon">
					<i class="icon-tags red-color"></i>
				</div>
				<div style="display:inline;width:100px;height:100px;">
					<canvas width="100" height="100px"></canvas>
					<input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="65" data-fgcolor="#e17f90" data-bgcolor="#ddd" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(225, 127, 144); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;" readonly>
				</div>
			</div>
			<div class="details">
				<div class="number">987$</div>
				<div class="title">Sales</div>
			</div>
		</div>
	</div>
	<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
		<div class="circle-stat block">
			<div class="visual">
				<div class="circle-state-icon">
					<i class="icon-shopping-cart green-color"></i>
				</div>
				<div style="display:inline;width:100px;height:100px;">
					<canvas width="100" height="100px"></canvas>
					<input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="30" data-fgcolor="#a8c77b" data-bgcolor="#ddd" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(168, 199, 123); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;" readonly>
				</div>
			</div>
			<div class="details">
				<div class="number">+320</div>
				<div class="title">New Orders</div>
			</div>
		</div>
	</div>
	<div class="span2 responsive" data-tablet="span3" data-desktop="span2"><div class="circle-stat block">
		<div class="visual">
			<div class="circle-state-icon">
				<i class="icon-comments-alt gray-color"></i>
			</div>
			<div style="display:inline;width:100px;height:100px;">
				<canvas width="100" height="100px"></canvas>
				<input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="15" data-fgcolor="#b9baba" data-bgcolor="#ddd" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(185, 186, 186); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;" readonly>
			</div>
		</div>
		<div class="details">
			<div class="number">387</div>
			<div class="title">Comments</div>
		</div>
	</div>
</div>
<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
	<div class="circle-stat block">
		<div class="visual">
			<div class="circle-state-icon">
				<i class="icon-eye-open purple-color"></i>
			</div>
			<div style="display:inline;width:100px;height:100px;">
				<canvas width="100" height="100px"></canvas>
				<input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="45" data-fgcolor="#c8abdb" data-bgcolor="#ddd" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(200, 171, 219); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;" readonly>
			</div>
		</div>
		<div class="details">
			<div class="number">+987</div>
			<div class="title">Unique Visitor</div>
		</div>
	</div>
</div>
<div class="span2 responsive" data-tablet="span3" data-desktop="span2">
	<div class="circle-stat block">
		<div class="visual">
			<div class="circle-state-icon">
				<i class="icon-bar-chart blue-color"></i>
			</div>
			<div style="display:inline;width:100px;height:100px;">
				<canvas width="100" height="100px"></canvas>
				<input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="25" data-fgcolor="#93c4e4" data-bgcolor="#ddd" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; background-image: none; font-weight: bold; font-style: normal; font-variant: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(147, 196, 228); padding: 0px; -webkit-appearance: none; background-position: initial initial; background-repeat: initial initial;" readonly>
			</div>
		</div>
		<div class="details">
			<div class="number">478</div>
			<div class="title">Updates</div>
		</div>
	</div>
</div>
</div>
</div> --> 