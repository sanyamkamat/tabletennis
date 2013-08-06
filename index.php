<!doctype html>
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- A Bogdan Sandu design (http://bogdansandu.com) - Presented on DesignYourWay (http://www.designyourway.net/blog/resources/freebie-unofolio-one-page-portfolio-with-cool-css3-and-jquery-effects) -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PSL Table Tennis</title>
        <meta name="description" content="PSL Beach Football" />
        <link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="refineslide.css" />
		<link rel="stylesheet" href="font.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css' />
		<script src="js/modernizr.js"></script>
	    <!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	<div id="wrapper">
		<div id="header">
			<div id="logo" style="width:63px;"><img width="60px" height="60px" src="images/tt.gif" alt="Logo"/></div>
			<h2 style="float: left;
    height: 74px;
    margin: 0;
	padding-top:10px;
    width: 356px;">PSL Table Tennis Tournament</h2>
			<div id="menu">
				<ul>
					<a href="#"><li class="menu_home">Home</li></a>
					<a href="#about_me"><li class="menu_about">About</li></a>
					<a href="#contact_me"><li class="menu_contact">Register</li></a>
					<a href="/Fish-4-news/football"><li class="menu_work">Football</li></a>
				</ul>
			</div>
		</div> <!-- end header -->
		
		<div id="slider">
			<div id="viewport-shadow">

				<div id="viewport">
					<div id="box">
					  <figure class="slide">
						<img src="images/slide1.jpg" alt="">
					  </figure>
					  <figure class="slide">
						<img src="images/slide2.jpg" alt="">
					  </figure>
					  <figure class="slide">
						<img src="images/slide3.jpg" alt="">
					  </figure>
					  <figure class="slide">
						<img src="images/slide4.jpg" alt="">
					  </figure>
					  <figure class="slide">
						<img src="images/slide5.jpg" alt="">
					  </figure>
					  <figure class="slide">
						<img src="images/slide6.jpg" alt="">
					  </figure>
					  
					</div>
				</div> 

				<div id="time-indicator"></div>
			</div>

          <nav class="slider-controls">
            <ul id="controls">
              <li><a class="goto-slide current" href="#" data-slideindex="0"></a></li>
              <li><a class="goto-slide" href="#" data-slideindex="1"></a></li>
              <li><a class="goto-slide" href="#" data-slideindex="2"></a></li>
              <li><a class="goto-slide" href="#" data-slideindex="3"></a></li>
              <li><a class="goto-slide" href="#" data-slideindex="4"></a></li>
			  <li><a class="goto-slide" href="#" data-slideindex="5"></a></li>
			  
            </ul>
          </nav>

		</div><!-- end slider -->
		
		<div id="about">
			<a id="about_me"></a>
			<h2>About PSL TT:</h2>
				<div id="aboutleft">
					<p><b>Arguably the most competitive sport at PSL-Goa, TT has always entertained, and will continue to do so.</b> <br>

This year PSC-G has changed the format, focusing more on the concept of "Team" :)<br><br>

The aim is to provide friendly competition where the main ingredients are teamwork and sportsmanship.<br><br>

The categories for this year are:<br><br>

1)      Men's Singles<br>

2)      Ladies  Singles<br>

3)      Team Event( Consists of 3 guys, 2 girls)<br><br>

