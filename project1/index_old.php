<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Home</title>
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
<link rel="stylesheet" href="stylesheets/jquery.onebyone.css">
<script src="scripts/jquery.min.js"></script> 
<script src="scripts/jquery.onebyone.min.js"></script>              
<script src="scripts/jquery.touchwipe.min.js"></script> 
<script src="scripts/jquery.blackandwhite.min.js"></script>
<script src="scripts/js_func.js"></script>

<script src="scripts/jquery.isotope.js"></script>
<script src="scripts/jquery.prettyPhoto.js"></script>
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

<script>
$(function(){
    $('#obo_slider').oneByOne({
		className: 'oneByOne1',	             
		easeType: 'random',
		slideShow: true
	});  

})
</script>
</head>
<body>
<?php include('includes/facebooksdk.php'); ?>
<div class="wraper">
 <?php include('includes/header.php');?>
</div> 

<!-- one bt one slider -->
<div class="wrape homeone">
		<div class="fallback"><img src="images/sliders/home_page_1/home_page_1_fallback.jpg" alt="" /></div>
		<div id="obo_slider">  				
		<div class="oneByOne_item">
			<img src="images/sliders/home_page_1/home1_slide_1.png" class="wp1_3 slide1_bot" alt="">		            
		<span class="txt1">Construct Looks Good On</span>			
			<span class="txt2">ALL Screen Sizes</span>												
			<span class="txt3 short">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns voluptas sadips ipsums vitae tolu ptas nemis omnis fugiats vitaes nemo minima rerums uns.</span>												
			<span class="txt4 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>
		</div>
		<div class="oneByOne_item">                                 	
			<img src="images/sliders/home_page_2/home2_slide_2.png" class="wp1_3 wp1_left slide2_bot" alt="">			            
<!--			<span class="txt1 blue txt_right2">This Slider Has Tons of Great Features</span>			
			<span class="txt2 blue txt_right2">iOS Friendly</span>												
			<span class="txt2 blue txt_right2">and Hyperlinks</span>												
			<span class="txt4 txt_right2 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>		-->										
		</div>	
		
		<div class="oneByOne_item">
			<img src="images/sliders/home_page_3/home3_slide_3.png" class="wp1_3 slide2_bot" alt="">		            
<!--			<span class="txt1">Crucio is a responsive, business</span>			
			<span class="txt2">HTML template</span>												
			<span class="txt3">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns voluptas sadips ipsums vitae tolu ptas nemis omnis fugiats vitaes nemo minima rerums uns.</span>												
			<span class="txt4"><a href="#" class="btn_l">Purchase Now!</a></span>-->
		</div>                                                                                              

		<div class="oneByOne_item">                                 	
			<img src="images/sliders/home_page_4/home4_slide_4.png" class="wp1_3 slide3_bot" alt="">			            
<!--			<span class="txt1 blue">Use Individual Elements or </span>			
			<span class="txt2 blue">BIG IMAGES</span>												
			<span class="txt3 short">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns volu taes nemo minima rerums uns.</span>												
			<span class="txt4 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>-->
		</div>
        
<!--        		<div class="oneByOne_item">                                 	
			<img src="images/sliders/home_page_5/home5_slide_5.png" class="wp1_3 slide3_bot" alt="">			            
			<span class="txt1 blue">Use Individual Elements or </span>			
			<span class="txt2 blue">BIG IMAGES</span>												
			<span class="txt3 short">Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis dolores nemis uns volu taes nemo minima rerums uns.</span>												
			<span class="txt4 txt4up"><a href="#" class="btn_l">Purchase Now!</a></span>
		</div>-->
		
		</div>    
</div>
<!-- /one bt one slider -->
 
<div class="content_block">
 <!-- text bar -->
 <div class="text_bar">
  <div class="wraper">
   <h2>Have a look at our Company Profile</h2>
   <a class="buy btn_l" href="#">Download</a>
<!--   <div class="widget">
    <h3>Construct Is Flexible</h3>
    <p>This is a widgetized area, you can add icons,  shortcodes, etc  ...  <a href="#">read more</a></p>
   </div>-->
<div class="widget">
    <h3>Quotes</h3>
    <p>Creative without strategy is called 'art.' Creative with strategy is called 'advertising.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&mdash;<strong> Jef I. Richards </strong></p>
   </div>   
  </div>
 </div>
 <!-- /text bar -->
  <div class="wraper">
 <!--Services block-->
 <div class="bc_list">
   <ul>
    <li><span class="circle"></span>
     <div class="bwWrapper"><canvas height="250" width="250" style="position: absolute; top: 0px; left: 0px; width: 250px; height: 250px; display: block;"></canvas><a href="#"><img alt="" src="images/home_page_3_feature_circles/feature_1.png"></a></div>
     <h4>Web & Graphic Design</h4>
     <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters  tum aecenas faucib sadips amets.</p>
    </li>
    <li><span class="circle"></span>
     <div class="bwWrapper"><canvas height="250" width="250" style="position: absolute; top: 0px; left: 0px; width: 250px; height: 250px; display: block;"></canvas><a href="#"><img alt="" src="images/home_page_3_feature_circles/feature_2.png"></a></div>
     <h4>Web Apps Development</h4>
     <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters  tum aecenas faucib sadips amets.</p>
    </li>
    <li><span class="circle"></span>
     <div class="bwWrapper"><canvas height="250" width="250" style="position: absolute; top: 0px; left: 0px; width: 250px; height: 250px; display: block;"></canvas><a href="#"><img alt="" src="images/home_page_3_feature_circles/feature_3.png"></a></div>
     <h4>Search Engine Optimization</h4>
     <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters  tum aecenas faucib sadips amets.</p>
    </li>
   </ul>
  </div>
  <!--services block-->
  

  <!-- features_block -->
  <div class="features_block">
   <ul>
    <li class="design">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4><span>Planning</span></h4>
     <p>Lid est laborum dolo rumes fugats untras. Et harums ser quidem sit rerum facilis est dolores nemis uns.  </p>
    </li>
    <li class="flexible">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4><span>Design & Development</span></h4>
     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem que laudantium totam</p>
    </li>
    <li class="support">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4><span>Testing</span></h4>
     <p>Nemo enim ipsam voluptatem uns quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunturs.</p>
    </li>
    <li class="easy">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4><span>Support</span></h4>
     <p>Neque porro qusquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit sed quia nons.</p>
    </li>
    <li class="seo">
     <a class="circle_link" href="#">&nbsp;</a>
     <h4><span>SEO Ready</span></h4>
     <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis voluptas uns sadips doloreusi.</p>
    </li>
   </ul>
  </div>
  <!-- /features_block -->
 </div>
</div>

<!--<!-- footer -->
<!-- social block -->

 <?php include('includes/footer.php');?>
<!-- /copyright -->
<!-- /footer -->
</body>
</html> 
