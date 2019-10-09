<style type="text/css">

* {
	margin: 0;
	padding: 0;
	border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}

/*NAV FONT*/
@font-face {
	font-family: 'juliussansoneregular';
	src: url('fonts/juliussansoneregular.eot');
	src: local('☺'), url('fonts/juliussansoneregular.woff') format('woff'), url('fonts/juliussansoneregular.ttf') format('truetype'), url('fonts/juliussansoneregular.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}

/*HEADER FONT*/
@font-face {
	font-family: 'renogare';
	src: url('fonts/renogare.eot');
	src: local('☺'), url('fonts/renogare.woff') format('woff'), url('fonts/renogare.ttf') format('truetype'), url('fonts/renogare.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}

/*BODY FONT*/
@font-face {
    font-family: 'Roboto', sans-serif;
}
@font-face{
    font-family: 'Over the Rainbow', cursive;
}
@font-face {
	font-family: 'charlevoispromedium';
	src: url('fonts/charlevoispromedium.eot');
	src: local('☺'), url('fonts/charlevoispromedium.woff') format('woff'), url('fonts/charlevoispromedium.ttf') format('truetype'), url('fonts/charlevoispromedium.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}

/*NAV FONT*/
@font-face {
	font-family: 'autumnchant';
	src: url('fonts/autumnchant.eot');
	src: local('☺'), url('fonts/autumnchant.woff') format('woff'), url('fonts/autumnchant.ttf') format('truetype'), url('fonts/autumnchant.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}



body {
    font-family: 'charlevoispromedium';
}

header {
    background-color: #8c97ab;
}

h1 {
    font-family: 'autumnchant';
    font-size: .8rem;
    padding: 2% 0px 2% 0px;
    text-align: center;
}
nav {
    background-color: #bdbccd;
    text-align: center;
	position: fixed;
	top: 0;
	width: 100%;
    height: 65px;
	z-index: 999;
}
nav ul {
    list-style-type: none;
    padding-bottom: 3px;
}
nav ul li {
	display: inline;
	font-family: 'juliussansoneregular';
    font-size: .8rem;
    text-align: center;
    padding: 0% 2px 0% 2px;
}
nav ul li a {
	color: #af354e;
	text-decoration: none;
}
nav ul li img {
    width: 25px;
    margin: 0 7% 0 7%;
}
li.blur {
    padding: 0;
    margin: 0;
}
.desktopnav {
    display: none;
}
a:link {
	text-decoration: none;
	color: #7E2682;
}
a:visited {
	text-decoration: none;
	color: #7E2682;
}
a:active {
	text-decoration: none;
	color: #7E2682;
}
header img {
    max-width: 100%;
}
.buildingimagemobile {
    max-width: 100%;
    padding-top: 64px;
    display: block;
    margin: auto;
    }
.buildingimagedesktop {
    display: none;
    }
section {
	padding: 5%;
    text-align: center;
    }
    
    section h1 {
        padding-top: 65px;
    }
article {
    padding: 10px 0 10px 0;
}
h2 {
	font-family: 'renogare';
    font-size: 1.3rem;
    padding-bottom: 10px;
    text-align: center;
}
section {
    padding-bottom: 10%;
}
section figure img {
    max-width: 40%;
    padding: 3% 0% 3% 0%;
    display: block;
    margin: auto;
}
/*BLUR*/
.blur:hover {
	-webkit-filter: blur(2px);
	filter: blur(2px);
}
/*BLUR*/
h3 {
    font-family: 'renogare';
    font-size: .9rem;
    text-align: center;
	padding-bottom: 4px;	
}
p {
    font-family: 'Roboto';
    font-size: .8rem;
    text-align: center;
    padding: 1%;
	line-height: 150%;
}
.experience, .education, .skills, .resume {
	background-color: #173037;
	color: white;
}
.experience h3, .experience p, .education h3, .education p {
	text-align: left;
}

.experience1 {
	padding-bottom: 20px;
}
.education1 {
	padding-bottom: 20px;
}

.resumebutton {
    background-color: #7E2682; /* Purple */
    border: none;
    color: white;
	font-family: 'juliussansoneregular';
    padding: 6% 25%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: .8rem;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.resumebutton:hover {
	background-color: transparent;
	border: 2px solid #7E2682;
    padding: 6% 25%;
}
































/* Skills Bars Start  --------------------------------- */


.SkillBar {
	width: 100%;
	height: 45px;
	position: relative;
	background: #8c97ab;
	margin: 20px auto;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
#Skill-HTML {
	width: 100%;
	animation: Animate-HTML 4s;
	-webkit-animation: Animate-HTML 4s;
	-moz-animation: Animate-HTML 4s;
	-o-animation: Animate-HTML 4s;
	height: 45px;
	position: absolute;
	background-color: #F9690E;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-HTML {
a from {
 width: 10px;
}
to {
	width: 100%
}
}
@-webkit-keyframes Animate-HTML {
 from {
 width: 10px;
}
to {
	width: 100%
}
}
@-moz-keyframes Animate-HTML {
 from {
 width: 10px;
}
to {
	width: 100%
}
}
@-o-keyframes Animate-HTML {
 from {
 width: 10px;
}
to {
	width: 100%
}
}
#Skill-photoshop {
	animation: Animate-CSS 5s;
	-webkit-animation: Animate-CSS 5s;
	-moz-animation: Animate-CSS 5s;
	-o-animation: Animate-CSS 5s;
	width: 75%;
	height: 45px;
	position: absolute;
	background-color: #BB0B20;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-CSS {
 from {
 width: 10px;
}
to {
	width: 70%
}
}
@-webkit-keyframes Animate-CSS {
 from {
 width: 10px;
}
to {
	width: 70%
}
}
@-moz-keyframes Animate-CSS {
 from {
 width: 10px;
}
to {
	width: 70%
}
}
@-o-keyframes Animate-CSS {
 from {
 width: 10px;
}
to {
	width: 70%
}
}
#Skill-illustrator {
	animation: Animate-jQuery 5s;
	-webkit-animation: Animate-jQuery 5s;
	-moz-animation: Animate-jQuery 5s;
	-o-animation: Animate-jQuery 5s;
	width: 75%;
	height: 45px;
	position: absolute;
	background-color: #BB0B20;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-jQuery {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
@-webkit-keyframes Animate-jQuery {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
@-moz-keyframes Animate-jQuery {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
@-o-keyframes Animate-jQuery {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
#Skill-indesign {
	animation: Animate-JS 4s;
	-webkit-animation: Animate-JS 4s;
	-moz-animation: Animate-JS 4s;
	-o-animation: Animate-JS 4s;
	width: 65%;
	height: 45px;
	position: absolute;
	background-color: #BB0B20;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-JS {
 from {
 width: 10px;
}
to {
	width: 65%
}
}
@-webkit-keyframes Animate-JS {
 from {
 width: 10px;
}
to {
	width: 65%
}
}
@-moz-keyframes Animate-JS {
 from {
 width: 10px;
}
to {
	width: 65%
}
}
@-o-keyframes Animate-JS {
 from {
 width: 10px;
}
to {
	width: 65%
}
}
#Skill-html {
	animation: Animate-XML 4s;
	-webkit-animation: Animate-XML 4s;
	-moz-animation: Animate-XML 4s;
	-o-animation: Animate-XML 4s;
	width: 90%;
	height: 45px;
	position: absolute;
	background-color: #BB0B20;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-XML {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
@-webkit-keyframes Animate-XML {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
@-moz-keyframes Animate-XML {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
@-o-keyframes Animate-XML {
 from {
 width: 10px;
}
to {
	width: 40%
}
}
#Skill-CSS {
	animation: Animate-C 4s;
	-webkit-animation: Animate-C 4s;
	-moz-animation: Animate-C 4s;
	-o-animation: Animate-C 4s;
	width: 50%;
	height: 45px;
	position: absolute;
	background-color: #BB0B20;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-C {
 from {
 width: 10px;
}
to {
	width: 30%
}
}
@-webkit-keyframes Animate-C {
 from {
 width: 10px;
}
to {
	width: 30%
}
}
@-moz-keyframes Animate-C {
 from {
 width: 10px;
}
to {
	width: 30%
}
}
@-o-keyframes Animate-C {
 from {
 width: 10px;
}
to {
	width: 30%
}
}
#Skill-JAVA {
	animation: Animate-JAVA 4s;
	-webkit-animation: Animate-JAVA 4s;
	-moz-animation: Animate-JAVA 4s;
	-o-animation: Animate-JAVA 4s;
	width: 25%;
	height: 45px;
	position: absolute;
	background-color: #52B3D9;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-JAVA {
 from {
 width: 10px;
}
to {
	width: 25%
}
}
@-webkit-keyframes Animate-JAVA {
 from {
 width: 10px;
}
to {
	width: 25%
}
}
@-moz-keyframes Animate-JAVA {
 from {
 width: 10px;
}
to {
	width: 25%
}
}
@-o-keyframes Animate-JAVA {
 from {
 width: 10px;
}
to {
	width: 25%
}
}
#Skill-PHP {
	animation: Animate-PHP 4s;
	-webkit-animation: Animate-PHP 4s;
	-moz-animation: Animate-PHP 4s;
	-o-animation: Animate-PHP 4s;
	width: 50%;
	height: 45px;
	position: absolute;
	background-color: #F7CA18;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-PHP {
 from {
 width: 10px;
}
to {
	width: 50%
}
}
@-webkit-keyframes Animate-PHP {
 from {
 width: 10px;
}
to {
	width: 50%
}
}
@-moz-keyframes Animate-PHP {
 from {
 width: 10px;
}
to {
	width: 50%
}
}
@-o-keyframes Animate-PHP {
 from {
 width: 10px;
}
to {
	width: 50%
}
}
#Skill-SQL {
	animation: Animate-SQL 4s;
	-webkit-animation: Animate-SQL 4s;
	-moz-animation: Animate-SQL 4s;
	-o-animation: Animate-SQL 4s;
	width: 80%;
	height: 45px;
	position: absolute;
	background-color: #1BA39C;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-SQL {
 from {
 width: 10px;
}
to {
	width: 80%
}
}
@-webkit-keyframes Animate-SQL {
 from {
 width: 10px;
}
to {
	width: 80%
}
}
@-moz-keyframes Animate-SQL {
 from {
 width: 10px;
}
to {
	width: 80%
}
}
@-o-keyframes Animate-SQL {
 from {
 width: 10px;
}
to {
	width: 80%
}
}
#Skill-VBNET {
	animation: Animate-VBNET 4s;
	-webkit-animation: Animate-VBNET 4s;
	-moz-animation: Animate-VBNET 4s;
	-o-animation: Animate-VBNET 4s;
	width: 35%;
	height: 45px;
	position: absolute;
	background-color: #F39C12;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
@keyframes Animate-VBNET {
 from {
 width: 10px;
}
to {
	width: 35%
}
}
@-webkit-keyframes Animate-VBNET {
 from {
 width: 10px;
}
to {
	width: 35%
}
}
@-moz-keyframes Animate-VBNET {
 from {
 width: 10px;
}
to {
	width: 35%
}
}
@-o-keyframes Animate-VBNET {
 from {
 width: 10px;
}
to {
	width: 35%
}
}
.Skill-Area {
	z-index: 1;
	float: left;
	position: absolute;
	margin-top: 10px;
	margin-left: 10px;
	text-shadow: none;
	color: #fff;
	font-family: Lato-Regular, sans-serif;
	font-size: 18px;
}
.PercentText {
	z-index: 3;
	position: relative;
	margin-right: 10px;
	margin-top: 10px;
	float: right;
	text-shadow: none;
	color: #fff;
	font-family: Lato-Regular, sans-serif;
	font-size: 18px;
}
/* Pure CSS3 jQuery-Like fadeIn
---------------------------------------------------- */
.fadeIn {
	/* CSS needed for animation
	---------------------------------------------------- */
	opacity:0;
	-webkit-animation:fadeIn ease-in 1;
	-moz-animation:fadeIn ease-in 1;
	-o-animation:fadeIn ease-in 1;
	animation:fadeIn ease-in 1;
	-webkit-animation-fill-mode:forwards;
	-moz-animation-fill-mode:forwards;
	-o-animation-fill-mode:forwards;
	animation-fill-mode:forwards;
}
/* Animation Times - Time for image to fade in
---------------------------------------------------- */
.fadeIn-3s {
	-webkit-animation-duration:3s;
	-moz-animation-duration:3s;
	-o-animation-duration:3s;
	animation-duration:3s;
}
.fadeIn-5s {
	-webkit-animation-duration:5s;
	-moz-animation-duration:5s;
	-o-animation-duration:5s;
	animation-duration:5s;
}
/* Animation Delay - Time for image to be delayed
---------------------------------------------------- */
.fadeIn-Delay-3s {
	-webkit-animation-delay:3s;
	-moz-animation-delay:3s;
	-o-animation-delay:3s;
	animation-delay:3s;
}
.fadeIn-Delay-5s {
	-webkit-animation-delay:5s;
	-moz-animation-delay:5s;
	-o-animation-delay:5s;
	animation-delay:5s;
}

/* Key Frames
---------------------------------------------------- */
@-webkit-keyframes fadeIn {
from {
opacity:0;
}
to {
	opacity:1;
}
}
@-moz-keyframes fadeIn {
from {
opacity:0;
}
to {
	opacity:1;
}
}
@-o-keyframes fadeIn {
from {
opacity:0;
}
to {
	opacity:1;
}
}
@keyframes fadeIn {
from {
opacity:0;
}
to {
	opacity:1;
}
}
 @media only screen and (max-width: 40em) {
.responsive-percent {
 margin-right: -45px !important;
}
}
@media only screen and (min-width: 40.063em) and (max-width: 64em) {
.responsive-percent {
 margin-right: -45px !important;
}
}

.footer-base {
	background:#343433;
	color:#fff;
	width: 100%;
	padding:20px 0 50px 0
}
.footer-base a {
	color:#fff;
	text-decoration:none
}
.footer-base a:hover {
	color:#7ea4f5
}


.mrgn-10-top {
	margin-top:10px
}
.mrgn-20-top {
	margin-top:20px
}
.mrgn-30-top {
	margin-top:30px
}
.mrgn-40-top {
	margin-top:40px
}
.mrgn-10-bottom {
	margin-bottom:10px
}
.mrgn-20-bottom {
	margin-bottom:20px
}
.mrgn-30-bottom {
	margin-bottom:30px
}
.mrgn-40-bottom {
	margin-bottom:40px
}

/* Skills Bars End  ------------------------------------- */

























/* FORM STYLES */
label, textarea, input[type="text"], input[type="email"], input[type="color"], input[type="checkbox"], select, input[type="reset"], input[type="submit"]{
	display: block;
    padding: 8px 0 8px 0;
}
input[type="checkbox"] {
    float: left;
    margin: 10px 5% 0 0;
}
.contact p {
    font-family: 'Over the Rainbow', cursive;
    font-size: 1.8rem;
}
.contact label {
    font-family: 'Over the Rainbow', cursive;
    font-size: 1.1rem;
}
select {
    margin: 0 0 15px 0;
}
.test {
    margin-left:auto;
    margin-right:auto;

    max-width: 500px;
    background: #FFF;
    padding: 30px 30px 20px 30px;
    box-shadow: rgba(187, 187, 187, 1) 0 0px 20px -1px;
    -webkit-box-shadow: rgba(187, 187, 187, 1) 0 0px 20px -1px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
    border-radius: 10px;
    -webkit-border-radius: 10px;
}
input[type="text"], input[type="email"], input[type="color"], input[type="dropdown"], textarea, select {
    width: 75%;
    max-width: 500px;
    background: #FFF;
    padding: 10px 0 10px 0;
    box-shadow: rgba(187, 187, 187, 1) 0 0px 20px -1px;
    -webkit-box-shadow: rgba(187, 187, 187, 1) 0 0px 20px -1px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
    border-radius: 7px;
    -webkit-border-radius: 7px;
}

input[type="reset"], input[type="submit"] {
    display: inline;
    width: 30%;
    max-width: 500px;
    background: #7E2682;
    padding: 10px 0 10px 0;
    box-shadow: rgba(187, 187, 187, 1) 0 0px 20px -1px;
    -webkit-box-shadow: rgba(187, 187, 187, 1) 0 0px 20px -1px;
    font: 12px 'juliussansoneregular', Helvetica, sans-serif;
    color: white;
    font-size: .8rem;
    border-radius: 7px;
    -webkit-border-radius: 7px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
input[type="reset"]:hover, input[type="submit"]:hover {
	background-color: transparent;
	border: 2px solid #7E2682;
    color: #8c97ab;
}








/* MEDIA QUERIES START */

/* MEDIA QUERY 550px - 900px */

@media (min-width: 550px) and (max-width: 900px) {
    .mobilenav {
        display: none;
    }
    .desktopnav {
        display: inline;
    }
    .desktopnav ul{
        padding: 1.2%;
    }
    .desktopnav ul li {
    margin: 1%;
    padding: 0% 2% 0% 2%;
    }
    h1 {
        padding: 2px 0 0 0;
		display: inline;
    }
    .buildingimagemobile {
        display: none;
    }
    .buildingimagedesktop {
        width: 100%;
        display: block;
        margin: auto;
        padding-top: 64px;
    }
    .about article {
        float: left;
        width: 33.33%;
    }
	#experiencecontainer {
		width: 100%;
		height: auto;
		background-color: blue;
	}
	.experience, .education {
		width: 40%;
		float: left;
		clear: both

	}
	.skills, .resume {
		width: 40%;
		float: right;
	}
	
	.works {
		clear: both;
	}
	.contact {
		clear: both;
	}
}



/* MEDIA QUERY 650px AND 900px
FOR FORM                            */
@media (min-width: 650px) and (max-width: 900px) {
    .name, .comments, .superhero {
        float: left;
        width: 50%;
    }
    .email, .color, .dogbreed {
        float: right;
        width: 50%;
    }
    input[type="reset"], input[type="submit"] {

    }


}

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* MEDIA QUERY 900px AND ABOVE */
@media (min-width: 900px) {
	
    .mobilenav {
        display: none;
    }
    .desktopnav {
        display: inline;
    }
    .desktopnav ul{
        padding: 1.2%;
    }
    .desktopnav ul li {
    margin: 4%;
    padding: 0% 2% 0% 2%;
    }
    h1 {
        margin: 4%;
    	padding: 0% 2% 0% 2%;
		display: inline;
    }
    .buildingimagemobile {
        display: none;
    }
    .buildingimagedesktop {
        max-width: 100%;
        display: block;
        margin: auto;
        padding-top: 64px;
    }
    .about article {
        float: left;
        width: 33.33%;
    }
	.experience, .education {
		width: 40%;
		float: left;
		clear: both

	}
	.skills, .resume {
		width: 40%;
		float: right;
	}
	
	.works {
		clear: both;
	}
	.contact {
		clear: both;
	}
}





</style>









<!-- NAVIGATION Here -->
<!-- Google Fonts Here -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Over+the+Rainbow" rel="stylesheet">
<body>
    
    <div id="container">
    
        <header id="homescroll">
    
            <nav class="mobilenav">
                 
                <h1><a href="index.html#homescroll" class="smoothScroll">Lori Gibbons</a></h1>
                
                <ul>     
					<li class="blur">
                        <a href="index.html#aboutscroll" class="smoothScroll">
                            <img src="images/icons/about.png" title="About Me" alt="About Me" />
                        </a>
                    </li>
					 
					<li class="blur">
                        <a href="index.html#experiencescroll" class="smoothScroll">
                            <img src="images/icons/experience.png" title="My Experience" alt="My Experience" />
                        </a>
                    </li>
	 
                    <li class="blur">
                        <a href="index.html#worksscroll" class="smoothScroll">
                            <img src="images/icons/works.png" title="My Works" alt="My Works" />
                        </a>
                    </li>
					 
					<li class="blur">
                        <a href="index.html#contactscroll" class="smoothScroll">
                            <img src="images/icons/contact.png" title="Contact Me" alt="Contact Me" />
                        </a>
                    </li>
                </ul>
            </nav>
            
            <nav class="desktopnav">
                
                <ul>     
					<li class="blur">
                        <a href="index.html#aboutscroll" class="smoothScroll">About</a>
                    </li>
					 
					<li class="blur">
                        <a href="index.html#experiencescroll" class="smoothScroll">Experience</a>
                    </li>
					
					<h1><a href="index.html#homescroll" class="smoothScroll">Lori Gibbons</a></h1>
	 
                    <li class="blur">
                        <a href="index.html#worksscroll" class="smoothScroll">Works</a>
                    </li>
					 
					<li class="blur">
                        <a href="#index.htmlcontactscroll" class="smoothScroll">Contact</a>
                    </li>
                </ul>
            </nav>

        </header>



<section>
    <h1>Thank you for your inquiry.</h1>
    <p>I have received your message, and I will be in touch shortly.</p>
</section>




<!-- JQUERY TAG -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
        <script src="js/button.js"></script>
		<script src="js/smoothscroll.js"></script>





















