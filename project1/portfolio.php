<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Portfolio</title>
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
<link rel="stylesheet" href="stylesheets/prettyPhoto.css">
<script src="scripts/jquery.min.js"></script> 
<script src="scripts/jquery.isotope.js"></script>
<script src="scripts/jquery.prettyPhoto.js"></script>
<script src="scripts/jquery.blackandwhite.min.js"></script>
<script src="scripts/js_func.js"></script>
 <?php include('includes/chat_script.php'); ?>
<script>
$(function(){
		var container = $('.short_text_layout');
		container.isotope({
			itemSelector: 'li',
			filter: '*',
		  animationEngine: 'jquery',
			animationOptions: {
				duration: 500,
				easing: 'linear',
				queue: false,
			}
		});
		$(".filter li a").click(function() {
			$('.filter li').removeClass("active");
			$(this).parent().addClass("active");
			var selector = $(this).attr('data-filter');
			container.isotope({
			    filter: selector,
			    animationEngine: 'jquery',
			    animationOptions: {
			        duration: 500,
			        easing: 'linear',
			        queue: false,
			    }
			});
			return false;
		});
	$(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_rounded'});
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
})
</script>
</head>
<body>
<div class="wraper">
 <?php include('includes/header.php');?>
</div> 

<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>Our Work <span>This is our favorite part of the site, our showcase!</span></h2>
   <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Portfolio</a></li>
<!--    <li><a href="#">Short Text Layout</a></li>
    <li>Three Column Filtered</li>-->
   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <div class="faq_list">
   <ul class="filter">
    <li class="all active"><a href="#" onclick="return(false)" data-filter=".all">All</a></li>
    <li class="print"><a href="#" onclick="return(false)" data-filter=".print">Graphic Design</a></li>
    <li class="web-design"><a href="#" onclick="return(false)" data-filter=".web-design">Web Design & Development</a></li>
<!--    <li class="videography"><a href="#" onclick="return(false)" data-filter=".videography">Videography</a></li>-->
   </ul>
  </div>
  <!-- Short Text Layout 3 Column -->
  <div class="short_text_layout short_text_col_3 gallery filter_wrap">
   <ul>
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_38.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_01.png" width="279" height="170" alt="" /></a><p><strong>EMMAR Industries</strong><span>Flash Animation, Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_30.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_02.png" width="279" height="170" alt="" /></a><p><strong>G-sports</strong><span>Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_34.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_03.png" width="279" height="170" alt="" /></a><p><strong>Template</strong><span>Web Design</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_35.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_04.png" width="279" height="170" alt="" /></a><p><strong>Template</strong><span>Graphic Design, Web Design, Branding</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_41.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_05.png" width="279" height="170" alt="" /></a><p><strong>Raj Industries</strong><span>Branding, Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_31.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_06.png" width="279" height="170" alt="" /></a><p><strong>Template</strong><span>Web Design</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_39.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_07.png" width="279" height="170" alt="" /></a><p><strong>TRANSITION</strong><span>Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_33.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_08.png" width="279" height="170" alt="" /></a><p><strong>Aswatha Lakshmi Jewellers</strong><span>Web Design</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_32.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_09.png" width="279" height="170" alt="" /></a><p><strong>ArtStork</strong><span>Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_10.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_10.png" width="279" height="170" alt="" /></a><p><strong>Bipin Properties & Developers</strong><span>Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_36.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_11.png" width="279" height="170" alt="" /></a><p><strong>Biriyani Bowl</strong><span>Web Design & Development</span></p></div></li>
    
    
    <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/portfolio_37.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_12.png" width="279" height="170" alt="" /></a><p><strong>Dark lotus Tattoos</strong><span>Flash Animation, Web Design & Development</span></p></div></li>
    
        
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_45.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_16.png" width="279" height="170" alt="" /></a><p><strong>Brochure Design</strong><span>Graphic Design, Print Design</span></p></div></li>
            
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_48.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_17.png" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design, Print Design</span></p></div></li>
        
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_42.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_18.png" width="279" height="170" alt="" /></a><p><strong>HandOuts</strong><span>Graphic Design, Print Design</span></p></div></li>
        
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_43.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_19.png" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design, Print Design</span></p></div></li>
        
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_46.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_20.png" width="279" height="170" alt="" /></a><p><strong>Brochure Design</strong><span>Graphic Design</span></p></div></li>
        
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_47.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_21.png" width="279" height="170" alt="" /></a><p><strong>Brochure Design</strong><span>Graphic Design</span></p></div></li>
        
<!--        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_47.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_22.png" width="279" height="170" alt="" /></a><p><strong>Featured Project Title</strong><span>Graphic Design, Web Design, Branding</span></p></div></li>-->
                
		<li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_44.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_23.png" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design</span></p></div></li>  
        
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_49.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_24.png" width="279" height="170" alt="" /></a><p><strong>Logo Design</strong><span>Branding</span></p></div></li>
       
                    
		<li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_53.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_25.png" width="279" height="170" alt="" /></a><p><strong>Brochure Design</strong><span>Graphic Design, Print Design</span></p></div></li>  
        
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_54.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_26.png" width="279" height="170" alt="" /></a><p><strong>Mobile Van Advertising</strong><span>Graphic Design, Print Design</span></p></div></li>
               
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_55.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_27.png" width="279" height="170" alt="" /></a><p><strong>Mobile Van Advertising</strong><span>Graphic Design, Print Design</span></p></div></li>
                      
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_51.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_28.png" width="279" height="170" alt="" /></a><p><strong>ID Card/Visitors Pass Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_52.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_29.png" width="279" height="170" alt="" /></a><p><strong>Brochure Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_57.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_15.png" width="279" height="170" alt="" /></a><p><strong>Certification Design</strong><span>Graphic Design, Print Design</span></p></div></li>                           
                
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_56.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_58.png" width="279" height="170" alt="" /></a><p><strong>Poster Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/portfolio_50.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/portfolio_59.png" width="279" height="170" alt="" /></a><p><strong>Poster Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
       
          <!-- updated logo on 10-07-2014-->
          <!--Banner Designs-->
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/litle kids.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/litle kids.jpg" width="279" height="170" alt="" /></a><p><strong>Banner Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/little kids 1.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/little kids 1.jpg" width="279" height="170" alt="" /></a><p><strong>Banner Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/little kids 2.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/little kids 2.jpg" width="279" height="170" alt="" /></a><p><strong>Banner Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/shree sai.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/shree sai.jpg" width="279" height="170" alt="" /></a><p><strong>Banner Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/sri sai 1.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/sri sai 1.jpg" width="279" height="170" alt="" /></a><p><strong>Banner Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/vasavi club.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/vasavi club.jpg" width="279" height="170" alt="" /></a><p><strong>Banner Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
          <!--Book Designs-->
        <li class="all print"><div class="bwWrapper"><a href="images/portfolio/casions dairy progress report.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/casions dairy progress report.jpg" width="279" height="170" alt="" /></a><p><strong>Book Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
        
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/casions dairy work book.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/casions dairy work book.jpg" width="279" height="170" alt="" /></a><p><strong>Book Design</strong><span>Graphic Design, Print Design</span></p></div></li> 
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/casions dairy.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/casions dairy.jpg" width="279" height="170" alt="" /></a><p><strong>Book Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/zoey report.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/zoey report.jpg" width="279" height="170" alt="" /></a><p><strong>Book Design</strong><span>Graphic Design, Print Design</span></p></div></li>
          
          <!--Broucher Designs-->
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/ebba.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/ebba.jpg" width="279" height="170" alt="" /></a><p><strong>Broucher Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/zoey.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/zoey.jpg" width="279" height="170" alt="" /></a><p><strong>Broucher Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
        <!--Flyer Designs-->
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/agratha.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/agratha.jpg" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/agratha2.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/agratha2.jpg" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/little kids.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/little kids.jpg" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/sai system.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/sai system.jpg" width="279" height="170" alt="" /></a><p><strong>Flyer Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <!--Visiting Card-->
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/agrathavc.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/agrathavc.jpg" width="279" height="170" alt="" /></a><p><strong>Visiting Card Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/casanionos.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/casanionos.jpg" width="279" height="170" alt="" /></a><p><strong>Visiting Card Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/sri sai.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/sri sai.jpg" width="279" height="170" alt="" /></a><p><strong>Visiting Card Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <li class="all print"><div class="bwWrapper"><a href="images/portfolio/zoeyvc.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/zoeyvc.jpg" width="279" height="170" alt="" /></a><p><strong>Visiting Card Design</strong><span>Graphic Design, Print Design</span></p></div></li>
       
       <!--Web design and development-->
      <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/srisaibadminton.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/srisaibadminton.png" width="279" height="170" alt="" /></a><p><strong>Sri Sai Badminton Academy</strong><span>Web Design & Development</span></p></div></li>
      
      <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/zoeyweb.jpg" rel="prettyPhoto[gallery2]"><img src="images/portfolio/zoeyweb.jpg" width="279" height="170" alt="" /></a><p><strong>Zoey Systems & Solutions </strong><span>Web Design & Development</span></p></div></li>
      
      <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/protospaceweb.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/protospaceweb.png" width="279" height="170" alt="" /></a><p><strong>Protospace</strong><span>Web Design & Development</span></p></div></li>
      
      <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/kaverifoodsweb.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/kaverifoodsweb.png" width="279" height="170" alt="" /></a><p><strong>Kaveri Foods RefriFresh</strong><span>Web Development</span></p></div></li>
      
      <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/lgcweb.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/lgcweb.png" width="279" height="170" alt="" /></a><p><strong>LGC</strong><span>Web Design & Development</span></p></div></li>
      
       <li class="all web-design"><div class="bwWrapper"><a href="images/portfolio/ekaweb.png" rel="prettyPhoto[gallery2]"><img src="images/portfolio/ekaweb.png" width="279" height="170" alt="" /></a><p><strong>Eka Montessori</strong><span>Web Design & Development</span></p></div></li>
         <!-- updated logo on 10-07-2014-->
          
     </ul>
  </div>
  <div class="send_quote">
   <h4>Would you like us to send you a quote?</h4>
   <p>Click the button, fill out the form and we'll be right with you!<a class="btn_col" href="quote_req.php">Get A Quote</a></p>
  </div>
  <!-- pager_nav -->
<!--  <div class="pager_nav">
   <a href="#">1</a><span>2</span><a href="#">3</a><a href="#">4</a><a href="#">5</a>
   <a href="#" class="bx-prev">prev</a><a href="#" class="bx-next">next</a>
  </div>-->
  <!-- /pager_nav -->
  <!-- /Short Text Layout 3 Column -->
 </div>
</div>

<!-- footer -->
 <?php include('includes/footer.php');?>
<!-- /footer -->
</body>
</html> 
