<!DOCTYPE html>

    <head>
        <title>Tom Johnson</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" type = "text/css" href= "css/style.css?v=13">
        <link rel="icon" href="images/tj.png" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    
    <body>

        <!-- header -->
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="software.php">Software</a></li>
            <li><a class="active">Certifications</a></li>
            <li><a href="cv.php">CV</a></li>
            <li class="right"><a style="color:rgb(94,144,253);">TOM JOHNSON</a></li>
        </ul> 
        
<!------------------------------------ main body ---------------------------------------->

        <div class="banner" style="background-image:url('images/uol.jpg');">
            <div class="shade_box"></div>
            
            <h1 style="z-index:3;font-size:clamp(12px, 10vw, 64px);">Qualifications</h1> <!-- clamp(min,max,preferred)  --> 
            <p style="z-index:3;color:rgb(94,144,253);margin-top:-10px;font-size:clamp(6px, 5vw, 32px);"></p>
        </div>
        
        <div class="main">

            <div class="paragraph_wrapper">
                <a>This page displays any <blue>certifications</blue> I have obtained, as well as notable <blue>academic achievements</blue>.</a>
            </div>

            
            <!---------------- Cloud ---------------------------------->
            
            <div class="container" style="height:100%;width:clamp(350px, 70vw, 800px);text-align:left;margin-top:3vw;">
                    
                <h1 style="margin-top:50px;color:rgb(94,144,253);font-size:clamp(8px, 6vw, 36px);">Cloud Technologies</h1>
                <div class="divider"></div></br></br>
                
                <!-- Tooltip: Microsoft Azure Data Fundamentals (August 2023) -->
                
                <div class="flex-container">
                    
                    <a href="https://learn.microsoft.com/api/credentials/share/en-gb/TomJohnson-0260/72A457F66C1D9DDD?sharingId=62CB9E685ABB839">
                        <div class="icon_box" style="background-image:url('images/dp900_icon.png');margin-right:2vw;"></div>
                    </a>
                    
                    <a href="https://learn.microsoft.com/api/credentials/share/en-gb/TomJohnson-0260/AF3430911E1BCE58?sharingId=62CB9E685ABB839">
                        <div class="icon_box" style="background-image:url('images/az900_icon.png');margin-right:2vw;"></div>
                    </a>
                    
                </div>
            </div>
 
            <!---------------- Other ---------------------------------->
            
            <div class="container" style="height:100%;width:clamp(350px, 70vw, 800px);text-align:left;margin-top:3vw;">
                    
                <h1 style="margin-top:50px;color:rgb(94,144,253);font-size:clamp(8px, 6vw, 36px);">Data Integration</h1>
                <div class="divider"></div></br></br>
                
                <div class="flex-container">
                    
                    <a href="https://verify.skilljar.com/c/82h6qps7853z">
                        <div class="icon_box" style="background-image:url('images/snaplogic-accreditation.png');margin-right:2vw;"></div>
                    </a>
                
                </div>
            </div>            

            <!-- <a style="font-size:clamp(7px, 6vw, 16px);" href="https://learn.microsoft.com/api/credentials/share/en-gb/TomJohnson-0260/72A457F66C1D9DDD?sharingId=62CB9E685ABB839">View Certification</a> -->
            <!-- <a style="font-size:clamp(7px, 6vw, 16px);" href="https://learn.microsoft.com/api/credentials/share/en-gb/TomJohnson-0260/AF3430911E1BCE58?sharingId=62CB9E685ABB839">View Certification</a> -->


            <!----------------- Academic ------------------------------------------>
            </br>
            <div class="container" style="height:100%;width:clamp(350px, 70vw, 800px);text-align:left;margin-top:3vw;">
                    
                <h1 style="margin-top:50px;color:rgb(94,144,253);font-size:clamp(8px, 6vw, 36px);">Academic Achievements</h1>
                
                <div class="divider"></div></br>

                <ul>
                    <li><blue>Degree of Master of Physics</blue><i> (1st Class)</i>, University of Liverpool <i>(2019-2023)</i></li></br></br>
                    <a style = "align-text:center;">Thesis: <i>'Alignment of the Upgraded VELO Detector at LHCb'<a href="/download_files/tjohnson_velo_thesis.pdf"> Download PDF</a></a>
                    <a href="/download_files/tjohnson_velo_thesis.pdf" download style="text-decoration:underline;color:blue;"></a>
                    </br></br>
                </ul>
    
                <div class="image" style="background-image:url('/images/velo.jpg');height:clamp(200px,300px,400px);width:clamp(200px,300px,400px);margin-top:15px;margin:auto;">
                </div></br></br>
                    
                <ul>
                    <li style="margin-bottom:10vh;"><blue>Oliver Lodge Prize</blue> for <i>'Best Honours Average at First Class Standard in Fourth Year Physics' (2023)</li></br>
                </ul>    
                    
                </br></br>
                
            </div>
            
        </div>
        
<!------------------------------------------ footer ----------------------------------->
        <div class="footer"> 
            <p>Copyright stuff, or something.</p> 
        </div>
    </body>
    
</html>