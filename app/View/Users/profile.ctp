<div class="container-fluid" style="background-color:transparent">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget" style="background-color:transparent">
				<div class="widget-title">
					<h4>
						<i class="icon-user"></i>Profile
					</h4>
					<span class="tools">
						<a href="javascript:;" class="icon-chevron-down"></a>
						<a href="javascript:;" class="icon-remove"></a>
					</span>
				</div>
				
				<div class="widget-body">
					<div class="span3">
						<div class="text-center profile-pic">
						<img src="<?php echo $this->webroot; ?>img/profile-pic.jpg" alt="Profile picture">
							
						</div>
						<ul class="nav nav-tabs nav-stacked">
							<li>
								<a href="javascript:void(0)">
									<i class="icon-coffee"></i> Portfolio
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-paper-clip"></i> Projects
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-picture"></i> Gallery
								</a>
							</li>
						</ul>
						<ul class="nav nav-tabs nav-stacked">
							<li>
								<a href="javascript:void(0)">
									<i class="icon-facebook"></i> Facebook
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-twitter"></i> Twitter
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-linkedin"></i> LinkedIn
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-pinterest"></i> Pinterest
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="icon-github"></i> Github
								</a>
							</li>
						</ul>
					</div>
					<div class="span6">
						<?php foreach($dataUser as $vdataUser){
							echo "<h4>".$vdataUser['users']['name']."<br/>";
							if($vdataUser['employees']['isManagerSale']==1 && 
							$vdataUser['employees']['isManagerFinance']==1 &&
							$vdataUser['employees']['isManagerStock']==1 &&
							$vdataUser['employees']['isManagerHuman']==1
							 )
							{
								echo "Admin";
							}
							else{
							if($vdataUser['employees']['isManagerSale']==1){
								echo "Nhân Viên Quản Lý Bán Hàng";
							}
							else{
								if($vdataUser['employees']['isManagerFinance']==1){
									echo "Nhân Viên Quản Lý Tài Chính";	
								}
								else{
									if($vdataUser['employees']['isManagerStock']==1){
										echo "Nhân Viên Quản Lý Kho";
									}
									else{
										if($vdataUser['employees']['isManagerHuman']==1){
											echo "Nhân Viên Quản Lý Nhân Viên";
										}
									}
								}
							}
							}
							echo "</small></h4>";
							echo '<table class="table table-borderless">
							<tbody>
								<tr>
									<td class="span2">Địa Chỉ :</td>
									<td> '.$vdataUser['users']['address'].'</td>
								</tr>
								<tr>
									<td class="span2">Điện Thoại Bàn :</td>
									<td>'. $vdataUser['users']['phone'].'</td>
								</tr>
								<tr>
									<td class="span2">Di Động :</td>
									<td>'. $vdataUser['users']['mobile'].'</td>
								</tr>
								<tr>
									<td class="span2">Khu Vực :</td>
									<td>'. $vdataUser['areas']['nameArea'].'</td>
								</tr>
								<tr>
									<td class="span2">Mã Số Thuế :</td>
									<td>'. $vdataUser['users']['taxID'].'</td>
								</tr>
								<tr>
									<td class="span2">Số Tài Khoản :</td>
									<td>'. $vdataUser['users']['accountBank'].'</td>
								</tr>
								<tr>
									<td class="span2">Ngân Hàng :</td>
									<td>'. $vdataUser['users']['bank'].'</td>
								</tr>
								<tr>
									<td class="span2">Website :</td>
									<td>'. $vdataUser['users']['website'].'</td>
								</tr>
							</tbody>
							</table>';	
						}?>
						
						<!--<table class="table table-borderless">
							<tbody>
								<tr>
									<td class="span2">First :</td>
									<td> Mosaddek </td>
								</tr>
								<tr>
									<td class="span2">Last Name :</td>
									<td> Hossain </td>
								</tr>
								<tr><td class="span2">Country :</td><td> Bangladesh </td></tr><tr><td class="span2">Birthday :</td><td> 13 july 1983 </td></tr><tr><td class="span2">Occupation :</td><td> Web Developer </td></tr><tr><td class="span2"> Email :</td><td> abc@abc.com </td></tr><tr><td class="span2"> Mobile :</td><td> 12345677 </td></tr></tbody></table>-->
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>