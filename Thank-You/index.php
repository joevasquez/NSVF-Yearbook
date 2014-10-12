
<?php include("../header.php"); ?>

<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				css3: true,
				'scrollOverflow': false,
				autoScrolling: false,
				//slidesNavigation: true,
				continuousVertical: false,
    			anchors: ['home', 'donors', 'financials']
    			//menu: '#myMenu',

				//slidesnavigation:true,
				//navigation: true,
				//navigationPosition: 'bottom'
				//navigationTooltips: ['w', 'Second', 'Third', 'Fourth', 'Fifth']
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
	
    /*$('#seedSlide').css('clear', 'both');		
    $('#seedSlide').css('min-height', '450px');		

    $('#seedSlide > img').css('margin', 'auto');	
    $('#seedSlide > img').css('width', '100%');	*/
    $('#seedSlide > img').each(function() {
        var img = $(this);
        $('<img>').attr('src', $(this).attr('src')).load(function() {
            img.css('margin-left', -this.width / 2 + 'px');
        });
    });

    var pause = false;
    
    function fadeNext() {
        $('#seedSlide > img').first().fadeOut().appendTo($('#seedSlide'));
        $('#seedSlide > img').first().fadeIn();
    }

    function fadePrev() {
        $('#seedSlide > img').first().fadeOut();
        $('#seedSlide > img').last().prependTo($('#seedSlide')).fadeIn();
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


<a href="../Community"><div class="controlArrowNew prev"></div></a>
<a href="../2013-Results"><div class="controlArrowNew next"></div></a>

<div id="fullpage">

 	<div class="section active" id="thankYou">
          
            <div class="mainTitleContainer">			
              <div class="container" style="margin:auto">
                <h1>THANK YOU!</h1>
              </div>
            </div>            
          
             <div class="mainCaption">
                <div style="margin:auto" class="container">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">The work of NewSchools Venture Fund would be impossible without the deep and sustained financial support of our generous donors. Thank you for your commitment to our mission to transform public education and to make the American Dream a reality for millions of schoolchildren across the country.
                    </div> 
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"  style="height:100%; min-height:70px;">
                    
                    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pull-right"  style="position:relative; height:100%; min-height:100px;">
                        	<a href="#financials"><div class="anchorButton">						 								
                            	Financials
                            </div></a>
                        </div>
                    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pull-right"  style="position:relative; height:100%; min-height:100px;">
                        	<a href="#donors"><div class="anchorButton">						 								
                            	Donors
                            </div></a>
                        </div>
                    	
                    </div>                                        
                </div>
             </div>            
          
          
          </div> 
          
          <!--THANK YOU [Section 2] >> -->
          <div class="section" id="thankYou2">
            <div class="container" style="margin:60px 0 0 0">

              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 black">
                <img src="../assets/img/thankYou/01donors.png" style="margin:auto; width:100%; height:auto;"/>
                <h1 class="black marginTop">THANK YOU</h1>
                <h3 class="black">2013 donors for your support!</h3>
                <p></br><em>NewSchools is committed to transforming public education through powerful ideas and passionate entrepreneurs so that all children — especially those in underserved communities — have the opportunity to succeed.</em></p>                              
                <p></br><a href="http://www.newschools.org/board">NewSchools Board of Directors</a></p>
                <div style="clear:both; margin-left:10px; font-family:proximaNova; font-size:13px;">Brook Byers, John Doerr, Chris Gabrieli, Dave Goldberg, Laurene Powell Jobs, Joanna Rees, Jon Sackler, Kim Smith, Rob Stavis, Dave Whorton</div>
                <p></br><a href="http://www.newschools.org/leadership-council">NewSchools Leadership Council</a></p>
                <div style="clear:both; margin-left:10px; font-family:proximaNova; font-size:13px;">Allison Bhusri, Cecily Cameron, Adam Cioth, Steve Dostart, Lance Fors, John Gargiulo, Sidney Hawkins Gargiulo, Matt Greenfield, Joy Henry Hinton, Cynthia King Vance, Laura Lauder, Tony Lautmann, Ann Mathieson, Lenny Mendonca, Anupam Mishra, Brian Olson, Andrea Rice, Joe Wolf</div></br></br></br>
              </div>  
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 donor-list black">
	              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              	  	<ul>
                        <li>Adam Cioth and Beth Cobert</li>
                        <li>Allison and Aneel Bhusri</li>
                        <li>Ambassador Frank and Kathy Baxter</li>
                        <li>America Achieves</li>
                        <li>Amy and Robert Stavis</li>
                        <li>Andrew and Julie Klingenstein</li>
                        <li>Andrew F. and Ann B. Mathieson Fund</li>
                        <li>Ann and John Doerr</li>
                        <li>Anonymous (3)</li>
                        <li>Anupam and Kavita Mishra</li>
                        <li>The Bill &amp; Melinda Gates Foundation</li>
                        <li>Bloomberg Philanthropies</li>
                        <li>The Boston Foundation</li>
                        <li>Carnegie Corporation of New York</li>
                        <li>Cecily Cameron and Derek Schrier</li>
                        <li>Charles &amp; Helen Schwab Foundation</li>
                        <li>Charles and Lynn Schusterman Family<br>
  &nbsp;&nbsp;&nbsp;&nbsp;Foundation</li>
                        <li>Christopher and Estrella Macklem</li>
                        <li>CityBridge Foundation</li>
                        <li>The Conrades Family Fund</li>
                        <li>Cynthia King Vance</li>
                        <li>Dave Goldberg &amp; Sheryl Sandberg</li>
                        <li>David &amp; Heidi Welch Foundation</li>
                        <li>David and Lisa Whorton</li>
                        <li>The deLaski Family Foundation</li>
                        <li>Denise and Tony Lautmann</li>
                        <li>Doris &amp; Donald Fisher Fund</li>
                        <li>The Edgerley Family Foundation</li>
                        <li>Ellen Koskinas and Charles Hauck</li>
                        <li>Emerson Education Fund</li>
                        <li>ETS</li>
                        <li>Eugene and Agnes E. Meyer Foundation</li>
                        <li>Flamboyan Foundation</li>
                        <li>I &amp; G Charitable Foundation</li>
                        <li>J.A. and Kathryn Albertson Foundation</li>
                    </ul>
                </div>
                  
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              	  	<ul>
                        <li>J.P. Morgan Chase Foundation</li>
                        <li>The J. Willard and Alice S. Marriott Foundation</li>
                        <li>Jill and Brian Olson</li>
                        <li>John and Sandra Thompson</li>
                        <li>Jonathan Sackler and Mary Corson</li>
                        <li>Joshua &amp; Anita Bekenstein Charitable Fund,</li>
						<li> Donor Advised Fund of Combined Jewish</li>
 					 	<li>Philanthropies of Greater Boston, Inc.</li>
                        <li>Laura and Gary Lauder Philanthropic Fund</li>
                        <li>Lindsay and Terry Eakin</li>
                        <li>Lovett-Woodsum Family Fund</li>
                        <li>Meredith Goldsmith Philanthropic Fund</li>
                        <li>Michael &amp; Susan Dell Foundation</li>
                        <li>Paul A. Myerson and Giselle F. Wagner</li>
                        <li>Paul and Ann Sagan Family Fund</li>
                        <li>Pearson Foundation</li>
                        <li>Pearson Inc.</li>
                        <li>Red Crane Foundation</li>
                        <li>The Richard Salomon Family Foundation</li>
                        <li>Rick and Nonnie Burnes, Butler's Hole Fund of The Boston Foundation</li>
                        <li>Robertson Foundation</li>
                        <li>Sidney E. Frank Foundation</li>
                        <li>Sobrato Family Foundation</li>
                        <li>Steve and Sue Mandel</li>
                        <li>Tammy and Bill Crown</li>
                        <li>Target</li>
                        <li>Tim Brady</li>
                        <li>The Walton Family Foundation</li>
                        <li>Wasserman Foundation</li>
                        <li>Vincent Schneider</li>
                        <li>Zynga.org</li>
                    </ul>                      
                  </div>
               </div>   
            </div>          
          </div>  
          
          <!--THANK YOU [Section 3] >> -->
          <div class="section" id="thankYou3">
              <div class="container black">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 pull-right financial-graphic">
                      <img src="../assets/img/thankYou/financialgraphs-new.png">
                  </div>          
          
                  <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 pull-right">
                     
                        
                        	<table class="financials">
                        	<tr><h3>SOURCES OF FUNDS</h3></tr>
                            <tr>
                            	<td class="indent">Corporations & Foundations</td>
                            	<td>$22,922,000</td>
                            </tr>
                            <tr>
                            	<td class="indent">Individuals & Family Foundations</td>
                            	<td>7,101,000</td>
                            </tr>  
                            <tr>
                            	<td class="indent">Other Sources of Income</td>
                            	<td>1,058,000</td>
                            </tr>  

                            <tr>
                            	<td><strong>TOTAL</strong></td>
                            	<td>$31,081,000</td>
                            </tr>  
                            </table>
                            
                            <h3>USES OF FUNDS</h3>
                        	<table class="financials">
                              <tr>
                                  <td class="indent">Direct Investment</td>
                                  <td>$18,000,000</td>
                              </tr>
                              <tr>
                                  <td class="indent">Diligence & Venture Building</td>
                                  <td>5,600,000</td>
                              </tr> 
                              <tr>
                                  <td class="indent">National Outreach</td>
                                  <td>2,300,000</td>
                              </tr>
                              <tr>
                                  <td class="indent">Fund Development</td>
                                  <td>1,000,000</td>
                              </tr>                                                          
                              <tr>
                                  <td class="indent">Administration</td>
                                  <td>1,000,000</td>
                              </tr>                              
                              <tr>
                                  <td><strong>TOTAL</strong></td>
                                  <td>$27,900,000</td>
                              </tr>  
                              
                              </table>

                  
                  
                  </div>
                  
                  
                  
                  
					<div style="clear:both"></div>
                   <h1 style="text-align:right">2013 Financial Highlights</h1>
              </div>       
          </div>  
   
          
</div>


</body>

</html>