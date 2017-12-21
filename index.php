<?php
	$msg="";
	use PHPMailer\PHPMailer\PHPMailer;
	include_once "PHPMailer/PHPMailer.php";
	include_once "PHPMailer/Exception.php";
	include_once "PHPMailer/SMTP.php";
	if(isset($_POST["submit"])) {

		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$content = $_POST["content"];

		$mail = new PHPMailer();

		$mail->addAddress("jacky42117@hotmail.com");
		$mail->setFrom($email);
		$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body = $content;

		if ($mail->send()) 
			$msg = "Your mail has been sent!";
		 else 
			$msg = "Please try again!";
			//echo $mail->ErrorInfo;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<meta charset="utf-8">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Work+Sans|Abel|Nunito" rel="stylesheet">
	<!--Import Font Awesome CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"> 
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery js file-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!--Import openlayers file-->
	<link rel="stylesheet" href="https://openlayers.org/en/v4.6.4/css/ol.css" type="text/css">
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.4/build/ol.js"></script>
	<!--Import customize CSS-->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="banner">
	<nav>
		<div class="navWrapper fixed">
			<div class="button-collapse">
				<div class="menuItem">
					<span class="line line1"></span>
					<span class="line line2"></span>
					<span class="line line3"></span>
				</div>
			</div>
			<ul class="navBar hide-on-med">
				<li><a class="scroll" href="index.html">HOME</a></li>
				<li><a class="scroll" href="#about">ABOUT</a></li>
				<li><a class="scroll" href="#skills">SKILLS</a></li>
				<li><a class="scroll" href="#experiences">EXPERIENCES</a></li>
				<li><a class="scroll" href="#projects">PROJECTS</a></li>
				<li><a class="scroll" href="#contact">CONTACT</a></li>
			</ul>
			<ul class="sideNav">
				<li><a class="scroll" href="index.html">HOME</a></li>
				<li><a class="scroll" href="#about">ABOUT</a></li>
				<li><a class="scroll" href="#skills">SKILLS</a></li>
				<li><a class="scroll" href="#experiences">EXPERIENCES</a></li>
				<li><a class="scroll" href="#projects">PROJECTS</a></li>
				<li><a class="scroll" href="#contact">CONTACT</a></li>
			</ul>
		</div>
	</nav>
	<div class="banner-content">
		<div class="row container">
			<div class="col s12">
				<div class="banner-info">
					<h2>Hi, I am Chih-Yen</h2>	
				</div>				
			</div>
		</div>
	</div>
</div>

<!--about me start -->
<div class="about" id="about">
	<div class="row container">
		<h2>ABOUT ME</h2>
		<div class="row-gap">
			<div class="col s12 m5">
				<div class="about-img responsive-img">
					<img src="img/about.jpg">
				</div>
			</div>
			<div class="col s12 m7">
				<div class="about-grid">
					<div class="about-info">
						<div class="about-icon col s3 m3">
							<span class="fa fa-desktop fa-5x"></span>
						</div>
						<div class="about-text col s9 m9">
							<h4>WEB DEVELOPER</h4>
							<p>Focus on developing front-end website by using HTML, CSS, jQuery, and other javascript skills.</p>
						</div>
					</div>
					<div class="about-info">
						<div class="about-icon col s3 m3">
							<span class="fa fa-briefcase fa-5x"></span>
						</div>
						<div class="about-text col s9 m9">
							<h4>GIS PLANNER</h4>
							<p>Establish a web-based GIS platform and use GIS data to access the transitioning towards urban resilience and sustainability.</p>
						</div>
					</div>
					<div class="about-info">
						<div class="about-icon col s3 m3">
							<span class="fa fa-user-plus fa-5x"></span>
						</div>
						<div class="about-text col s9 m9">
							<h4>TEACHER</h4>
							<p>Enhance seninor high school students' geographical knowledge, and cultivate their critical thinking.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--my skills start -->
<div class="skills" id="skills">
	<div class="row container">
		<h2>MY SKILLS</h2>
		<div class="row-gap">
			<div class="col s12 m6">
				<h4>TECHNICAL SKILLS</h4>
				<div class="skills-html">
					<label>HTML</label>
					<div class ="htmlBar">
						<div class ="htmlProgress"></div>
					</div>
					<div class = "progressNumber"><span class="progressCount">90</span><i>%</i></div>
				</div>
				<div class="skills-CSS">
					<label>CSS</label>
					<div class ="cssBar">
						<div class ="cssProgress"></div>
					</div>
					<div class = "progressNumber"><span class="progressCount">80</span><i>%</i></div>
				</div>
				<div class="skills-javascript">
					<label>Javascript</label>
					<div class ="javascriptBar">
						<div class ="javascriptProgress"></div>
					</div>
					<div class = "progressNumber"><span class="progressCount">50</span><i>%</i></div>
				</div>
				<div class="skills-jQuery">
					<label>jQuery</label>
					<div class ="jQueryBar">
						<div class ="jQueryProgress"></div>
					</div>
					<div class = "progressNumber"><span class="progressCount">20</span><i>%</i></div>
				</div>
				<div class="skills-php">
					<label>PHP</label>
					<div class ="phpBar">
						<div class ="phpProgress"></div>
					</div>
					<div class = "progressNumber"><span class="progressCount">30</span><i>%</i></div>
				</div>
			</div>
			<div class="col s12 m6">
				<h4 class="otherdata">OTHER DATA</h4>
				<div class="counter">
					<div class="counter-left">
						<span class="count">8</span>
						<h5>projects done</h5>
					</div>
					<div class="counter-right">
						<span class="count">468</span>
						<h5>students graduate</h5>
					</div>
				</div>
				<div class="counter">
					<div class="counter-left">
						<span class="count">2</span>
						<h5>books published</h5>
					</div>
					<div class="counter-right">
						<span class="count">9241</span>
						<h5>follower on Facebook</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--my experiences start -->
<div class="experiences" id="experiences">
	<div class="row container">
		<h2>MY EXPERIENCES</h2>
		<div class="row-gap">
			<div class="col s12">
				<div class="exp-timeline">
					<div class="timeline timeline-left">
						<div class="timeline-content">
							<h2>2015 - 2017</h2>
							<strong>Dali senior high school</strong>
							<p></p>
						</div>
					</div>
					<div class="timeline timeline-right">
						<div class="timeline-content">
							<h2>2013 - 2015</h2>
							<strong>GIS research center Feng Chia University</strong>
							<p></p>
						</div>
					</div>
					<div class="timeline timeline-left">
						<div class="timeline-content">
							<h2>2011 - 2012</h2>
							<strong>The University of Nottingham</strong>
							<p>Geographical information science</p>
						</div>
					</div>
					<div class="timeline timeline-right">
						<div class="timeline-content">
							<h2>2006 - 2010</h2>
							<strong>National Changhua University of Education</strong>
							<p>Department of Geography</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--my projects start-->
<div class="projects" id = "projects">
	<div class="row container">
		<h2>MY PROJECTS</h2>
		<div class="row-gap">
			<div class="col s12 m6">
				
			</div>
			<div class="col s12 m6">
				
			</div>
		</div>
	</div>
</div>


<!--contact me start-->
<div class="contact" id = "contact">
	<div class="row">
		<h2>CONTACT ME</h2>
		<div class="row-gap">
			<div class="map" id = "map"></div>
			<div class="col s12 m6 contact-left">
				<h3>information</h3>
				<h5>If you have any questions or query, please contact me!</h5>
				<div class="contact-grid">
					<div class="contact-info">
						<div class="contact-icon col s3 m3">
							<span class="fa fa-map-marker fa-2x"></span>
						</div>
						<div class="contact-text col s9 m9">
							<h4>Location</h4>
							<p>Taichung Taiwan</p>
						</div>
					</div>
					<div class="contact-info">
						<div class="contact-icon col s3 m3">
							<span class="fa fa-envelope fa-2x"></span>
						</div>
						<div class="contact-text col s9 m9">
							<h4>Email</h4>
							<p>chihyen.c@gmail.com</p>
						</div>
					</div>
					<div class="contact-info">
						<div class="contact-icon col s3 m3">
							<span class="fa fa-phone fa-2x"></span>
						</div>
						<div class="contact-text col s9 m9">
							<h4>Call</h4>
							<p>+886 926 502962</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 contact-right">
				<form action="index.php" method="POST"">
					<input type="text" name="name" placeholder="name">
					<input type="text" name="subject" placeholder="subject">
					<input type="email" name="email" placeholder="email">
					<input type="tel" name="phone" placeholder="phone">
					<textarea name="content" placeholder="your messege"></textarea>
					<input type="submit" name="submit" value="send">
				</form>
				<?php if ($msg !="") echo "$msg<br><br>"; ?>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	
</div>


<script>
/*navigation menu hide and show */
$(document).ready(function(){
	$(".menuItem").on("click", function(){
		$(this).toggleClass("close");
		$(".sideNav").toggleClass("active");
	})
})

/* display fixed navigation bar */
$(window).scroll(function(){
		if ($(document).scrollTop() > 50) {
			$(".navBar").removeClass("hide-on-med");
			$(".navBar").addClass("scrollDown");
		} else {
			$(".navBar").removeClass("scrollDown");
			$(".navBar").addClass("hide-on-med");
		}
	})

/*direct to specific section by ease */
$(document).ready(function(){
		var scrollLink = $(".scroll");
		scrollLink.click(function(e){
			e.preventDefault();
			$("body,html").animate({
				scrollTop: $(this.hash).offset().top - 50
			}, 1000);
		});
	})

/* progress bar */
$(document).ready(function(){
	$(window).scroll(function(){
		var scrollBar = $(window).scrollTop();
		if (scrollBar > $(".htmlBar").offset().top - 960) {
			$(".htmlProgress").addClass("htmlProgressWidth");
		} else {
			$(".htmlProgress").removeClass("htmlProgressWidth");
		}
		if (scrollBar > $(".cssBar").offset().top - 960) {
			$(".cssProgress").addClass("cssProgressWidth");
		} else {
			$(".cssProgress").removeClass("cssProgressWidth");
		}
		if (scrollBar > $(".javascriptBar").offset().top - 960) {
			$(".javascriptProgress").addClass("javascriptProgressWidth");
		} else {
			$(".javascriptProgress").removeClass("javascriptProgressWidth");
		}
		if (scrollBar > $(".jQueryBar").offset().top - 960) {
			$(".jQueryProgress").addClass("jQueryProgressWidth");
		} else {
			$(".jQueryProgress").removeClass("jQueryProgressWidth");
		}
		if (scrollBar > $(".phpBar").offset().top - 960) {
			$(".phpProgress").addClass("phpProgressWidth");
		} else {
			$(".phpProgress").removeClass("phpProgressWidth");
		}
	})
})


/* progress bar 
$(document).ready(function(){
	$(window).scroll(function() {
		var scrollbar = $(this).scrollTop();
		if (scrollbar > 950){
			$(".htmlProgress").addClass("htmlProgressWidth")
			$(".cssProgress").addClass("cssProgressWidth")
			$(".javascriptProgress").addClass("javascriptProgressWidth")
			$(".jQueryProgress").addClass("jQueryProgressWidth")
			$(".phpProgress").addClass("phpProgressWidth")
		} else {
			$(".htmlProgress").removeClass("htmlProgressWidth")
			$(".cssProgress").removeClass("cssProgressWidth")
			$(".javascriptProgress").removeClass("javascriptProgressWidth")
			$(".jQueryProgress").removeClass("jQueryProgressWidth")
			$(".phpProgress").removeClass("phpProgressWidth")
		};
	})
}); */

/* progress bar counter*/
$(window).scroll(function(){
	if ($(window).scrollTop() > $(".otherdata").offset().top - 960) {
		$(".progressCount").each(function(){
			$(this).prop("counter", 0).animate({
				Counter: $(this).text()
			},{
				duration:1000,
				easing: "linear",
				step: function(now) {
					$(this).text(Math.ceil(now));
				},
				complete: function(){
					$this.text(this.countNum);
				}
			});
		});
	}
});




/* alternative progress bar counter

$({counter:1}).animate({counter:90},{
	duration:1000,
	step: function()
	{
		$(".htmlNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:80},{
	duration:1000,
	step: function()
	{
		$(".cssNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:50},{
	duration:1000,
	step: function()
	{
		$(".javascriptNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:20},{
	duration:1000,
	step: function()
	{
		$(".jQueryNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:30},{
	duration:1000,
	step: function()
	{
		$(".phpNumber").text(Math.ceil(this.counter)+" %");
	}
})
 */

/* other data counter  */
$(window).scroll(function(){
	if ($(window).scrollTop() > 1100) {
		$(".count").each(function(){
			$(this).prop("counter", 0).animate({
				Counter: $(this).text()
			},{
				duration:1000,
				easing: "linear",
				step: function(now) {
					$(this).text(Math.ceil(now));
				},
				complete: function(){
					$this.text(this.countNum);
				}
			});
		});
	}
});

</script>
<script>
var map = new ol.Map({
	layers: [
		new ol.layer.Tile({
		source: new ol.source.OSM()
		})
	],
		target: 'map',
		controls: ol.control.defaults({
			attributionOptions: {
			collapsible: false
			}
		}),
		view: new ol.View({
		center: ol.proj.fromLonLat([120.69148, 24.10663]),
		zoom: 17
	})
});
</script>
</body>
</html>