<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>NSVF 2013 Yearbook</title>
	<meta name="author" content="Joe Vasquez" />
	<meta name="description" content="NewSchools 2013 Yearbook" />
	<meta property="og:title" content="View the NewSchools 2013 Yearbook!"/>
	<meta property="og:description" content="2013 marked NewSchools' 15th year of investing in education entrepreneurs, who are working to provide high quality K-12 education to underserved students and to fundamentally transform public education systems throughout the United States." />
	<meta property="og:image"
content="http://www.newschools.org/wp/wp-content/uploads/Aspire-LWP-2013-Graduate.jpg" /></meta>
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css" />
	<meta name="Resource-type" content="Document" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="user-scalable=no, initial-scale=1 , minimum-scale=1, width=device-width, height=device-height, target-densitydpi=medium-dpi" />-->
	
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">

	<link rel="stylesheet" type="text/css" href="../assets/css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="../examples/examples.css" />
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/flexslider.css" type="text/css" media="screen" />
	<link href="../assets/css/styles.css" rel="stylesheet">
    
	<style>
	</style>

	<!--[if IE]>
		<script type="text/javascript">	
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../vendors/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="../examples/examples.js"></script>
	<script src="../assets/js/jquery.easing.js"></script>
    <script src="../assets/js/jquery.mousewheel.js"></script>
    <script defer src="../assets/js/demo.js"></script>  
  	<script src="../assets/js/modernizr.js"></script>    
    
    

     <script type="text/javascript">
	  /*$(window).load(function() {
		$('body').fadeIn('fast');
	  })*/
	  </script>      
      
      <script>
		  $(function() {
			$('a[href*=#]:not([href=#])').click(function() {
			  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
				  $('html,body').animate({
					scrollTop: target.offset().top
				  }, 1000);
				  return false;
				}
			  }
			});
		  });
		</script>	
        
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=273472426153083&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 

        <!-- TWITTER -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
   
   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53321309-1', 'auto');
  ga('send', 'pageview');

</script>   

<!--<script src="../http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn('slow').end().appendTo('.fadein');}, 5000);
});
</script>

