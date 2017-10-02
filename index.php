<?php include_once './header.php';?>
<!--
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Make it a lifestyle, not a duty</h1>
                        <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
                        <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary popup-vimeo">Watch Our Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="services">
                                            <span><img class="img-responsive" src="images/weight_lifting.png" alt=""></span>
						<h3>Weight Lifting</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
                                            <span><img class="img-responsive" src="images/running.png" alt=""></span>
						<h3>Running</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="services">
                                            <span><img class="img-responsive" src="images/Yoga-512.png" alt=""></span>
						<h3>Yoga</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius</p>
						<p><a href="#" class="btn btn-primary btn-outline btn-sm">More <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
       </div>-->


 <!-- Add this css File in head tag-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

        <style>
  
.carousel-control {
    bottom: 0;
    color: #fff;
    font-size: 20px;
    left: 0;
    opacity: 0;
    position: absolute;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
    top: 30%;
    width: auto;
    transition: all 0.8s ease 0s;
    padding: 30px 50px;
}
@media(max-width:992px){
    .carousel-control{
        display: none !important;
    }
}
.carousel-inner {
    box-shadow: 2px 6px 21px;
    margin-top: 120px;
}
.fa-angle-right,
.fa-angle-left {
    font-size: 80px;
}
#sg-carousel:hover .carousel-control.left {
    left: 38px;
    transition: all .2s ease 0;
}
#sg-carousel:hover .carousel-control.right {
    right: 38px;
    transition: all .2s ease 0;
}
#sg-carousel:hover .carousel-control.left,
#sg-carousel:hover .carousel-control.right {
    opacity: 1;
}
.carousel-indicators li {
    background-color: #b3b5b9;
    border-radius: 10px;
    cursor: pointer;
    display: inline-block;
    height: 12px;
    margin: 1px;
    text-indent: -999px;
    width: 12px;
    border: 0;
}
.carousel-indicators .active {
    background-color: #041132;
    height: 12px;
    margin: 0;
    width: 12px;
    border: 0;
}


/*---------- LEFT/RIGHT ROUND CONTROL ----------*/
.control-round .carousel-control {
    top: 47%;
    opacity: 0;
    width: 45px;
    height: 45px;
    z-index: 100;
    color: #ffffff;
    display: block;
    font-size: 24px;
    cursor: pointer;
    overflow: hidden;
    line-height: 43px;
    text-shadow: none;
    position: absolute;
    font-weight: normal;
    background: transparent;
    -webkit-border-radius: 100px;
    border-radius: 100px;
}
.control-round:hover .carousel-control{
    opacity: 1;
}
.control-round .carousel-control.left {
    left: 1%;
}
.control-round .carousel-control.right {
    right: 1%;
}
.control-round .carousel-control.left:hover,
.control-round .carousel-control.right:hover{
    color: #fdfdfd;
    background: rgba(0, 0, 0, 0.5);
    border: 0px transparent;
}
.control-round .carousel-control.left>span:nth-child(1){
    left: 45%;
}
.control-round .carousel-control.right>span:nth-child(1){
    right: 45%;
}





/*---------- INDICATORS CONTROL ----------*/
.carousel-indicators{
    right: 45%;
    bottom: 3%;
    left: auto;
    width: 90%;
    height: 20px;
    font-size: 0;
    overflow-x: auto;
    text-align: right;
    overflow-y: hidden;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 1px;
    white-space: nowrap;
}
.carousel-indicators li{
    padding: 0;
    width: 15px;
    height: 15px;
    border: 1px solid rgb(158, 158, 158);
    text-indent: 0;
    overflow: hidden;
    text-align: left;
    position: relative;
    letter-spacing: 1px;
    background: rgb(158, 158, 158);
    -webkit-font-smoothing: antialiased;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    margin-right: 5px;
    -webkit-transition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
    transition: all 0.5s cubic-bezier(0.22,0.81,0.01,0.99);
    z-index: 10;
    cursor:pointer;
}
.carousel-indicators li:last-child{
    margin-right: 0;
}
.carousel-indicators .active{
    margin: 1px 5px 1px 1px;
    box-shadow: 0 0 0 2px #fff;
    background-color: transparent;
    position: relative;
    -webkit-transition: box-shadow 0.3s ease;
    -moz-transition: box-shadow 0.3s ease;
    -o-transition: box-shadow 0.3s ease;
    transition: box-shadow 0.3s ease;
    -webkit-transition: background-color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;

}
.carousel-indicators .active:before{
    transform: scale(0.5);
    background-color: #fff;
    content:"";
    position: absolute;
    left:-1px;
    top:-1px;
    width:15px;
    height: 15px;
    border-radius: 50%;
    -webkit-transition: background-color 0.3s ease;
    -moz-transition: background-color 0.3s ease;
    -o-transition: background-color 0.3s ease;
    transition: background-color 0.3s ease;
}

