<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Graphic Design</title>
<link rel="icon" type="image/png" href="images/favicon.ico" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<!--[if lt IE 9]>
<script src="scripts/ie9.js">IE7_PNG_SUFFIX=".png";</script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylesheets/style.css"> 
<link rel="stylesheet" href="stylesheets/responsive.css"> 
<script src="scripts/jquery.min.js"></script> 
<script src="scripts/jquery.blackandwhite.min.js"></script>
<script src="scripts/js_func.js"></script>
<script>
$(function(){
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
});
</script>
</head>
<body>
<div class="wraper">
 <?php include('includes/header.php'); ?>
</div> 

<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>Graphic Design<span>We can handle anythign you need.  Check out our services below!</span></h2>
   <ul>
    <li><a href="#">Home</a></li>
    <li>Graphic Design</li>
   </ul>
  </div>
 </div>
 <!-- /top_title -->
<div class="wraper">
  <!-- sidebar -->
 <?php include('includes/services_sidebar.php'); ?>
  <!-- /sidebar -->
  <!-- portfolio_sidebar -->
  <div class="portfolio_sidebar portfolio_sidebar_right">
  <div class="services_option4">
   <h4>Graphic Design</h4>
    <ul>
    <li class="design"><span class="circle2"></span>
     <a href="#" class="circle_link">&nbsp;</a>
     <img width="100" height="105" alt="" src="images/img.png">
     <h4>Logo Design</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Logo design is all around us. To the general public, logos serve as an instant reminder of a company or a product; to the client they're the point of recognition on which their branding hangs; and to us designers they represent the challenge of incorporating our clients' ideologies into one single graphic.</p>
    </li>

    <li class="fonts"><span class="circle2"></span>
     <a href="#" class="circle_link">&nbsp;</a>
     <img width="100" height="105" alt="" src="images/img.png">
     <h4>Brochure/Flyer, Booklets</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Informative brochures are a great way to educate your customers about your specific products or services. By presenting lots of useful information, your customers will feel more confident and empowered to make the right choice, increasing sales.</p>
    </li>
    <li class="support" style="float: left;"><span class="circle2"></span>
     <a class="circle_link" href="#">&nbsp;</a>
     <img width="100" height="105" src="images/img.png" alt="">
     <h4>Banners</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Search engine optimization is a process to establish your web-site's visibility on popular search engines like Google, Yahoo or Bing and also to improve quality traffic using organic results. The main reason to apply search engine optimization techniques is to increase your web site's traffic by obtaining higher rankings in search engines for keyword searches related to your web site.</p>
    </li>
    <li class="flexible"><span class="circle2"></span>
     <a class="circle_link" href="#">&nbsp;</a>
     <img width="100" height="105" src="images/img.png" alt="">
     <h4>Business Cards & Letterhead</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>E-commerce has become the trend of the new business era. It gives effective solutions to many businesses. E-commerce has made life more easy and comfortable. In a survey it was found that major people opt to prefer online payment rather than waiting in long queues.</p>
    </li>
<!--    <li class="easy">
     <a class="circle_link" href="#">&nbsp;</a>
     <img src="images/img.png" width="100" height="105" alt="" />
     <h4>Easy To Customize</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Lid est laborum dolores un rums fugats untras. Etraste sitsharums ciatis unde omnis iste natus error sit un voluptates sit accusantium doloremque sits laudantium, totam ister rem aperiam, eaque ipsa quae ab illo inventore sitses veritatis etras quasi architecto beatae vitaese dictareas sunt explicabo. Nemo enim ipsam volu.</p>
    </li>
    <li class="color">
     <a class="circle_link" href="#">&nbsp;</a>
     <img src="images/img.png" width="100" height="105" alt="" />
     <h4>Choose Your Color</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Lid est laborum dolores un rums fugats untras. Etraste sitsharums ciatis unde omnis iste natus error sit un voluptates sit accusantium doloremque sits laudantium, totam ister rem aperiam, eaque ipsa quae ab illo inventore sitses veritatis etras quasi architecto beatae vitaese dictareas sunt explicabo. Nemo enim ipsam volu.</p>
    </li>-->
   </ul>
  </div>
  <!-- /services option4 -->
  </div>
  
 </div>
</div>

<!-- footer -->
 <?php include('includes/footer.php'); ?>
<!-- /footer -->
</body>
</html> 