Rules for the team event will be conveyed after registration
</p>
				</div>
				<div id="aboutright">
					<div id="diagram"></div>
					<div class="get">
						<div class="arc">
							<span class="text">Forehand</span>
							<input type="hidden" class="percent" value="70" />
							<input type="hidden" class="color" value="#48a078" />
						</div>
						<div class="arc">
							<span class="text">Backhand</span>
							<input type="hidden" class="percent" value="60" />
							<input type="hidden" class="color" value="#fdc9b4" />
						</div>
						<div class="arc">
							<span class="text">Topspin</span>
							<input type="hidden" class="percent" value="53" />
							<input type="hidden" class="color" value="#f86b68" />
						</div>
						<div class="arc">
							<span class="text">Serve</span>
							<input type="hidden" class="percent" value="45" />
							<input type="hidden" class="color" value="#fd9e34" />
						</div>
					</div>
					
					
				</div>
		</div><!-- end about -->
		
		<div id="contact">
			<a id="contact_me"></a>

			<?php if(preg_match("/MSIE /i", $_SERVER['HTTP_USER_AGENT'])) {  $isIe = true; } else { $isIe = false; } ?>
			<h2 style="font-weight:bold;">Registration for PSL Table Tennis Tournament</h2>
			<div class="theform">
				<form class="cmxform" id="CommentForm" method="post" action="#">
					<?php if($isIe) { ?> Name: <?php } ?>
						<input type="text" name="ContactName" id="name" placeholder="Name" /> <?php if($isIe) { ?> <br><br> <?php } ?>
						<?php if($isIe) { ?> Email: <?php } ?>
						<input type="text" name="ContactEmail" id="email" placeholder="Email" /> <?php if($isIe) { ?> <br><br> <?php } ?>						
					
					<h2 style="padding-top:5px;font-size:18px;margin-left:26px;">TT Singles Mens</h2>
					<input  type="radio" name="tt_singles_men" value="Yes">Yes<br>
					<input  type="radio" name="tt_singles_men" value="No">No
					
					<h2 style="padding-top:5px;font-size:18px;margin-left:26px;">TT Singles Womens</h2>
					<input type="radio" name="tt_singles_women" value="Yes">Yes<br>
					<input type="radio" name="tt_singles_women" value="No">No
					
					<h2 style="padding-top:5px;font-size:18px;margin-left:26px;">TT Team event</h2>
					<?php if($isIe) { ?>
					<p class="text" style="margin-bottom:21px;"> 
					Your team name and team members - 5 in a team (3 boys, 2 girls)
					<?php } else { ?>
					<p class="text">
					<?php } ?>
						<textarea  id = "team" name="ContactComment" placeholder="Enter your team name and team members here"></textarea>  
					</p>  
					<p class="submit">  
						<input id="registrTeam" onclick ="successmsg();" type="submit" value="Send" />  
					</p>  
					<label id="loader" style="display:none;"><img src="images/ajax-loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
				</form>  
				<script>
				function successmsg()
				{
					$('#registrTeam').removeAttr('onclick');
					var name = $('#name').val();
					var email = $('#email').val();
			
					if(name != '' && email != '')
					{
						$('#loader').html('Your team has been registered successfully');
					}
					else
					{
						$('#registrTeam').attr('onclick','successmsg()');
						$('#loader').html('Please Enter relavent details and submit');
					}
				
				}
				</script>
			</div>
			<div class="extracontact" >
				<div class="contactinfo" style="font-size:14px" > Please enter valid information and don't send multiple requests. Upon submission,you will receive an acknowledgment mail confirming your table tennis registration. 
				<br/><br/>
				<?php if($isIe) { ?> <br/><br/> <br/><br/><br/> <?php } ?>
				<br/><br/> <br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/>
				Box 1 : Your team name and team members<br/>
				<br/>
					eg: Team name :Dragons (5 players - 3 boys, 2 girls)<br/>
					1) player 1<br/>
					2) player 2<br/>
					3) player 3<br/>
					4) player 4<br/>
					5) player 5<br/>
					<br/><br/>
				
				If you'd like to send our sports committee some feedback or have any questions regarding the table tennis tournament please write to us at <a href="mailto:psc_goa@persistent.co.in">psc_goa@persistent.co.in</a> </div>
				<ul>
				<li><a>Website by: PSL sports committee</a></li>
				</ul>
				<div class="socialmedia">

				</div>
			</div>
		</div><!-- end contact -->
		
		<div id="footer"></div>
	</div> <!-- end wrapper --> 
	<script src="js/jquery.min.js"></script>
	<script src="js/raphael.js" type="text/javascript"></script>
	<script src="js/init.js" type="text/javascript"></script>
	<link rel="stylesheet" href="js/prettyPhoto.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.validate.min.js" type="text/javascript"></script> <!-- form validation scripts (for contact page) -->
	<script src="js/contactForm.js" type="text/javascript"></script> <!-- Contact form triggers and AJAX submit -->
	<script src="js/box-slider-all.jquery.min.js"></script>
		<script>

		  $(function () {

        var $box = $('#box')
          , $indicators = $('.goto-slide')
          , $effects = $('.effect')
          , $timeIndicator = $('#time-indicator')
          , slideInterval = 5000
          , effectOptions = {
              'blindLeft': {blindCount: 15}
            , 'blindDown': {blindCount: 15}
            , 'tile3d': {tileRows: 6, rowOffset: 80}
            , 'tile': {tileRows: 6, rowOffset: 80}
          };

        // This function runs before the slide transition starts
        var switchIndicator = function ($c, $n, currIndex, nextIndex) {
          // kills the timeline by setting it's width to zero
          $timeIndicator.stop().css('width', 0);
          // Highlights the next slide pagination control
          $indicators.removeClass('current').eq(nextIndex).addClass('current');
        };

        // This function runs after the slide transition finishes
        var startTimeIndicator = function () {
          // start the timeline animation
          $timeIndicator.animate({width: '680px'}, slideInterval);
        };

        // initialize the plugin with the desired settings
        $box.boxSlider({
            speed: 1000
          , autoScroll: true
          , timeout: slideInterval
          , next: '#next'
          , prev: '#prev'
          , pause: '#pause'
          , effect: 'scrollVert3d'
          , onbefore: switchIndicator
          , onafter: startTimeIndicator
        });

        startTimeIndicator(); // start the time line for the first slide

        // Paginate the slides using the indicator controls
        $('#controls').on('click', '.goto-slide', function (ev) {
          $box.boxSlider('showSlide', $(this).data('slideindex'));
          ev.preventDefault();
        });

        // This is for demo purposes only, kills the plugin and resets it with 
        // the newly selected effect FIXME clean this up!
        $('#effect-list').on('click', '.effect', function (ev) {
          var $effect = $(this)
            , fx = $effect.data('fx')
            , extraOptions = effectOptions[fx];

          $effects.removeClass('current');
          $effect.addClass('current');
          switchIndicator(null, null, 0, 0);

          if (extraOptions) {
            $.each(extraOptions, function (opt, val) {
              $box.boxSlider('option', opt, val);
            });
          }

          $box.boxSlider('option', 'effect', $effect.data('fx'));

          ev.preventDefault();
        });

		  });
		</script>
		<script type="text/javascript" charset="utf-8">
		  $(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		  });
		</script>
		
    </body>
</html>
