


<?php include("../header.php"); ?>

<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				slidesColor: ['#C63D0F', '#005197', '#005197'],
				css3: true,
				'scrollOverflow': false,
				autoScrolling: false,
				//slidesNavigation: true,
				continuousVertical: false,
    			anchors: ['home', 'impact', 'mika', 'colab']
			});
		});

</script>

 <script>
 $(function() {
    $('#seedSlide img:not(:first)').hide();
	
    $('#seedSlide > img').css('position', 'absolute');
    $('#seedSlide > img').css('top', '0px');
    $('#seedSlide > img').css('left', '50%');
    $('#seedSlide > img').css('width', '100%');	
    $('#seedSlide > img').css('height', 'auto');	
    $('#seedSlide > img').css('clear', 'both');
    $('#seedSlide > img').each(function() {
        var img = $(this);
        $('<img>').attr('src', $(this).attr('src')).load(function() {
            img.css('margin-left', -this.width / 2 + 'px');
        });
    });

    var pause = false;
    
    function fadeNext() {
        $('#seedSlide > img').first().fadeOut().appendTo($('#fader'));
        $('#seedSlide > img').first().fadeIn();
    }

    function fadePrev() {
        $('#seedSlide > img').first().fadeOut();
        $('#seedSlide > img').last().prependTo($('#fader')).fadeIn();
    }

    $('#seedSlide, #next').click(function() {
        fadeNext();
    });

    $('#prev').click(function() {
        fadePrev();
    });

    $('#seedSlide, .button').hover(function() {
        pause = true;
    },function() {
        pause = false;
    });

    function doRotate() {
        if(!pause) {
            fadeNext();
        }    
    }
    
    var rotate = setInterval(doRotate, 5000); 
}); 
</script>  

<a href="../LTT"><div class="controlArrowNew next"></div></a>
<a href="../City-Fund"><div class="controlArrowNew prev"></div></a>

<div id="fullpage">

          <div class="section active class" id="edTech">
          
            <div class="mainTitleContainer">			
              <div class="container" style="margin:auto">
                <h1>Education Technology:<br/>Seed Fund</h1>
              </div>
            </div>  
                      
             <div class="mainCaption">
                <div style="margin:auto" class="container">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">NewSchools' Seed Fund supports early-stage technology companies that are improving educational access and opportunities for all PK-12 students. Our Seed entrepreneurs create products that challenge previous conceptions of how students learn, open access to isolated communities, target special needs populations and inspire children in new ways.
                    </div>  
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"  style="height:100%; min-height:100px;">
                    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"  style="position:relative; height:100%; min-height:100px;">
                        	<a href="#impact"><div class="anchorButton">						 								
                            	Impact
                            </div></a>
                        </div>
                    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"  style="position:relative; height:100%; min-height:100px;">
                        	<a href="#mika"><div class="anchorButton twoLineButton">						 								
                            	Mika's Story
                            </div></a>
                        </div>
                    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"  style="position:relative; height:100%; min-height:100px;">
                        	<a href="#colab"><div class="anchorButton">						 								
                            	co.lab
                            </div></a>
                        </div>
                    </div>                     
                                      
                </div>
             </div>            
          </div>  
        
          <!--ED TECH [Section 2] >> -->
          <div class="section" id="edTech2">
            <div class="container">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              
			<img src="../assets/img/Seed/databackground.png" style="width:95%; height:auto;" class="mobileImage">
              <h2>Seed Fund</h2>
              <h4>Impact</h4>
