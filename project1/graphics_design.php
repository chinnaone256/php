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
 <?php include('includes/chat_script.php'); ?>

<!--<script src="scripts/jquery.simpleFAQ-0.7.min.js"></script>  
<script src="scripts/jquery.faq.js"></script>  -->
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
<script>
	//$('.services_option4').css('display','');
	//$('.services_option4').removeStyle('display');
//	$(document).ready(function(){
		$(document).ready(function(){
    $(".services_option4").removeAttr('style');
});

//		$(document).ready(function(){
//    $(".why_choose_explore").removeAttr('style');
//});
//
//		$(document).ready(function(){
//    $(".pricing_option pricing_option3").removeAttr('style');
//});

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
<!--  include('includes/services_sidebar.php'); 
   /sidebar -->
  
 <!--  portfolio_sidebar -->
 <!-- <div class="portfolio_sidebar portfolio_sidebar_right">-->
    <!-- Vertical Tabs -->
  <div class="services_option2 vertical_tabs">
	<div id="tabs">
     <ul class="tab_select">
      <li><a href="#tab-1">Graphic Design</a></li>
      <li><a href="#tab-2">Web Design & Development</a></li>
      <li><a href="#tab-3">SEO & SEM</a></li>
      <li><a href="#tab-4">Apps Development</a></li>
      <li><a href="#tab-5">2D & 3D Animation</a></li>
     </ul>
     <div id="tab-1">

  <div class="services_option4" style="display:block !important;">
<!--   <h4>Graphic Design</h4>-->
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
    <li class="support"><span class="circle2"></span>
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
     <div id="tab-2">
        <!-- services option4 -->
  <div class="services_option4">

   <ul>
<ul>

    <li class="flexible"><span class="circle"></span>
    <span class="circle3"></span>
     <a href="#" class="circle_link">&nbsp;</a>
     <img width="100" height="105" alt="" src="images/img.png">
     <h4>Website Design</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Your web presence might be your first opportunity to impress a potential new customer, an opportunity to convince someone who's ready to buy or an opportunity to simply set your stall out as thought leaders. In most cases your website is all of the above and more, and our business driven approach to web design and development will make sure your website ticks all these boxes along with ensuring your key information is available to your customers when they need it no matter what kind of device they're using.</p>
    </li>
    <li class="design"><span class="circle"></span>
    <span class="circle3"></span>
     <a href="#" class="circle_link">&nbsp;</a>
     <img width="100" height="105" alt="" src="images/img.png">
     <h4>Website Development</h4>
     <p><span>Subhead Goes HEre</span></p>
<p style="padding-bottom: 39px;">Our Websites are unique and eye-catching, designed by using latest web designing tools like Web 2.0, which empowers our customer to represent themselves online confidently in the global arena. <strong>AALPINE IT SERVICES</strong> focuses on all the aspects of managing a web project involving the development life cycle. Our web development services are implemented taking into consideration Search Engine positioning and placements. </p>
    </li>
    <li class="fonts" style="float:left"><span class="circle"></span>
    <span class="circle3"></span>
     <a href="#" class="circle_link">&nbsp;</a>
     <img width="100" height="105" alt="" src="images/img.png">
     <h4>Content Management System</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>We at <strong>AALPINE IT SERVICES</strong> have created a variety of content management system. A content management system is a type of website in which the administrator can publish, edit, modify, delete content as well as take care of the maintenance from a central page. Such type of content management system provides procedures to manage work flow.</p>
    </li>
    <li class="support" ><span class="circle"></span>
    <span class="circle3"></span>
     <a href="#" class="circle_link">&nbsp;</a>
     <img width="100" height="105" alt="" src="images/img.png">
     <h4>E-commerce</h4>
     <p><span>Subhead Goes HEre</span></p>
     <p>Develops well-designed, reliable and engaging ecommerce websites of all sizes that ensure your ecommerce digital business goes from strength to strength. In addition to the ecommerce website development we also provide ecommerce maintenance and support and performance digital marketing services such as search engine optimization, paid search (PPC) and social media and email marketing.</p>
    </li>

   </ul>

   </ul>
  </div>
  <!-- /services option4 -->
     </div>
     
     <div id="tab-3">
     <div class="why_choose_explore">
   <h4>Choose Our Search Based Services</h4>
  <!-- why choose -->
  <div style=" width: 935px;" class="why_choose">
	<p style="margin:10px 0 30px 0; line-height:30px;"><span class="hd_se"><strong>SEO :</strong></span> We provide best Search engine optimization (SEO) Solutions, affecting the visibility of a website or a web page in a search engine's "paid" and un-paid search results. In general more frequently a site appears in the search results list, the more visitors it will receive from the search engine's users.  </p>
	<p style="margin:10px 0 30px 0; line-height:30px;"><span class="hd_se"><strong>SMM :</strong></span> Are you looking for gaining website traffic or attention through social media sites..? Don't Worry. We are here to provide you the best Search Media Marketting (SMM) Solutions by using a relatively inexpensive platform for organizations to implement marketing campaigns. Few of our approch involves Social networking websites, blogs, Twitter, Facebook, Google+, LinkedIn, etc.</p>
 <!--   <ul>
	<li>We have a creative workshop capable of handling requests and providing services right from Website designing until Brochure development.</li>