<script>
$(function(){
	$('.fadein-ceo img:gt(0)').hide();
	setInterval(function(){$('.fadein-ceo :first-child').fadeOut().next('img').fadeIn('slow').end().appendTo('.fadein-ceo');}, 5000);
});
</script>  
   
   
 

	<script>
	
	jQuery(document).ready(function ($) {
		var url = window.location.pathname;
		var filename = url.substring(url.lastIndexOf('/')+1);
		var pathElements = url.replace(/\/$/, '').split('/');
		var lastFolder = pathElements[pathElements.length - 1];
			switch (lastFolder) {
			case '':
			  $(".first").css("background-color","#ffa90a");
			  $(".first").css("text-transform","uppercase");
			  $(".first").css("background-image","none");
			  $(".first").css("text-align","center");
			  $(".first .navButton").css("color","black");
			  $(".first .navButton").css("font-weight","bold");
			  $(".first").css("padding-top","15px");
			  $(".first").css("padding-top","15px");
			  $("#firstFlag").css("visibility","visible");

			  break

			case '2013-Results':
			  $(".first").css("background-color","#ffa90a");
			  $(".first").css("text-transform","uppercase");
			  $(".first").css("background-image","none");
			  $(".first").css("text-align","center");
			  $(".first .navButton").css("color","black");
			  $(".first .navButton").css("font-weight","bold");
			  $(".first").css("padding-top","15px");
			  $(".first").css("padding-top","15px");
			  $("#firstFlag").css("visibility","visible");

			  break
			case 'City-Fund':
			  $(".second").css("background-color","#ff0a78");
			  $(".second").css("text-transform","uppercase");
			  $(".second").css("background-image","none");	
			  $(".second").css("text-align","center");
			  $(".second .navButton").css("color","black");
			  $(".second .navButton").css("font-weight","bold");
			  $(".second").css("padding-top","15px");	
/*			  $(".second .dropdown-menu").css("visibility","hidden");	
			  $(".second .dropdown-menu").css("display","none");	*/
			  $("#secondFlag").css("visibility","visible");
			  break;
			case 'Seed-Fund':
			  $(".third").css("background-color","#0aceff");
			  $(".third").css("text-transform","uppercase");
			  $(".third").css("background-image","none");	
			  $(".third").css("text-align","center");
			  $(".third .navButton").css("color","black");
			  $(".third .navButton").css("font-weight","bold");
			  $(".third").css("padding-top","15px");	
			  $(".third").css("line-height","1.3em");	
			  $("#thirdFlag").css("visibility","visible");
			  		  		  
			  break;
			case 'LTT':
			  $(".fourth > navButton").text("LEARNING TO TEACH");
			  $(".fourth").css("background-color","#084bca");
			  $(".fourth").css("text-transform","uppercase");
			  $(".fourth").css("background-image","none");		
			  $(".fourth").css("text-align","center");
			  $(".fourth .navButton").css("color","black");
			  $(".fourth .navButton").css("font-weight","bold");
			  $(".fourth").css("padding-top","15px");	
			  $("#fourthFlag").css("visibility","visible");
			  break;
			case 'Community':
			  $(".fifth").css("background-color","#90e500");
			  $(".fifth").css("text-transform","uppercase");
			  $(".fifth").css("background-image","none");
			  $(".fifth").css("text-align","center");
			  $(".fifth .navButton").css("color","black");
			  $(".fifth .navButton").css("font-weight","bold");
			  $(".fifth").css("padding-top","15px");	
			  $("#fifthFlag").css("visibility","visible");
			  break;
			case 'Thank-You':
			  $(".sixth").css("background-color","#fff118");
			  $(".sixth").css("text-transform","uppercase");
			  $(".sixth").css("background-image","none");		
			  $(".sixth").css("text-align","center");
			  $(".sixth .navButton").css("color","black");
			  $(".sixth .navButton").css("font-weight","bold");
			  $(".sixth").css("padding-top","15px");
			  $("#sixthFlag").css("visibility","visible");
			  break;  			  
			  
			default:
				break;
			}	
	
			$( ".first" ).hover(
			  function() {
				$('.first > .navButton').css("color","black");
			  }
			);	
		
			$( ".second" ).hover(
			  function() {
				$('.second > .navButton').text( "City Funds" );
				$('.second > .navButton').css("color","black");

			  }
			);	
			
			$( ".third" ).hover(
			  function() {
				$('.third > .navButton').text( "Seed Fund" );
				$('.third > .navButton').css("color","black");				
			  }
			);	
			
			$( ".fourth" ).hover(
			  function() {
				$('.fourth > .navButton').text( "Learning to Teach" );
				$('.fourth > .navButton').css("color","black");
				
			  }
			);
			
			$( ".fifth").hover(
			  function() {
				$('.fifth > .navButton').css("color","black");
			  }
			);	

			$( ".sixth" ).hover(
			  function() {
				$('.sixth > .navButton').css("color","black");
			  }
			);
				
			/* MOUSE-LEAVE NAVBAR */	
			
			$( ".first" ).mouseleave(function(){
				if(lastFolder!='2013-Results' || lastFolder!='2013-results'){
				  $( ".first > .navButton" ).text("2013 RESULTS");
				  $('.first > .navButton').css("color","white");								
				}
			});
			
			$( ".second" ).mouseleave(function(){
				if(lastFolder!='City-Fund' || lastFolder!='city-fund'){
				  $( ".second > .navButton" ).text("CITY FUNDS");
				  $('.second > .navButton').css("color","white");
				}
			});

			$( ".third" ).mouseleave(function(){
				if(lastFolder!='Seed-Fund' || lastFolder!='seed-fund'){
				  $( ".third > .navButton" ).text("SEED FUND");
				  $('.third > .navButton').css("color","white");
				}
			});
			
			$( ".fourth" ).mouseleave(function(){
				if(lastFolder!='LTT' || lastFolder!='ltt'){
				  $( ".fourth > .navButton" ).text("LEARNING TO TEACH");
				  $('.fourth > .navButton').css("color","white");
				}
			});		
			
			$( ".fifth" ).mouseleave(function(){
				if(lastFolder!='Community' || lastFolder!='community'){
				  $('.fifth > .navButton').css("color","white");
				}
			});
			
			$( ".sixth" ).mouseleave(function(){
				if(lastFolder!='Thank-You' || lastFolder!='thank-you'){
				  $('.sixth > .navButton').css("color","white");
				}
			});
							
		});
		
	</script>
   
   
   <script>
   causeRepaintsOn = $("h1, h2, h3, p, ul, li");
	
	$(window).resize(function() {
	  causeRepaintsOn.css("z-index", 1);
	});
    </script>
    
    <link rel="stylesheet" type="text/css" href="../assets/css/tooltipster.css" />
    <script type="text/javascript" src="../assets/js/jquery.tooltipster.min.js"></script>
      
	
    <script defer src="../assets/js/jquery.flexslider.js"></script>
    <script>   
	  $(window).load(function() {
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
		  animation: "slide",
		  controlNav: false,
		  animationLoop: false,
		  slideshow: false,
		  itemWidth: 210,
		  itemMargin: 5,
		  asNavFor: '#slider'
		});
		 
		$('#slider').flexslider({
		  animation: "slide",
		  controlNav: false,
		  animationLoop: false,
		  slideshow: false,
		  sync: "#carousel"
		});
	  });  
	</script>
    
    
    
    
    
