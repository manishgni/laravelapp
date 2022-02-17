<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jolosoft.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 09:23:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content="JoloSoft is leading fastest growing api provider of money transfer in India."/>
  <meta name="author" content="JoloSoft"/>
  <title>{{ config('APP.name','Login')}}</title>
  <!--favicon-->
  <link rel="icon" href="data/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="data/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="data/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="data/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="data/assets/css/app-style.css" rel="stylesheet"/>
  
</head><script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#createform').submit(function(e){
  
    e.preventDefault(); // Prevent Default Submission
    $("#showloading6").show();
    $("#next").hide();
    $.post('login_next.html', $(this).serialize() )
    .done(function(data){
      $('#form-content6').fadeOut('slow', function(){
          $('#form-content6').fadeIn('slow').html(data);
        });
        $("#showloading6").hide();
          $("#next").show();
    })
    .fail(function(){
     alert('Ajax Submit Failed ...');
     $("#next").show();
    });
});
});
</script>
<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="data/assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Log In</div>
		  
		  <form class="form-horizontal" name="createform" id="createform" method="post">
		      
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Mobile Number</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="InputMobile" id="InputMobile" class="form-control input-shadow" placeholder="Enter Mobile Number">
				  <div class="form-control-position">
					  <i class="icon-screen-smartphone"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="InputPassword" id="InputPassword"  class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="forgotpass.html">Forgot Password?</a>
			 </div>
			</div>
			
			 <button id="next" type="submit" class="btn btn-light btn-block waves-effect waves-light">Log In</button>
			  
			 	 <button id="showloading6" type="button" class="btn btn-light btn-block waves-effect waves-light" style="display:none;"><i class="fa fa-refresh fa-spin"></i></button>
			  
			
			 </form>
			 <p><div id="form-content6"></div></p>
			 
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Do not have an account? <a href="create_preview.html"> Create here</a></p>
		  </div>
	     </div>
    
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="data/assets/js/jquery.min.js"></script>
  <script src="data/assets/js/popper.min.js"></script>
  <script src="data/assets/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="data/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="data/assets/js/app-script.js"></script>   <script>
     $("#next").click(function() {
    $('html, body').animate({
        scrollTop: $("#form-content6").offset().top
    }, 2000);
});
 </script>
</body>

<!-- Mirrored from jolosoft.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 09:23:35 GMT -->
</html>
