<?php


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
  
  

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../css/home.css">
  <link type="text/css" rel="stylesheet" href="../../css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="../../css/slick-theme.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/style.css" />
  
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/5295a543c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>




  <link rel="stylesheet" href="../../css/ulogin.css">
  <title>contact</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
<?php
include 'home_header.php';
include '../../php/config.php';
// $con = $_SESSION['con'];
?>
  <!-------------------------------end of hedaer section------------------------------->


  <div class="container my-3 my-lg-4 "> 
  
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238133.15238271494!2d72.68220938081429!3d21.15914250142786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1675575681988!5m2!1sen!2sin" class="map shadow" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-2 ">


    <div class="col p-4">
      <div class="d-flex mb-3">
        <p class="m-auto tit">Contact Us</p>
      </div>

      <div class="mb-1 mt-2">
      <div class="d-flex">
        <div class="co-icon d-flex"><i class="fa-solid fa-location-dot iconX m-auto"></i></div>
        <div class="h-100 my-auto d-flex"><p class="m-auto px-4 textX">Address</p></div>
      </div>
      <div class="addX"><div class=" d-flex"><p class="mb-0 px-4">Nana Varachha,Near Sarthana Neture Park,Surat-395006</p></div></div>
    </div>

    <div class="mb-1">
      <div class="d-flex">
        <div class="co-icon d-flex"><i class="fa-solid fa-phone iconX m-auto"></i></div>
        <div class="h-100 my-auto d-flex"><p class="m-auto px-4 textX">Contact</p></div>
      </div>
      <div class="addX mb-1"><div class=" d-flex"><p class="mb-0 px-4">+(91)99788 47345</p></div></div>
      <div class="addX mb-1"><div class=" d-flex"><p class="mb-0 px-4">+(91)75671 59902</p></div></div>
      <div class="addX mb-1"><div class=" d-flex"><p class="mb-0 px-4">+(91)97248 92950</p></div></div>
    </div>

    <div class="">
      <div class="d-flex">
        <div class="co-icon d-flex"><i class="fa-solid fa-envelope iconX m-auto"></i></div>
        <div class="h-100 my-auto d-flex"><p class="m-auto px-4 textX">Sales Support</p></div>
      </div>
      <div class="addX"><div class=" d-flex"><p class="mb-0 px-4">princedesai635@gmail.com</p></div></div>
    </div>
    </div>


    <div class="col p-4">
      <div class="d-flex mb-3">
        <p class="m-auto tit">Send The Message</p>
      </div>
      <?php
                      if (isset($_GET['succ'])) { ?>
                        <p class="succ"><?php echo $_GET['succ']; ?></p>

                      <?php } ?>
      <form action="../../php/d_contact.php" method="post">
        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="form4Example1" name="name" class="form-control" />
          <label class="form-label" for="form4Example1">Name</label>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form4Example2" name="email" class="form-control" />
          <label class="form-label" for="form4Example2">Email address</label>
        </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" name="message" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Message</label>
        </div>
      
      
        <!-- Submit button -->
        <button type="submit" name="send" class="btn bg-x1 btn-block mb-4">Send</button>
      </form>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------->
<div
  class="offcanvas offcanvas-end"
  tabindex="-1"
  id="offcanvasRight"
  aria-labelledby="offcanvasRightLabel"
>
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button
      type="button"
      class="btn-close text-reset"
      data-mdb-dismiss="offcanvas"
      aria-label="Close"
    ></button>
  </div>
  <div class="offcanvas-body">...</div>
</div>
 <!-------------------------------this is the subscribe section-----------------------> 
	  	<!-- NEWSLETTER -->
      <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="newsletter">
                <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                <form class="row ">
                  <input class="input col-8" type="email" placeholder="Enter Your Email">
                  <button class="newsletter-btn col-4"><i class="fa fa-envelope"></i> Subscribe</button>
                </form>
                <ul class="newsletter-follow">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /NEWSLETTER -->
      <!-------------------------this is the end of the subscribe section------------------>
<!--------------------------------------------------------------------------------------------->
<!--------------------------------this is the footer----------------------------------->
	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
					<div class="col">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col">
						<div class="footer">
							<h3 class="footer-title">Categories</h3>
							<ul class="footer-links">
								<li><a href="#">Hot deals</a></li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Smartphones</a></li>
								<li><a href="#">Cameras</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
					</div>

					

					<div class="col">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Orders and Returns</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>

					<div class="col">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<ul class="footer-links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">View Cart</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Track My Order</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
					<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->
	<!--------------------------------end of the footer------------------------------------



  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>