</head>
<body>

<!-- LOADING SCREEN -->

<!--<div class="loader"></div>-->



<!--<div id="navbar">-->

  <div class="navbar-wrapper">
    <div class="container-fluid">
      <div class="navbar navbar-default navbar-fixed-top">
          <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a style="margin-top:0px; padding-top:0px;" class="navbar-brand" href="../#"><img src="../assets/img/logo/NewSchools-logo-250x75.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="myMenu" style="padding-left:0"> 
              <li class="whoweare dropdown" style="padding-left:0">
                <a href="../2013-Results" class="dropdown-toggle first" data-toggle="dropdown" data-target="#myCarousel" data-slide-to="0"><span class="navButton">2013 RESULTS</span></a>
                <ul class="dropdown-menu">
                  <!--<li><a href="../index.php#mission">mission</a></li>-->
                  <li><a href="../2013-Results#letter">2013 review</a></li>
                  <li><a href="../2013-Results#impact">impact</a></li>
                  <li><a href="../2013-Results#rena">rena's story</a></li>
                  <div style="width:0; height:30px; border-right:53px solid #ffa90a;border-left:53px solid #ffa90a; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>
                </ul>
              </li>
              <li class="schools dropdown">
                <a href="../City-Fund" class="dropdown-toggle second" data-toggle="dropdown" data-target="#myCarousel" data-slide-to="1"><span class="navButton">CITY FUNDS</span></a>
                <ul class="dropdown-menu">
                  <li><a href="../City-Fund#impact">impact</a></li>
                  <li><a href="../City-Fund#cities">cities</a></li>
                  <li><a href="../City-Fund#story">danielle's story</a></li>
                  <div style="width:0; height:30px; border-right:53px solid #ff0a78;border-left:53px solid #ff0a78; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>
                </ul>
              </li>
              <li class="edtech dropdown">
                <a href="../Seed-Fund" class="dropdown-toggle third" data-toggle="dropdown" data-target="#myCarousel" data-slide-to="2"><span class="navButton">SEED FUND</span></a>

                <ul class="dropdown-menu">
                  <li><a href="../Seed-Fund#impact">impact</a></li>
                  <li><a href="../Seed-Fund#mika">mika's story</a></li>
                  <li><a href="../Seed-Fund#colab">co.lab</a></li>
                  <div style="width:0; height:30px; border-right:53px solid #0aceff;border-left:53px solid #0aceff; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>
                </ul>
              </li>
              <li class="teachers dropdown">              
              
                <a href="../LTT" class="dropdown-toggle fourth" data-toggle="dropdown" data-target="#myCarousel" data-slide-to="3"><span class="navButton">LEARNING TO TEACH</span></a>
                <ul class="dropdown-menu" style="background-color:transparent;">
                  <li><a href="../LTT#impact">impact</a></li>
                  <li><a href="../LTT#story">utc's story</a></li>
                  <div style="width:0; height:30px; border-right:53px solid #084bca;border-left:53px solid #084bca; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>
                 

                </ul>      
                  <!--<div style="width:0; height:30px; border-right:53px solid #084bca;border-left:53px solid #084bca; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>-->
                          
              </li>
              
              
              <li class="community dropdown" data-target="#myCarousel" data-slide-to="4">
                <a href="../Community" class="dropdown-toggle fifth" data-toggle="dropdown" data-target="#myCarousel" data-slide-to="4" ><span class="navButton">COMMUNITY</span></a>
                <ul class="dropdown-menu" >
                  <li><a href="../Community#portfolio">portfolio</a></li>
                  <li><a href="../Community#summit">summit</a></li>
                  <div style="width:0; height:30px; border-right:53px solid #90e500;border-left:53px solid #90e500; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>
                </ul>
              </li>
              </li>
              <li class="thankyou dropdown">
                <a href="../Thank-You" class="dropdown-toggle sixth" data-toggle="dropdown" data-target="#myCarousel" data-slide-to="5"><span class="navButton">THANK YOU</span></a>
                <ul class="dropdown-menu">
                  <li><a href="../Thank-You#donors">donors</a></li>
                  <li><a href="../Thank-You#financials">financials</a></li>
                  <div style="width:0; height:30px; border-right:53px solid #fff118;border-left:53px solid #fff118; border-bottom:30px solid transparent; position:relative; bottom:0; left:0"></div>
                </ul>
              </li>
             </ul>
             
              <ul class="nav navbar-nav navbar-right">
              
                  <li id="shareButtons">
        
					<div class="fb-share-button" data-href="http://www.newschools.org/yearbook" data-image="http://www.newschools.org/yearbook/assets/img/logo/NewSchools-logo-250x75.png" data-title="NSVF 2013 Yearbook" data-summary='NSVF 2013 Yearbook: NewSchools + Entrepreneurs creating quality and equity in education.' data-width="80px" data-type="button"></div>	
                    <br/>
                    <div>
                      <!--<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>-->
                      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.newschools.org/yearbook/" data-text="Check out the NewSchools 2013 Yearbook!" data-via="nsvf">Tweet</a>

                    </div>
                 
                  </li>
                  
                  <li style="margin:15px 15px 0 0" id="goToMainWrap"><a href="http://www.newschools.org/" id="goToMain">Go to full<br/>NSVF site >></a></li>
                  
              
              </ul>           
          </div>
  
      </div>
    </div><!-- /container -->
  </div><!-- /navbar wrapper -->
  
  <div id="subHeader-container">

      <div id="firstFlag" style="width:0; height:0px; border-right:53px solid #ffa90a;border-left:53px solid #ffa90a; border-bottom:30px solid transparent; position:absolute; top:0; left:265px; visibility:hidden"></div>

      <div id="secondFlag" style="width:0; height:0px; border-right:53px solid #ff0a78;border-left:53px solid #ff0a78; border-bottom:30px solid transparent; position:absolute; top:0; left:386px; visibility:hidden"></div>

      <div id="thirdFlag" style="width:0; height:0px; border-right:53px solid #0aceff;border-left:53px solid #0aceff; border-bottom:30px solid transparent; position:absolute; top:0; left:507px; visibility:hidden"></div>

      <div id="fourthFlag" style="width:0; height:0px; border-right:53px solid #084bca;border-left:53px solid #084bca; border-bottom:30px solid transparent; position:absolute; top:0; left:628px; visibility:hidden"></div>

      <div id="fifthFlag" style="width:0; height:0px; border-right:53px solid #90e500;border-left:53px solid #90e500; border-bottom:30px solid transparent; position:absolute; top:0; left:749px; visibility:hidden"></div>

      <div id="sixthFlag" style="width:0; height:0px; border-right:53px solid #fff118;border-left:53px solid #fff118; border-bottom:30px solid transparent; position:absolute; top:0; left:870px; visibility:hidden;"></div>

  </div>
  
  