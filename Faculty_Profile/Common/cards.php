</section>
	<section class=" bg-light text-center">
		<div class=" w-100 pt-5 m-auto" style="
	width:100%;
	padding-right:15px;
	padding-left:15px;
	margin-right:auto;
	margin-left:auto;
	">

<h1>Administration</h1>
<hr/>
<div class="row" style="padding:10px;">
			<div class="col-sm-3" style="height:300px; border-top:5px solid #5e0209; border-bottom:5px solid #5e0209; box-shadow:0px 0px 10px 0px gray; text-align:center; color:#5e0209; padding:30px;">
			<div class="row" style="height:200px; width:90%; text-align:center; margin:0px auto; border-radius:50%;">
			<img src="images/VcNew.jpeg"  style="border-radius:50%; border:2px solid #5e0209;" height="200px" width="100%" alt="No Image"/>
			</div>
			 <div class="row" style="padding:10px;" >
			 <div class="col-sm-1"></div>
			 <div class="col-sm-10" style= "text-align:center;">
			 
			 <span style="color:#5e0209;font-weight:bold;">Prof. Ravi Shanker Singh</span>
			 <span style="color:#5e0209; font-size:13px;">Hon'ble Vice Chancellor</span>
			 
			 </div>
			 <div class="col-sm-1"></div>
			 </div>
			</div>
			<div class="col-sm-1"><hr/></div>
			<div class="col-sm-3" style="height:300px;border-top:5px solid #5e0209; border-bottom:5px solid #5e0209; box-shadow:0px 0px 10px 0px gray; text-align:center; color:white; padding:30px;">
			
			<div class="row" style="height:200px; width:90%; text-align:center; margin:0px auto; border-radius:50%;">
			<img src="images/directoriet.jpg"  style="border-radius:50%; border:2px solid #5e0209;" height="200px" width="100%" alt="No Image"/>
			</div>
			 <div class="row" style="padding:10px;" >
			 <div class="col-sm-1" ></div>
			 <div class="col-sm-10" style= "text-align:center;">
			 
			 <span style="color:#5e0209;font-weight:bold;">Prof. Rama Pati Mishra</span>
			 <span style="color:#5e0209; font-size:13px;">Director, IET</span>
			 
			 </div>
			 <div class="col-sm-1"></div>
			 </div>
			
			</div>
			<div class="col-sm-1"><hr/></div>
			<div class="col-sm-4" style="height:300px;background-color:#5e0209; border-radius:0px; text-align:center; color:white; padding:30px; box-shadow:0px 1px 5px 0px black;">
			
			<!---<div class="row" style="height:40px; background-color:white;"></div> --->
			<button class="btn btn-danger" style="width:90%; font-weight:bold;">Notification <i class="fa fa-bell"></i></button>
			<hr color="white"/>
			<marquee height="130px" onmouseover="stop()" onmouseout="start()" behavior="scroll" direction="up" scrolldelay="25" hspace="10%" scrollamount="2" bgcolor="">

			<?php $conn1=mysqli_connect("localhost","root","","mca_dept"); 
				$q1="Select * from links";
				$link1=mysqli_query($conn1,$q1);
				while($r1=mysqli_fetch_array($link1))
				{
					?>
					
					
				
			<hr/ color="white">
			<a href="<?php echo $r1['link']; ?>" target="_blank" style="color:white;"><h6><i class="fa fa-bullhorn"></i> &nbsp; 1. <?php echo $r1['title'];?></h6></a>



			<hr/ color="white">
			<h6><i class="fa fa-bullhorn"></i> &nbsp; 2. Upcoming Updates</h6>
			<hr/ color="white">
			<h6><i class="fa fa-bullhorn"></i> &nbsp; 3. Upcoming Updates</h6>
			<hr/ color="white">
			</marquee><hr/>
			<span ><a href="Admin/notification.php" style="color:white; background-color:green;border-radius:5px;">&nbsp; View All &nbsp;</a></span>
				
					<?php
				}
				
			?>
			</div>
			
		</div>