<li>Our metrics doesn't allow half measures, you have the complete freedom to include variations within the project.</li>
<li>Stepping into this competitive world, we ensure to provide transparency for our clients within the process of development until deployment.</li>
<li>Final delivery will be a mix of Qualitative and Quantitative measures.</li>
<li>We have succeeded by providing value-add 's into the current requirement at every phase.</li>
<li>Every proposed solution will run through a series of defined protocols for ensuring smooth work flow and better understanding of the requirements.</li>
<li>We excel with our customer's value and 100% quality control audit of all deliverables. Website designing in our experience is a concoction of creative skills and technical expertise &ndash;both are equally important and requires a proper blend.</li>
   </ul>-->
  </div>
  <!-- /why choose -->
  <!-- features_explore -->
  <!--<div class="features_explore">
   <ul>
    <li>
     <div class="bwWrapper"><a href="#"><img src="images/about_us/why_choose_us_1.png" width="94" height="65" alt="" /></a></div>
     <p>Fugiat dapibus, tellus cursus commodo, tortoeir in mauristes conds ime ntum nibh, ut fermentum massats justo sitis amet risus. Crast matisers consectetut ameter fermes ntum unsers maecenas sadips ipsumores un  ...<a href="#" class="read_more">read more</a></p>
    </li>
    <li>
     <div class="bwWrapper"><a href="#"><img src="images/about_us/why_choose_us_2.png" width="94" height="65" alt="" /></a></div>
     <p>Fugiat dapibus, tellus cursus commodo, tortoeir in mauristes conds ime ntum nibh, ut fermentum massats justo sitis amet risus. Crast matisers consectetut ameter fermes ntum unsers maecenas sadips ipsumores un  ...<a href="#" class="read_more">read more</a></p>
    </li>
   </ul>
  </div>-->
  <!-- /features_explore -->
  </div>
<div class="pricing_option pricing_option3">
   <h4 class="bord">Our Promising Pricing</h4>
   <ul>
    <li>
     <h4>Standard Package</h4>
     <div class="price"><strong>₹ &nbsp;&nbsp;</strong><span>999</span><sup>99</sup><em>monthly</em></div>
     <p>5 Keywords</p>
     <p>Updated Monthly</p>
     <p>W3 School HTML Validation(NA)</p>
     <p>W3 School CSS Validation(NA)</p>
     <p>Optimized Loading Time</p>
		 <p>Support ( NA )</p>
     <p>&nbsp;</p>
     <p><a href="#" class="btn_m">Get It</a></p>
    </li>
    <li class="active">
    <div class="active_bg">
     <h4>Professional Package</h4>
     <div class="price"><strong>₹ &nbsp;&nbsp;</strong><span>3999</span><sup>99</sup><em>monthly</em></div>
     <p>25 Keywords</p>
		 <p>Updated Weekly</p>
     <p>W3 School HTML Validation</p>
     <p>W3 School CSS Validation</p>
     <p>Optimized Loading Time</p>
		 <p>Support ( Working Hours )</p>
     <p>&nbsp;</p>
     <p><a href="#" class="btn_m">Get It</a></p>
    </div>
    </li>
    <li>
     <h4>Extreme Package</h4>
     <div class="price"><strong>₹ &nbsp;&nbsp;</strong><span>39999</span><sup>99</sup><em>monthly</em></div>
     <p>500+ Keywords</p>
    <p>Updated Daily</p>
     <p>W3 School HTML Validation</p>
     <p>W3 School CSS Validation</p>
     <p>Optimized Loading Time</p>
		 <p>24/7 Support</p>
     <p>&nbsp;</p>
     <p><a href="#" class="btn_m">Get It</a></p>
    </li>
   </ul>
  </div>
     </div>
     <div id="tab-4">
      <p>Lid est laborum et dolorum fugaerts. Etras harum quidem rerum facilis est etras expedita disnictio. Namsirs  libero uns tempo re, cum soluta nobis est eligendi optio cumque nihil ims duod amets untra dolor amet sad ipet. Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermes ntum mas justo sitts amet risus. Cras mattis cosi sectetut amet fermens tum aecer nas faucib  Sed ut perspiciatis unde omnis iste tus error siters voluptatem accusantium dolorem que laudantium, totam remteripaperiam, eaque ipsa quae  illos inventore veritatis etra quasi arch itecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volu ptat equia</p>
     </div>
     <div id="tab-5">
      <p>Lid est laborum et dolorum fugaerts. Etras harum quidem rerum facilis est etras expedita disnictio. Namsirs  libero uns tempo re, cum soluta nobis est eligendi optio cumque nihil ims duod amets untra dolor amet sad ipet. Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermes ntum mas justo sitts amet risus. Cras mattis cosi sectetut amet fermens tum aecer nas faucib  Sed ut perspiciatis unde omnis iste tus error siters voluptatem accusantium dolorem que laudantium, totam remteripaperiam, eaque ipsa quae  illos inventore veritatis etra quasi arch itecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volu ptat equia</p>
     </div>
    </div>
  </div>
  <!-- /Vertical Tabs -->
<!--  </div>-->
  
 </div>
</div>

<!-- footer -->
 <?php include('includes/footer.php'); ?>
<!-- /footer -->

</body>
</html> 
