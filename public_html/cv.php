<!DOCTYPE html>

    <head>
        <title>Tom Johnson</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" type = "text/css" href= "css/style.css?v=8">
        <link rel="icon" href="images/tj.png" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    
    <body>

        <!-- header -->
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="software.php">Software</a></li>
            <li><a href="qualifications.php">Qualifications</a></li>
            <li><a class="active">CV</a></li>
            <li class="right"><a style="color:rgb(94,144,253);">TOM JOHNSON</a></li>
        </ul> 
        
<!------------------------------------ main body ---------------------------------------->

        <div class="main" style="height:120%;width:100%;">

            <a style="margin-top:140px;">Please <blue>swipe/scroll sideways</blue> to turn pages. 
            <a href="/download_files/tjohnson_cv.pdf" download style="text-decoration:underline;color:blue;">Download CV</a>
            <div id="adobe-dc-view" style="height:70%;width:90%;margin-top:20px;margin-bottom:50px;"></div>
            <script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
            <script type="text/javascript">
            	document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
	            	var adobeDCView = new AdobeDC.View({clientId: "d95909688884479981f7d7b32d8ffef9", divId: "adobe-dc-view"});
	            	adobeDCView.previewFile({
		            	content:{location: {url: "/download_files/tjohnson_cv.pdf"}},
		            	metaData:{fileName: "Bodea Brochure.pdf"}
		            }, {embedMode: "SIZED_CONTAINER"});
	            });
            </script>
            
        </div>
        
<!------------------------------------------ footer ----------------------------------->
        <div class="footer"> 
            <p>Copyright stuff, or something.</p> 
        </div>
    </body>
    
</html>