<hr/>

			<h1>FACULTIES</h1>
			<p style="font-family:sans-serif; background-color:#5e0209;color:white;">Institute of Engineering and Technology serves the national and international community through a broad spectrum of undergraduate and postgraduate studies..</p>
			<hr>
			<div class="row pt-3 pb-3">
				<div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto">
					<div class="card card-margin" title="Dr. Brijesh Bhardwaj H.O.D. Associate Professor">
						<div class="card-logo m-auto">
							<img src="images/bkb.jpeg" class="card-img img-fluid">
						</div>
						<div class="card-body">
							<h6 class="card-title">Dr. Brijesh Bhardwaj <br> <span style="font-size:13px;">H.O.D. - MCA</span></h6><a href="Faculty_Profile/drbkb.php" class="btn  stretched-link" style="background-color:#5e0209;color:white;">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto">
					<div class="card card-margin">
						<div class="card-logo m-auto">
							<img src="images/ramanandan.jpeg" class="card-img img-fluid">
						</div>
						<div class="card-body">
							<h6 class="card-title" style="font-size:13px;">Mr. Ramanandan Tripathi <br> <span style="font-size:13px;">Assistant Professor - MCA</span></h6><a href="Faculty_Profile/ramanandan.php" class="btn  stretched-link" style="background-color:#5e0209;color:white;">See Profile</a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto">
					<div class="card card-margin">
						<div class="card-logo m-auto mt-1">
							<img src="images/dt.jpeg" class="card-img img-fluid">
						</div>
						<div class="card-body">
							<h6 class="card-title">Mr. Dileep Tiwari<br> <span style="font-size:13px;">Assistant Professor - MCA</span></h6><a href="Faculty_Profile/mrdileeptiwari.php" class="btn  stretched-link" style="background-color:#5e0209;color:white;">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto">
					<div class="card card-margin">
						<div class="card-logo m-auto">
							<img src="images/vivekmishra.jpg"  class="card-img img-fluid">
						</div>
						<div class="card-body">
							<h6 class="card-title">Mr. Vivek Mishra <br> <span style="font-size:13px;">Assistant Professor - MCA</span></h6><a href="Faculty_Profile/vivekmishra.php" class="btn  stretched-link" style="background-color:#5e0209;color:white;">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto">
					<div class="card card-margin">
						<div class="card-logo m-auto">
							<img src="images/drjp.jpeg" class="card-img img-fluid">
						</div>
						<div class="card-body">
							<h6 class="card-title">Dr. Jay Prakash <br> <span style="font-size:13px;">Assistant Professor - MCA</span></h6><a href="Faculty_Profile/drjayprakash.php" class="btn  stretched-link" style="background-color:#5e0209;color:white;">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-12 col-10 m-auto">
					<div class="card card-margin">
						<div class="card-logo m-auto">
							<img src="images/va.jpeg" class="card-img img-fluid">
						</div>
						<div class="card-body">
							<h6 class="card-title">Mr. Vivek Amlani<br> <span style="font-size:13px;">Assistant Professor - MCA</span></h6><a href="Faculty_Profile/vivekamlani.php" class="btn  stretched-link" style="background-color:#5e0209;color:white;">See Profile</a>
						</div>
					</div>
				</div>
				
				
			</div>
			<hr>
		</div>	
	</section>
	<div class="container-fluid">
		<div class="row studentcorner">
		
				<div class="col-sm-4" style="background-color:white;">
					<button class="btn btn-default form-control" style="border:2px solid #teal;font-family:elephant;color:white;margin-top:2px; background-color:#04142e;">Student Corner</button>
					<hr>
					
					<div class="row" style="height:200px; color:#5e0209;">
						<div class="col-sm-6" style="">
							<br>
							<center><h5>LOGIN</h5>
							<a href="Login/login.php"  target="_blank" title="LOGIN HERE"><img src="Images/login_clipart1.jpeg" height="120px" width="120px"/></a></center>
						</div>
						<div class="col-sm-6" style="">
							<br>
							<center><h5>REGISTER</h5>
							<a href="Login/register.php"  target="_blank" title="REGISTER HERE"><img src="Images/register_clipart.jpg" height="120px" width="120px"/></a></center>
						</div>
					</div>
					
				</div>
				<div class="col-sm-4" style="background-color:white;">
				<button class="btn btn-default form-control" style="border:2px solid teal;font-family:elephant;color:white;margin-top:2px;background-color:#04142e;">Examination Corner</button>
				
				<hr>
				<div class="row" style="height:200px;">
				<div class="col-sm-3"></div>
						<div class="col-sm-6" style="">
							<br>
							
							<a href="http://exam21.rmlauexams.in/"  target="_blank"><button class="btn btn-default form-control" style="border:1px solid #5e0209; font-weight:bold;">EXAMINATION FORM</button></a>
							<br>
							<br>
							<a href="admissionpage.php"  target="_blank"><button class="btn btn-default form-control" style="border:1px solid #5e0209; font-weight:bold;">ADMISSION FORM</button></a>
						</div>
						<div class="col-sm-3"></div>
						
					</div>
				
				
				</div>
				<div class="col-sm-4" style="background-color:white;">
				<button class="btn btn-default form-control" style="border:2px solid teal;font-family:elephant;color:white;margin-top:2px;background-color:#04142e;">Department Corner</button>
				<hr>
				
				<div class="row" style="height:200px;color:#5e0209;">
				<div class="col-sm-3"></div>
						<div class="col-sm-6" style="">
							<br>
							
							<center><h5>ADMIN LOGIN</h5>
							<a href="Admin/index.php"  target="_blank" title="ADMIN LOGIN"><img src="Images/admin.png" height="120px" width="120px"/></a></center>
						</div>
						<div class="col-sm-3"></div>
						
					</div>
				</div>
		</div>
	</div>
	<br>
	<style>
	.studentcorner
	{
	//border:1px solid;
	height:300px;
	background-color:white;
	box-shadow:0px 0px 15px 0px #5e0209;
	}
	a img:hover
	{
		box-shadow:0px 1px 10px 0px #5e0209;
		
		
	}
	</style>