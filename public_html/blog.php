<!DOCTYPE html>

    <head>
        <title>Tom Johnson</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" type = "text/css" href= "css/style.css?v=10">
        <link rel="icon" href="images/tj.png" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    
    <body>

        <!-- header -->
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a class="active">Blog</a></li>
            <li><a href="software.php">Software</a></li>
            <li><a href="qualifications.php">Qualifications</a></li>
            <li><a href="cv.php">CV</a></li>
            <li class="right"><a style="color:rgb(94,144,253);">TOM JOHNSON</a></li>
        </ul> 
        
<!------------------------------------ main body ---------------------------------------->

        <div class="banner" style="background-image:url('images/blog-background.png');">
            <div class="shade_box"></div>
            
            <h1 style="z-index:3;font-size:clamp(12px, 10vw, 64px);">Blog</h1> <!-- clamp(min,max,preferred)  --> 
            <p style="z-index:3;color:rgb(94,144,253);margin-top:-10px;font-size:clamp(6px, 5vw, 32px);"></p>
        </div>
        
        
        <div class="main">
            
            
            <!----------------- article 1 --------------------------------->
            
            <div class="list_wrapper">
                <a href="blog_articles/price-paid.php" style="text-decoration:none">
                    <h1 style="margin-top:50px;color:rgb(94,144,253);font-size:clamp(8px, 6vw, 36px);">Clustering England & Wales House Prices Using MADlib</h1>
                </a>
                <div class="divider"></div></br>
                <i>VLDB Solutions, September 2022</i></br></br>
                <ul>
                    <a href="blog_articles/price-paid.php" style="text-decoration:none;color:white;">
                        <li>An example of how to use <blue>Apache MADlib</blue>, an open-source library for in-database analytics, to perform <blue>k-means clustering</blue> on a UK government dataset.</li>
                    </a>
                </ul>
            </div>
           
             <a href="blog_articles/price-paid.php">
                <div class="image" style="background-image:url('/images/house-price.png');height:clamp(200px,300px,400px);width:clamp(200px,300px,400px);margin-top:15px;">
                </div>
            </a>
            </br></br>
 
            <!----------------- article 2 --------------------------------->
            
            <div class="list_wrapper" style="margin-top:2.5%;margin-bottom:5%;">
                <h1 style="margin-top:50px;color:rgb(94,144,253);font-size:clamp(8px, 6vw, 36px);">Coming soon...</h1>
                <div class="divider"></div></br>
                <ul>
                    <li>More content is on the way. Check back soon! <div style="color:rgb(13,20,28);">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div></li>
                </ul>
            </div>
            </br></br>

        </div>
        
<!------------------------------------------ footer ----------------------------------->
        <div class="footer"> 
            </br></br>
            <div class="container" style="max-width:80%;">
                <p style="text-align:center;">
                Any content produced as part of an employment has been displayed with permission of the employer.</br></br>
                Copyright 2024.
                </p> 
            </div>
        </div>
    </body>
    
</html>