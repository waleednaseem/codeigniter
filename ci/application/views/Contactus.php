
  <!doctype html>
<html>
<head>
<title>watches</title>
<meta charset="utf-8">
<meta name="viewport" content="width= device-width, initial-state=1">
<link type="text/css" rel="stylesheet" href="../assests/allcss.css"/>
<script src="../assets/css/js/bootstrap.js"></script>
<link type="text/css" rel="stylesheet" href="../assests/css/bootstrap.css"/>


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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Brand</a>
    </div>
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <center>
      <ul class="nav navbar-nav">
        <li><a href="watches">Home</a></li>
        <li class="active"><a href="contactus">Contact us</a></li>
        <li ><a href="Aboutus">about</a></li>
        
          </ul>
        
      </center>
      
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo "<a href='".base_url()."Branded_Watches/logout'>Logout</a>"; ?></li>
      </ul>
    </div>
  </div>
</nav>
  <img id="image" src="../assests/images/backgroundd/aboutus.jpg" />
  </div>

  
  
  <p class="someElement">this is my text this is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthismy textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis ismy textthiex textths is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis is my textthis ismy textthiex textths is my textthis is my textthis is my my textthis is my textthis is my text ismy textthiex </p>
  
  
</p>
  <div class="divfooter">
  <div class="div1">
  <ol>
  <li>this is my footer 1</li>
  <li>this is my footer 2</li>
  <li>this is my footer 3</li>
  <li>this is my footer 4</li>
  </ol>
  </div>
  </div>
  

</body>
</html>