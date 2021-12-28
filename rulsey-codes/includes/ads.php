<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8"/>

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<title>RimeHelp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  onload="ShowBanners()">
<section class="container">
<section class="header">
	  <img src="../advertizement/advertisement.png"  name="ChangeBanner">
	<h1><span class="fa fa-book"></span>;RimeHelp</h1>
	<p>Study for your SAT exams, ACT exams, JAMB, WAEC, NECO and GCE.We help you ace tests with ease.</p>
</section>
<section class="gateway">
<center>
<button>Sign in with google &nbsp;&nbsp;&nbsp;<span class="fa fa-google"></span></button>
</center><br>
<center>
	<a href="register.html"><button>Sign in with email &nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-envelope"></span></button></a>
</center>
	<p>Already registered? <a href="login.html" class="login">Login</a></p>
	<small>By signing up, you agree to our <a href="#">terms and conditions</a></small>
</section>

</section>
<br><br><br>
<script type="text/javascript">
		MyBanners = new Array('../images/doctor.png','1dbb6edd-c4b9-4f30-bce5-2976541e1c9a.png','4aa108eb-72e8-4a20-8488-6026333547f8.png','40dda8f9-2c58-4afd-95f2-4a4b051d65b7.png','undraw_Active_support_re_b7sj (1).png')
		banner = 0
		function ShowBanners(){
			if (document.images){
				banner++
				if (banner == MyBanners.length){
					banner = 0
				}
				document.ChangeBanner.src=MyBanners[banner] 
				setTimeout("ShowBanners()",5000)
			}
		}
	</script>



</body>
</html>

	