
<?php
$zannat='localhost';
$ggg='root';
$gggg='';
$dbname = 'file';
$conn=mysqli_connect("$zannat","$ggg","$gggg","$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
   echo "connection successfully conected";
}

if(isset($_POST['submit']))
{    
     $your = $_POST['your_name'];
     $your_email = $_POST['your_email'];
     $your_phone_number = $_POST['your_phone_number'];
     $your_message = $_POST['your_message'];
 
     $sql = "INSERT INTO contact(name,your_email,your_phone_number,your_message)
     VALUES ('$your','$your_email','$your_phone_number','$your_message')";
     if (mysqli_query($conn, $sql)) {
        echo "message sent successfully !";
     } else {
        echo "Error: ".$sql."
" . mysqli_error($conn);
     }
      mysqli_close($conn);
}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>contact us</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>

<!--/top-header-content-->
<section class="w3l-top-header-content">
	<div class="hny-top-menu">
		<div class="top-hd">
			<div class="container-fluid">
				<div class="row">
					<div class="social-top col-lg-6">
						<li><a href="https://www.facebook.com/profile.php?id=100007985829377"><span class="fa fa-facebook"></span></a></li>
						<li><a href="https://www.instagram.com/mr_kunwar45/"><span class="fa fa-instagram"></span></a> </li>
						<li><a href="https://twitter.com/KunwarS06390672"><span class="fa fa-twitter"></span></a></li>
						
						<li>
							<a href="https://www.linkedin.com/in/kunwar-singh-4624301a9/">
								<span class="fa fa-linkedin"></span>
							</a>
						</li>
					</div>
					<div class="accounts col-lg-6">
						<li class="top_li"><span class="fa fa-mobile"></span><a href="tel:9140594880">9140594880</a>
						</li>

						<li class="top_li"><span class="fa fa-envelope-o"></span><a href="techkunwar45@gmail.com">Need help? Contact us via email</a>

						</li>
						<li class="top_li1"><span class="fa fa-map-marker"></span>sultanpur , uttar pradesh </li>
					</div>
				</div>
			</div>
		</div>
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html"><span class="fa fa-laptop" aria-hidden="true"></span> <label class="lohny">TECH</label>KUNWAR</a>
				<!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
					<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://www.youtube.com/channel/UCaEI7W5GQWJSkCwPGLSUQbg?view_as=subscriber">Tech videos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">about</a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
		<!--//nav-->
	</div>

</section>
<!--//top-header-content-->


    <section class="w3l-inner-page-main">
      <div class="breadcrumb-infhny">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Contact</h2>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
 

	<!-- /contact-form -->
  <link rel="stylesheet" type="text/css" href="thapastyle.css">
  <div class="helpus">
<div class="container" class="container"> 
<form action="contact.php"> 
  <form id="contact"  method="post" class="contact">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <lable>
      <input placeholder="Your name" type="text" name="your_name">
    </lable>
    <lable>
      <input placeholder="Your Email Address" type="text" name="your_email">
    </lable>
    <lable>
      <input placeholder="Your Phone Number" type="text" name="your_phone_number">
    </lable>
    <lable>
      <textarea placeholder="Type your Message Here...." name="your_message"></textarea>
    </lable>
    <lable>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </lable>
  </form>
</div>
</div>
	<!-- //contact-form -->
<section class="w3l-footer-22-main">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-4"> 
                    <div class="sub-columns row">
                        <div class="sub-one-left col-lg-4 col-md-6">
                            <h6>About </h6>
                            <p>My Name is KUNWAR SINGH.I'm 20years old.Currently iam persuing B-TECH from INDUS INSTITUTE OF TECHNOLOGY AND MANAGEMENT Kanpur UP.
I hope we will give u some best blog related to technology field through my website and Youtube channel...</p>


                        </div>
                        <div class="sub-two-right col-lg-4 col-md-6 my-md-0 my-5">
                            <h6>Quick links</h6>
                            <div class="footer-hny-ul">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="https://www.youtube.com/channel/UCaEI7W5GQWJSkCwPGLSUQbg?view_as=subscriber">Tech Videos</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
       
                           </div>
                        </div>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer row">
                <div class="columns col-lg-6">
                    <ul class="social footer">
                        <li><a href="https://www.facebook.com/profile.php?id=100007985829377"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/kunwar-singh-4624301a9/"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                        <li><a href="https://twitter.com/KunwarS06390672"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                        <li><a href="https://www.instagram.com/mr_kunwar45/"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
                        
                    </ul>
                </div>
                <div class="columns copy-right col-lg-6">
                    <p>©  2020 Copyright-Section. All rights reserved. Design by  KUNWAR SINGH by<a href="https://w3layouts.com/" target="_blank">
                         W3 templates |free templates by w3</a>
                </p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- //titels-5 -->
     <!-- move top -->
     <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-long-arrow-up"></span>
    </button>
    <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };
    
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }
    
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
   
</section>
</div>
</body>
</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/bootstrap.min.js"></script>