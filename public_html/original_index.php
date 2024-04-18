<!DOCTYPE html>


<head>

<!--***************************footer style********************************-->
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333;
   color: white;
   text-align: center;
   font-family: verdana;
   font-size: 12px;
   padding: 4px;
}
</style>

<!--***********************************************************************--> 


<title>Tom Johnson</title>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- style link-->
<!-- loads in css stylesheet -->
<link rel= "stylesheet" type = "text/css" href= "css/original_style.css">

 
<!-- Using Jquery-->
<script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!-- **************************************js functions ***************** -->

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
     
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


// $(document).ready(function(){
//     $().ready(function(){
//         $("#welcome_fade").fadeIn(2000);
        
//     });
// });
</script>

<!--***************************************************************** -->

</head>
<body>

<ul class="topnav">
    
  <li><a class="active">Home</a></li>
  <li><a href="page2.php">Page 2</a></li>
  <li><a href="page3.php">Page 3</a></li>
  <li><a href="page4.php">Page 4</a></li>
  
</ul> 


<!-- *************************parallax************************** -->


    
    
    
<!--<div id="parallax1">-->
<!--<div style="height:1000px;background: url(https://healthystadia.eu/wp-content/uploads/2020/01/Everton-Background-1.png) no-repeat center center fixed;-->
<!--    background-size: cover;                      -->
<!--    background-repeat: no-repeat;-->
<!--    background-position: center center;font-size:21px;font-family:verdana;color:white;margin-top:15%;"> <!-- margin-top was 20% -->-->

<!--</div>-->



<!--***************************parallax section 2*********************-->

<div id ="parallax1">
<div style="height:1800px;font-size:20px;font-family:verdana;color:white;margin-top:-10%;background: url(https://recwebs.com/wp-content/uploads/2017/05/socialmedia_background.jpg) no-repeat center center fixed;
    background-size: cover;                      
    background-repeat: no-repeat;
    background-position: center center;">   
    
    <div id = "section" style="height:100%;width:50%;background-color:#333;">
    Section
    </div>
</div>
</div>

<!--**************parallax section 3***********************************************-->




<!--***************************************************************************-->

<div class="footer">
  <p>tjohnson@vldbsolutions.com</p>
</div>

</body>
</html>