<p>In 2013, NewSchools Seed Fund participated in 25% of all seed round investments in K-12 education. As a trailblazer in this market, we not only directed our capital toward high quality companies with the potential to change teaching and learning, but also inspired investment by others, leveraging our donors' dollars 8:1. Beyond investing, NewSchools played a pivotal role in developing a thriving edtech ecosystem. We connected entrepreneurs, teachers, schools and investors who shared ideas, worked together to develop, test and refine products and traded knowledge about how digital learning is changing student outcomes.</p>
				<img src="../assets/img/Seed/mika-button.png" style="width:150px; height:auto; float:right;" class="mobileImage">           
			  </div>
              
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pull-right commFullHeight">
				<img src="../assets/img/Seed/databackground.png" style="width:95%; height:auto;">
				<img src="../assets/img/Seed/mika-button.png" style="width:150px; height:auto; float:right; margin:10px">           
			  </div>               

            </div>          
          </div> 
          
          <!--ED TECH [Section 3] >> -->
          <div class="section" id="edTech3">
            <div class="container">

              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 marginTop">
              	<div class="fadein">
                    <img src="../assets/img/Mika/01-Mika.png"/>
                    <img src="../assets/img/Mika/02-Mika.png"/>
                    <img src="../assets/img/Mika/03-Mika.png"/>
                    <img src="../assets/img/Mika/04-Mika.png"/>
                    <img src="../assets/img/Mika/05-Mika.png"/>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <p><a href="https://goalbookapp.com/" target="_blank"><img src="../assets/img/Seed/goalbook_logo_small.png"></a></p>
                  <p style="font-size:13px; margin-top:20px"><span class="capWord">Goalbook recently announced</span> they are providing preschool content that will align with Common Core and address the full range of early childhood development in areas such as Communication, Physical Development, and Problem Solving.</p>                
                </div>
                  
              </div>  
              
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 marginTop marginBottom">
              
<p><span class="capWord">Mika</span>, a special education teacher, used to feel frustrated with the amount of time she spent not teaching. She struggled to comply with federal regulations related to students' Individual Education Programs (IEPs), completing mounds of paperwork and then translating the incomprehensible jargon in her reports to confused parents.</p>

<p>When Mika became the head of her department, she introduced <span class="capWord">Goalbook</span>, which creates research-based resources that empower teachers to design rigorous and engaging instructional plans for diverse students. "It used to take me five to six hours to write each student's IEP," Mika says. "Goalbook saves me at least two hours per plan."</p>

<p>Now, Mika can spend more time teaching and interacting with students, including a fifth grader on the autism spectrum who works with Mika during lunch to develop the language he needs to connect socially with his peers. This is what teaching students with special needs is all about for Mika: "Goalbook takes away the bureaucratic headache and allows me to do my job."</p>

                  
              </div>                        
                                     
            </div> 
            
              <a href="#colab"><img src="../assets/img/Seed/goalbook-button-small.png" style="position:absolute; bottom:0%; right:5%;"></a>                   
                     
          </div> 
          
          <!--ED TECH [Section 4] >> -->
          <div class="section" id="edTech4">
            <div class="container">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              
                <a href="http://playcolab.com/companies/" target="_blank"><img src="../assets/img/Seed/colab-cohorts2.png"/ style="width:100%; height:auto; padding:15px 0" class="mobileImage"></a>
                <h1>Co.Lab</h1>
                <h3>Creative Partnership</h3>
                <p>In 2013, NewSchools entered into a new partnership with <a href="http://www.zynga.org" target="_blank">Zynga.org</a> to accelerate the creation of high quality, technology-enabled learning games. Co.lab is a product accelerator for educational technology game developers, founded on the belief that games have the potential to engage students and transform their learning experiences in unique and positive ways. Last autumn, Co.lab's first cohort of five companies spent four months in residence at Zynga.org's headquarters in San Francisco, where they drew on the resources of the founding partners and our extended networks to help build, test, refine and distribute their products. The success of this pilot led to a record number of applications for cohort two, which launched in early spring of 2014 with seven companies participating.</p>
                	
                <br/>
                <p><a href="http://www.playcolab.com" target="_blank" style="text-decoration:none; font-style:italic">www.playcolab.com</a></p>
                <br/><p><img src="../assets/img/Seed/zyngaorgtransparent.png" class="marginTop"></p>
                <br/><p><img src="../assets/img/Seed/colab-logo-resized.png" class=" mobileImage" style="width:100%; height:auto;"></p>                
              </div>  
			  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 marginTop hideMobile">
                   <!-- <img src="../assets/img/Seed/alumnicohort.png"/> -->
                    <a href="http://playcolab.com/companies/" target="_blank"><img src="../assets/img/Seed/colab-cohorts2.png"/ style="width:100%; height:auto"></a>
              </div> 
            </div>  
             
				<img src="../assets/img/Seed/colab-logo-resized.png" style="position:absolute; bottom:0%; right:0%; max-width:550px; width:100%; height:auto;" class="hideMobile">          
            </div>  
	                                
          </div>         
        
        
        
        
        </div>
		<!-- << EDUCATION TECH  -->
        
       

</div>



</body>


</html>