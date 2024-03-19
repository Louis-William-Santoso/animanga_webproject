<!DOCTYPE html>
    <head>
        <title>KONTAK 7</title>
		<meta charset=”UTF-8″>

        <!-- link -->
        <link rel="stylesheet" href="style/new hompage style.css">
    	<script src="aksara jawa.js"></script>
    	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    	<link rel="shortcut icon" href="Random img/kntkt7.jpg"  type="image/x-icon">
    	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
      <?php include "../admin_pages/database.php";?>
    </head>

    <body>

		<!--spry menu bar-->
    <ul id="MenuBar1" class="MenuBarHorizontal" >
          <li><a href="new homepage.php">HOME</a>          </li>
          <li><a href="#nama_klm">about us</a></li>
          <li><a class="MenuBarItemSubmenu" href="#nama_klm">contact</a>
          <li><a href="#more_inform">product</a>
            <ul>
              <li><a class="MenuBarItemSubmenu" href="all product.php #voca">Vocaloid</a>
              <li><a class="MenuBarItemSubmenu" href="all product.php #band">Virtual Instrument</a>
            </ul>
          </li>
          <li><a href="../layout/login.php">login/signin</a></li>
    </ul>
    <!--<div class="navbar">
            <a href="new homepage.php">Home</a>
            <a href="all product.php">Our Product</a>
          	<a href="#more_inform">Contact</a>
           	<a href="#nama_klm">About Us</a>
            <img src="Random img/ezgif.com-gif-maker.gif" name="bonk" width="50" id="bonk">
    </div>-->
   
   
   <!-- <div class="navbar">
  <a href="new homepage.php">Home</a>
  <div class="subnav">
    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#nama_klm">Company</a>
      <a href="#nama_klm">Team</a>
      <a href="#nama_klm">Careers</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="all product.php/ #voca">Vovaloid</a>
      <a href="all product.php/ #band">Virtual Instrument</a>
    </div>
  </div> 
  <a href="#more_inform">Contact</a>
</div>-->

    <!--slideshow-->
        <div class="mySlides">
    <img src="images/bner3.png" style="width:100%">
      <h1>Hi!,</h1>
      <h2>Welcome to KONTAK7</h2> 
    </div>

  <div class="mySlides">
    <img src="images/baner web 1(3).png" style="width:100%">
    <h2>A NEW CHAPTER</h2>
  </div>
  
  <div class="mySlides">
    <img src="images/bner2.png" style="width:100%">
    <h2>LOOKS GOOD, SOUNDS EVEN BETTER</h2>  
    </div>

    <div class="mySlides">
    <img src="proyek miku TIT/vocaloid/miku_banner.jpg" style="width:100%">
    <h2></h2>  
    </div>
    
    <div class="mySlides">
    <img src="images/miku_banner2.jpg" style="width:100%">
    <h2>LOOKS GOOD, SOUNDS EVEN BETTER</h2>  
    </div>
    <br>

	<!--produk-->
   <div id="produk" class="produk">
   <h1>Our Product</h1>
    	<h2> Let's come and see our product </h2>
    
    <center>
    <table>
	<tr>
    <td width="49%" height="442" align="center"><a href="voca.php"><img src="images/ame sing.gif" alt="" width="448" height="355" /></a>
     <h3> Vocaloid </h3>
    <button id="vocaloid" ><a href="all product.php #voca">Click Me!</a></button>
    </a>
    </td>
	<td width="49%" align="center"><a href=""><img src="images/ame uke.gif" alt="" width="384" height="355" /></a>
	  <h3>Virtual Instrument</h3>
    <button id="band"><a href="all product.php #band">Click Me!</a></button></td>
</tr>
    </table>
    </center>
    </div>


        <!-- nama kelompok -->
    <div id="nama_klm">
          <h2>About Us</h2>
          <table width="100%">
              <td><li> Samuel </li>
                <li> Vincent </li>
                <li> Louis </li>
                <li> Abhinaya </li>
                <li> Mefamati </li></td>
                </table>
    </div>
    <div id="more_inform">
      <center><h2> Our Location </h2></center>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101627.01158715632!2d-115.9599014144692!3d37.25140592615485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80b81baaba3e8c81%3A0x970427e38e6237ae!2sArea%2051%2C%20NV%2C%20USA!5e0!3m2!1sen!2sid!4v1700786154052!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <center><p>Tulungagung </p>             
        <p>Phone: 0881026601151</p>
        <p>me: 0881026601151</p>
        <p>Email: stevkakak@gmail.com</p>
        </i></center>
        </div>

    <script type="text/javascript">
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("slideshow") == -1) {
    x.className += " slideshow";
  } else { 
    x.className = x.className.replace(" slideshow", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});


// js popup
  alert ("Tolol :3")
    </script>
    </body>
</html>