</style>

        
        
<div class="row" style="box-shadow: 0px 1px 5px #eee;">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
                                <img src="images/banners/1-Banner.jpg" alt="First slide">
                    <!-- Static Header -->
                    <!-- /header-text -->
		    </div>
		    <div class="item">
                        <img src="images/banners/2-Banner.jpg" alt="Second slide">
		    	<!-- Static Header -->
                    <!-- /header-text -->
		    </div>
		    <div class="item">
                        <img src="images/banners/3-Banner.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
                        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                        
                        
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
		</div><!-- /carousel -->
	</div>

        
   
        
    <div class="container text-center fh5co-heading" style="padding-bottom:-30px !important;">
                <h2>About Intensity</h2>
                <p>INTENSITY is a premier Health & Fitness service provider in Ahmedabad. we are a High Profile Certified Health & Fitness Professional. Since long we are in fitness and travel around the world  and work with world's leading health and fitness organizations. we are running our business from Ahmedabad and it has been consistently growing.</p>
               <p><center><a href="about.php"><button class="btn btn-default">More</button></a></center></p>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <center><img src="images/Regular training.jpg" class="img-responsive"></center>
            <h2>Regular training</h2>
            <p>There are many variations of passages of Lorem Ipsum, but the majority have suffered alteration.</p>
        </div>
        <div class="col-md-3">
            <center><img src="images/Healthy food.jpg" class="img-responsive"></center>
            <center><h2>Healthy food</h2></center>
            <p>Fitness are many variations of passages Lorem Ipsum available, but the majority have suffered alteration.</p>
        </div>
        <div class="col-md-3">
            <center><img src="images/Professional trainer.jpg" class="img-responsive"></center>
            <h2>Professional trainer</h2>
            <p>Design are many variations of passages in Lorem Ipsum available, but the majority have suffered alteration.</p>
        </div>
        <div class="col-md-3">
            <center><img src="images/Schedule of classes.jpg" class="img-responsive"></center>
            <h2>Schedule of classes</h2>
            
            <p>Sport are many variations of passages in Lorem Ipsum available, but the majority have suffered alteration.</p>
        </div>
    </div>
</div>
        
<!--        <div id="fh5co-trainer">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Fitness Expert</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/trainer-1.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Angel Adams</a></h3>
							<span>Dance Expert</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/trainer-2.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Arnold Smith</a></h3>
							<span>Body Building Expert</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box">
					<div class="trainer">
						<a href="#"><img class="img-responsive" src="images/trainer-3.jpg" alt="trainer"></a>
						<div class="title">
							<h3><a href="#">Rachel Seely</a></h3>
							<span>Yoga Expert</span>
						</div>
						<div class="desc text-center">
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	
<!--	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Class Schedule</h2>
				</div>
			</div>

			<div class="row animate-box">
				
				<div class="fh5co-tabs">
					<ul class="fh5co-tab-nav">
						<li class="active"><a href="#" data-tab="1"><span class="visible-xs">S</span><span class="hidden-xs">Sunday</span></a></li>
						<li><a href="#" data-tab="2"><span class="visible-xs">M</span><span class="hidden-xs">Monday</span></a></li>
						<li><a href="#" data-tab="3"><span class="visible-xs">T</span><span class="hidden-xs">Tuesday</span></a></li>
						<li><a href="#" data-tab="4"><span class="visible-xs">W</span><span class="hidden-xs">Wednesday</span></a></li>

						<li><a href="#" data-tab="5"><span class="visible-xs">Th</span><span class="hidden-xs">Thursday</span></a></li>
						<li><a href="#" data-tab="6"><span class="visible-xs">F</span><span class="hidden-xs">Friday</span></a></li>
						<li><a href="#" data-tab="7"><span class="visible-xs">S</span><span class="hidden-xs">Saturday</span></a></li>
					</ul>

					 Tabs 
					<div class="fh5co-tab-content-wrap">
						<div class="fh5co-tab-content tab-content active" data-tab-content="1">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="2">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="3">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="4">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="5">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="6">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

						<div class="fh5co-tab-content tab-content active" data-tab-content="7">
							<ul class="class-schedule">
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/two-boxing-gloves.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Boxing</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/ballet.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Ballet Dance</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/dumbbell.svg" class="img-responsive" alt=""></span>
									<span class="time">9:00 AM - 11AM</span>
									<h4>Body Building</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/yoga-carpet.svg" class="img-responsive" alt=""></span>
									<span class="time">6:00 AM - 7AM</span>
									<h4>Yoga</h4>
									<small>Angel Adams</small>
								</li>
								<li class="text-center">
									<span><img src="images/exercise.svg" class="img-responsive" alt=""></span>
									<span class="time">7:00 AM - 8AM</span>
									<h4>Cardio</h4>
									<small>Angel Adams</small>
								</li>
							</ul>
						</div>

					</div>

				</div>
			</div>
		</div>
