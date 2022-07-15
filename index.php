	<?php include('common/header.php') ?>
		<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner" style="
    width: 100%;
    height:450px;
  ">
				<div class="carousel-item active">
				  <img src="images/19.jpg" alt="" width="100%" height="450">
				</div>
				<div class="carousel-item">
				  <img src="images/rb6.jpg" alt="" width="100%" height="450">
				</div>
				<div class="carousel-item">
				  <img src="images/18.jpg" alt="" width="100%" height="450">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			  </a>
		</div>	
	
		<div class="w-100 in-ad-ap">
			<div class="row m-auto text-center">
				<div class="col-md-4"><h3><a href="gallery.php" style="color:white;">GALLERY</a></h3></div>
				<div class="col-md-4"><h3><a href="login/login.php" style="color:white;">LOGIN/REGISTER<i class="fa fa-sign-in text-white fa-lg" aria-hidden="true"></i></a></h3></div>
				<div class="col-md-4"><h3><a href="admin/index.php" style="color:white;">ADMIN LOGIN<i class="fa fa-sign-in text-white fa-lg" aria-hidden="true"></i></a></h3></div>
			</div>
		</div>
		<div class="paragraph">
			<p>
				IET - MCA provides a harmonious environment and learning opportunities  to its students regardless of their gender, socioeconomic background,and regional differences.
			</p>
		</div>
	<?php include('common/cards.php') ?>
	<?php include('common/footer.php') ?>
	 
	

	<!--- MODAL CONTENT START --->
	   <div class="modal" id="basicExampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body xl">
          <img src="Images/Head.png" width="765px" height="360px" />
        <div style="clear: both;"></div>
      </div>  
      <div class="modal-footer">
	  <button class="btn btn-default" style="border:1px solid navy;"><a href="http://www.rmlau.ac.in/" target="_blank">Go To University Website<a/></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	<script type="text/javascript" src="Scripts/jquery.min.js"></script> 
     <script type="text/javascript" src="Scripts/jquery-ui.min.js"></script>
     <script src="site/writereaddata/config/sitejs.js" type="text/javascript"></script>

            <script type="text/javascript">	
		$(function() {
					 $('#basicExampleModal').modal('show');
					});
								$(".skiper").click(function () {
				
                        $('html,body').animate({
                            scrollTop: 550
                        },
                            'slow');
                    });

                    var mk = $(location).attr('href')
                    $('.skiper').attr('href', mk + "#main-content");
           </script>
	 <!--- MODAL CONTENT STOP --->
</body>
</html>

