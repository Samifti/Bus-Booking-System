<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Travel</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/style.css">
	   <link rel="preconnect" href="https://fonts.googleapis.com">
	   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald&display=swap" rel="stylesheet">
      <script src="script.js"></script>
   </head>
   <body>
      <?php 
         $activeSection = 'about';
         include 'header.php';
      ?>   

      <?php 
			$bannerImgClass = 'banner-image-about';
         $title = 'About Me';
         $isShowBtn = false;
         include 'banner.php';
      ?>
    
      <div class="container about-background-image">
         <h1>About Me</h1>
         <hr>
         <div class="container">
            <div class="row">
               <div class="column">
                  <p id="anim">I was born and brought up in UAE. it’s the sort of place with sandy soil you can’t forget. I am current studyinf CS at swinburne.  Regards,<br>
                     Osama Iftikhar
                  </p>
               </div>
               <div class="column">
                  <img class="myPic2" alt="myPic" src="img/me.jpeg" >
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="footer-conatiner">
            <p>© Your Name | Last updated: date</p>
         </div>
      </footer>
   </body>
</html>
</body>
</html>