</div>--><hr>
	<div id="fh5co-pricing">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pricing Plan</h2>
<!--					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>-->
				</div>
			</div>
			<div class="row">
				<div class="pricing">
					<div class="col-md-6 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency"><i class="fa fa-inr" aria-hidden="true"></i></sup>7,670<small>/3 month</small></div>
							<ul class="classes">
								<li></li>
								<li class="color">Joining Fees</li>
								<li>1,000</li>
								<li class="color">Admin Fees</li>
								<li>500</li>
								<li class="color">Membership</li>
								<li>5,000</li>
                                                                <li class="color">GST (18%)</li>
								<li>1,770</li>
							</ul>
                                                        <a href="basic_plan.php" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-6 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency"><i class="fa fa-inr" aria-hidden="true"></i></sup>13,570<small>/month</small></div>
							<ul class="classes">
								<li></li>
								<li class="color">Joining Fees</li>
								<li>1,000</li>
								<li class="color">Admin Fees</li>
								<li>500</li>
								<li class="color">Membership</li>
								<li>10,000</li>
                                                                <li class="color">GST (18%)</li>
								<li>2,070</li>
							</ul>
                                                        <a href="pro_plan.php" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	</div>
<hr>
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Gym gallery</h2>
					<p>The view from our eyes is probably just enough to make you ready for the great and fit life.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/img1.jpg); ">
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Illustration</span>
									<h2>Useful baskets</h2>
								</div>-->
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/img2.jpg); ">
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Skater man in the road</h2>
								</div>-->
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/img3.jpg); ">
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>-->
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/img4.jpg); "> 
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Timer starts now!</h2>
								</div>-->
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/img5.jpg); ">
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>-->
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/cardio.jpg); ">
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Illustration</span>
									<h2>Beautiful sunset</h2>
								</div>-->
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery/img7.jpg); ">
							<a href="#">
<!--								<div class="case-studies-summary">
									<span>Web Design</span>
									<h2>Two Glas of Juice</h2>
								</div>-->
							</a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
<!--							<div class="item">
								<div class="testimony-slide active text-center">
                                                                    <figure>
                                                                            <img src="images/testimonials/Nisha Chaudhary.png" alt="user">
									</figure>
									<span>Nisha Chaudhary.</span>
									<blockquote>
                                                                            <p style="text-align: center;">It is great experience to join INTENSITY. It is not only about losing weight or get in shape. It is about keep you fit and live healthy lifestyle.</p>
									</blockquote>
								</div>
							</div>-->
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
                                                                            <img src="images/testimonials/Nisha Chaudhary.png" alt="user">
									</figure>
									<span>Nisha Chaudhary</span>
									<blockquote>
									<p style="text-align: center;">It is great experience to join INTENSITY. It is not only about losing weight or get in shape. It is about keep you fit and live healthy lifestyle.</p>
									</blockquote>
								</div>
							</div>

                                                        <div class="item">
								<div class="testimony-slide active text-center">
									<figure>
                                                                            <img src="images/testimonials/Parag Raval.png" alt="user">
									</figure>
									<span>Kirtan Patel</span>
									<blockquote>
									<p style="text-align: center;">My lifestyle was very sedentary
but here at INTENSITY with right 
guideline, instructions and 
corrective techniques, 
I'm more active, 
my health is much better. 
Thank you, INTENSITY</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
                                                                            <img src="images/testimonials/Amit Chauha.png" alt="user">
									</figure>
									<span>Amit Chauhan</span>
									<blockquote>
										<p style="text-align: center;">I am very happy to join INTENSITY.Great ambiance, well known trainers and hygiene is up to mark. I feel really motivated for my own fitness </p>
									</blockquote>
								</div>
							</div>
                                                        <div class="item">
								<div class="testimony-slide active text-center">
									<figure>
                                                                            <img src="images/testimonials/Amit Chandak.png" alt="user">
									</figure>
									<span> Amit Chandak</span>
									<blockquote>
										<p style="text-align: center;">I am so happy to join INTENSITY as part of my lifestyle. I feel good I feel Fresh</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Fitness Classes this Summer <br> <span> Pay Now and <br> Get <span class="percent">35%</span> Discount</span></h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Become a Member</a></p>
				</div>
			</div>
		</div>
	</div>-->

<!--	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Recent Blog</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/gallery-4.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/gallery-2.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="images/gallery-3.jpg" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Sep. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>-->

	
<?php include_once './footer.php'; ?>
