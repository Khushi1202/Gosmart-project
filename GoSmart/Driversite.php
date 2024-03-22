<!DOCTYPE html>
<html>
<title>GO SMART</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>View Request</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Accept/Decline Request</p>
  </a>
  
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="choose.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i ></i>
    <p>Logout</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">VIEW REQUEST</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">ACCEPT/DECLINE REQUEST</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
	
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Welcome To</span> GO-SMART</h1>
    <p>Help our customers by responding them here!!</p>
    <img src="https://ak.picdn.net/shutterstock/videos/22240696/thumb/1.jpg" alt="boy" class="w3-image" width="992" height="1108">
	<div class="w3-content w3-justify w3-text-grey w3-padding-64">
	 <h2 class="w3-text-light-grey">GO-SMART</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
	 The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
	as It is a long established fact that a reader will be distracted by the readable c
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">Driver profile</h3>
    <p class="w3-wide">Safe rides</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>
    <p class="w3-wide">Responsible to customers</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:84%"></div>
    </div>
    <p class="w3-wide">Decipline</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div> </div><br>
    

      <div class="w3-quarter w3-section">
	  
        <span class="w3-xlarge">110+</span><br>
        Big rides
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">100+</span><br>
        Amazing feedbacks
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
   

    
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Request from customer</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Accept</li>
          <li class="w3-padding-16">Pickup Location</li>
          <li class="w3-padding-16">Drop Location</li>
          <li class="w3-padding-16">Timing</li>
         
          <li class="w3-padding-16">
           
            <span class="w3-opacity">Contact Customer</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Accept Request</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Decline</li>
          <li class="w3-padding-16">Pickup Location</li>
          <li class="w3-padding-16">Drop Location</li>
          <li class="w3-padding-16">Timing</li>
         
          <li class="w3-padding-16">
            
            <span class="w3-opacity">Contact Customer</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Remove Request</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Requests</h2>
    <hr style="width:200px" class="w3-opacity">
    
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Requests</li>
          <li class="w3-padding-16"> Customers profile </li>
          <li class="w3-padding-16">Locations </li>
          <li class="w3-padding-16">Timings</li>
         
   </div>
  </div> 

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> INDIA </p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +91 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: gosmart@mail.com</p>
    </div><br>
    <p>Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="index.html" target="_blank" class="w3-hover-text-green">Gosmart.com</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
