<!doctype html>
<html>
<head>
<title>Blancpain</title>
<meta name="viewport" content="width= device-width, initial-state=1">
<link type="text/css" rel="stylesheet" href="../assests/allcss.css"/>
<script src="../assets/css/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="../assests/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="../assests/css/bootstrap.css"/>
    
    <link rel="stylesheet" href="../assests/thumbnail-gallery.css">


<script type="text/javascript">
  var ypos,image;
function parallax(){
  ypos=window.pageYOffset;
  image=document.getElementById('image');
  image.style.top =ypos *.7+'px';
  
}
window.addEventListener('scroll',parallax);

</script>



</head>

<body  class="container-fluid" onLoad="document.body.style.opacity='1'">
<center>
<div class="navbar navbar-default navbar-fixed-top ">
<ul>

<li><a href="watches" >HOme</a></li>
<li><a href="contactus">contact us</a></li>
<li><a href="Aboutus">about us</a></li>
<li><?php echo "<a href='".base_url()."Branded_Watches/logout'>Logout</a>"; ?></li>
</ul>
</div>
</center>
  <img id="image" src="../assests/images/chopard/Chopard-LUC-1963-chronometer.jpg" />
  </div>

  <div id="content">
  <center>
  <nav class="navbar navbar-default nav-justified">
<ul class="nav navbar-nav " >
  <li><a href="blancpain" >blancpain</a></li>
  <li><a href="chopard" >chopard</a></li>
  <li><a href="Taghueuer" >Tag hueuer</a></li>
  <li><a href="Zenith" >Zenith</a></li>
  <li><a href="Jaeger" >Jaeger-LeCoultre</a></li>
  <li><a href="omega" >omega</a></li>
  <li><a href="rolex" >rolex</a></li>
  <li><a href="vacheron" >Vacheron Constantin </a></li>
  <li><a href="rado" >rado</a></li>
</ul>
  </nav>
  </center>
  <div>

 <div class="container gallery-container">

    <h1>Blancpain watches</h1>
    <div class="tz-gallery">
             
        <div class="row">
          <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="#">
                        <img src="../assests/images/blackchain/Blancpain-Watches-in-BurJuman-Centre-Dubai-1.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="#">
                        <img src="../assests/images/blackchain/1200px-Blancpain_MG_2605.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="#">
                        <img src="../assests/images/blackchain/Blancpain-1.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="#">
                        <img src="../assests/images/blackchain/original.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

           
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
