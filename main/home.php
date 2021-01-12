
<style>

body {
	font:12px/18px Arial, Helvetica, sans-serif;
	color:#717171;
	position:relative;
	min-width:960px;
	
	background-position: 50% 0;
}
.ic {
	border:0;
	float:right;
	background:#fff;
	color:#f00;
	width:50%;
	line-height:10px;
	font-size:10px;
	margin:-220% 0 0 0;
	overflow:hidden;
	padding:0
}
html, body {
	height:100%;
}
html {
	min-width:960px;
}
/* Global Structure---------------------------------------- */
.main {
	margin:0 auto;
	position:relative;
	width:950px;
}
.main-bg {
	background:url(../images/main-bg.jpg) no-repeat center 0;
	min-height:100%;
}
/*----- alignment & clearing -----*/
.fleft {
	float:left
}
.fright {
	float:right
}
.alignright {
	text-align:right
}
.aligncenter {
	text-align:center
}
.alignmiddle * {
	vertical-align:middle
}
.clear {
	clear:both;
	line-height:0;
	font-size:0;
	overflow:hidden;
	height:0;
	width:100%;
}
.wrapper {
	overflow:hidden;
	position:relative;
}
.extra-wrap {
	overflow:hidden;
	display:block;
}
/*  Header styles */
h1, h2, h3, h4, h5, h6 {
	color:#fff;
	padding:0 0 9px 0;
	font-weight:normal;
	font-family: 'Passion One', cursive;
}
h1 {
	font-size:40px;
	line-height:48px;
}
h2 {
	font-size:36px;
	line-height:44px;
}
h3 {
	font-size:32px;
	line-height:40px;
}
h4 {
	font-size:28px;
	line-height:34px;
}
h5 {
	font-size:24px;
	line-height:30px;
}
h6 {
	font-size:20px;
	line-height:24px;
}
.heading-1 {
	color:#b30404;
}
/*----- text & typography -----*/
.def-list-1 {
	padding:0 0 10px 0;
}
.def-list-1 dt {
	display:block;
	font-size:12px;
	line-height:18px;
	padding:0 0 6px 0;
	color:#b09609;
	font-weight:bold;
}
.def-list-1 dt a {
	color:#b09609;
	text-decoration:none;
}
.def-list-1 dt a:hover {
	text-decoration:underline;
}
.quote {
	font-size:12px;
	line-height:20px;
	font-style:italic;
	position:relative;
	padding:0 0 15px 0;
}
.quote strong {
	font-weight:normal;
	color:#b09609;
}
.quote:before {
	display:inline-block;
	background:url(../images/quote-before.png) no-repeat 0 0;
	content:"";
	width:14px;
	height:13px;
	margin:0 5px 0 0;
}
.quote:after {
	display:inline-block;
	background:url(../images/quote-after.png) no-repeat 0 0;
	content:"";
	width:14px;
	height:13px;
	margin:0 0 0 6px;
}
strong {
	color:#b30404;
}
.str-1 {
	font-weight:normal;
	text-transform:uppercase;
}
.str-2 {
	color:#b09609;
}
.color-1 {
	color:#fff;
}
/*----- borders & lines -----*/
.hr-border-1 {
	border-bottom:1px solid #323232;
	margin:0 0 9px 0;
}
.hr-border-2 {
	background:#323232;
	height:3px;
	margin:0 40px 20px 40px;
}
/*----- boxes -----*/
.banner-box {
	background:#292929;
	padding:25px 135px 35px 40px;
	position:relative;
}
.banner-box h3 {
	font-size:34px;
	line-height:40px;
	padding:0;
}
.banner-box h4 {
	font-family: 'Open Sans', sans-serif;
	text-transform:uppercase;
	font-size:21px;
	line-height:26px;
	margin:-5px 0 0 0;
	font-weight:300;
	letter-spacing:-1px;
	padding:0 0 18px 0;
}
.banner-box .inner {
	position:relative;
	z-index:2;
}
.banner-box-img {
	position:absolute;
	right:0;
	bottom:0;
}
/*----- indents -----*/
.img-indent {
	float:left;
	margin:5px 10px 0 0;
}
.img-indent-bot {
	margin:5px 0 16px 0;
}
p {
	padding-bottom:18px;
}
.p {
	padding-bottom:18px;
}
.p0 {
	padding-bottom:0 !important;
}
.p1 {
	padding-bottom:6px !important;
}
.p2 {
	padding-bottom:15px !important;
}
.a1 {
	margin:0 5px;
}
.indent-bot {
	padding:0 0 32px 0;
}
.indent-bot-1 {
	padding:0 0 70px 0;
}
.indent-bot-2 {
	padding:0 0 20px 0;
}
.indent-right {
	margin-right:90px;
}
.pad-left {
	padding-left:35px;
}
.pad-top {
	padding-top:8px;
}
/*----- lists -----*/
.list-1 {
	padding:0 0 20px 0;
}
.list-1 li {
	display:block;
	padding:4px 0 4px 16px;
	border-top:1px solid #323232;
	background:url(../images/list-1-marker.gif) no-repeat 0 10px;
}
.list-1 li:first-child {
	padding:0 0 6px 16px;
	border:none;
	background:url(../images/list-1-marker.gif) no-repeat 0 5px;
}
.list-1 li a {
	color:#717171;
	font-size:14px;
	line-height:20px;
	padding:5px 0 6px;
	text-decoration:none;
}
.list-1 li a:hover {
	color:#fff;
}
/*----- buttons & links -----*/
a {
	color:#fff;
	text-decoration: underline;
	cursor:pointer;
}
a:hover {
	text-decoration: none;
}
.button {
	display:inline-block;
	font-size:12px;
	color:#fff;
	text-decoration: underline;
	background:url(../images/link-marker.gif) no-repeat right 7px;
	padding:0 11px 0 0;
}
.button:hover {
	text-decoration:none;
}
.link {
	text-decoration: underline;
	color:#ee623a;
	font-weight:bold;
}
.link:hover {
	text-decoration: none;
}
/*********************************header*************************************/
header {
	position:relative;
	z-index:2;
	width:950px;
	margin:0 auto;
	padding:80px 0 0 0;
	background:url(../images/slide-1.jpg) no-repeat center 80px;
}
header .inner {
	//background:url(../images/header-bg.png);
	padding:26px 40px 25px 40px;
	position:relative;
	z-index:2;
}
.logo {
	display:inline-block;
	padding:0 !important;
}
.logo a {
	position:relative;
	background: url(../images/logo.png) no-repeat 0 0;
	height:58px;
	width:187px;
	overflow:hidden;
	text-indent:-99em;
	display:block;
}
/********************** Slider ************************/
.mp-slider .items {
	display:none;
}
.mp-slider {
	position:absolute;
	top:-109px;
	left:0;
	right:0;
	height:511px;
}
.slider-container {
	position:relative;
	z-index:1;
	height:402px;
}
.mp-prev, .mp-next {
	position:absolute;
	width:31px;
	height:402px;
	bottom:0;
	z-index:3;
}
.mp-prev {
	left:0;
	background:url(../images/slider-prev.png) no-repeat 0 0;
}
.mp-prev:hover {
	background:url(../images/slider-prev.png) no-repeat right 0;
}
.mp-next {
	right:0;
	background:url(../images/slider-next.png) no-repeat 0 0;
}
.mp-next:hover {
	background:url(../images/slider-next.png) no-repeat right 0;
}
.mp-slider .banner {
	position:absolute;
	left:35px;
	right:35px;
	font-family: 'Passion One', cursive;
	color:#fff;
	z-index:99;
	top:120px;
	bottom:0;
	padding:0;
	text-align:center;
	font-size:84px;
	line-height:100px;
	text-transform:uppercase;
}
.mp-slider .banner span {
	display:block;
}
.mp-slider .mp-ban-1 .row-1 {
	padding:40px 0 0 0;
}
.mp-slider .mp-ban-1 .row-2 {
	font-size:110px;
	line-height:130px;
	margin:-45px 0 0 0;
}
.mp-slider .mp-ban-1 .row-3 {
	margin:-40px 0 0 0;
}
.mp-slider .mp-ban-2 .row-1 {
	padding:35px 0 0 0;
	font-size:93px;
	line-height:110px;
}
.mp-slider .mp-ban-2 .row-2, .mp-slider .mp-ban-2 .row-3 {
	color:#ad0000;
	margin:-40px 0 0 0;
}
.mp-slider .mp-ban-3 .row-1 {
	padding:35px 0 0 0;
	font-size:92px;
	line-height:110px;
}
.mp-slider .mp-ban-3 .row-2, .mp-slider .mp-ban-3 .row-3 {
	margin:-40px 0 0 0;
}
/********************** Navigation ************************/
nav {
	float:right;
	padding:12px 0 0 0;
}
.sf-menu {
	min-height:28px;
	padding:0;
	margin:0;
}
.sf-menu ul {
	position:absolute;
	top:-999em;
	width:185px;
	left:0;
	display:none;
}
.sf-menu > li {
	position:relative;
	float:left;
	margin:0 28px;
}
.sf-menu > li > a {
	text-decoration:none;
	display:block;
	font-family: 'Open Sans', sans-serif;
	font-size:14px;
	line-height:18px;
	text-transform:uppercase;
	color:#fff;
	padding:10px 0 0 0;
	background:url(../images/nav-active.png) no-repeat center -30px;
}
.sf-menu > li.current > a, .sf-menu > li:hover > a, .sf-menu > li.sfHover > a {
	color:#afaa9b;
	text-decoration:none;
	background:url(../images/nav-active.png) no-repeat center 0;
}
.sf-menu li:hover ul, .sf-menu li.sfHover ul {
	top:35px;
	left:0;
	z-index:999;
}
.sf-menu li:hover li ul, ul.sf-menu li.sfHover li ul {
	top:-999em
}
.sf-menu li.current, .sf-menu li:hover, .sf-menu li.sfHover {
	text-decoration:none;
}
.sf-menu li li a {
	display:block;
	margin:0;
	position:relative;
	text-decoration:none;
	font-size:12px;
	line-height:14px;
	color:#fff;
	overflow:hidden;
	padding:8px 5px 8px 15px;
	text-transform:uppercase;
	font-family: 'Open Sans', sans-serif;
	background:url(../images/sub-nav-tail.png);
}
.sf-menu li li > a:hover, .sf-menu li li.sfHover > a, .sf-menu li li.current > a {
	color:#afaa9b;
s
}
.sf-menu li li li a {
	background:url(../images/header-bg.png);
}
.sf-menu li li {
	float:none;
	position:relative;
	margin:0 0 1px 0;
}
.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul {
	left:186px;
	top:0;
}
/********************** Content ************************/

section#content {
	position:relative;
	z-index:1;
}
.content-bg {
	background:url(../images/body-bg.gif);
	padding:35px 0 43px;
}
.author {
	display:inline-block;
	font-family: 'Open Sans', sans-serif;
	color:#fff;
	font-size:14px;
	line-height:20px;
	font-weight:bold;
}
.author i {
	font-weight:normal;
}
.dropcap {
	float:left;
	font-family: 'Passion One', cursive;
	font-size:24px;
	line-height:30px;
	color:#b30404;
	margin:0 5px 0 0;
}
.price-list li {
	overflow:hidden;
	font-size:14px;
	line-height:18px;
	padding:0 0 12px 14px;
	background:url(../images/list-1-marker.gif) no-repeat 0 5px;
}
.price-list li .price-item {
	float:left;
	color:#717171;
	text-decoration:none;
	max-width:70%;
	margin:0 6px 0 0;
}
.price-list li .price-item:hover {
	color:#fff;
}
.price-list li .filler {
	display:block;
	background:url(../images/filler.gif) repeat-x 0 bottom;
	height:15px;
	overflow:hidden;
}
.price-list li .price {
	float:right;
	margin:0 0 0 6px;
	width:60px;
	text-align:left;
	color:#b30404;
}
.adress {
	padding:0 0 20px 0;
}
.adress dt {
	display:block;
	font-weight:normal;
	color:#717171;
	font-size:12px;
	line-height:18px;
	width:235px;
}
.adress dd {
	font-size:12px;
	line-height:18px;
	color:#717171;
	overflow:hidden;
}
.adress dd span {
	float:left;
	width:59px;
	text-align:right;
	margin:0 6px 0 0;
}
/******************** Footer ******************/
footer {
	color:#717171;
	font-size:12px;
}
.footer-bg {
	background:url(../images/body-bg.gif);
	padding:0 0 30px 0;
}
footer a {
	color:#717171;
}
.copyright {
	padding:5px 0 0 0;
}
.footer-logo {
	font-weight:normal;
	font-size:24px;
	line-height:30px;
	font-family: 'Passion One', cursive;
	color:#717171;
	margin:-7px 0 0 0;
	display:inline-block;
}
.footer-list li {
	background:url(../images/list-1-marker.gif) no-repeat 0 6px;
	font-size:12px;
	line-height:18px;
	padding:0 0 10px 14px;
}
.footer-list li a {
	color:#717171;
	text-decoration:none;
}
.footer-list li a:hover {
	color:#fff;
}
.social-list li {
	text-align:right;
	padding:5px 0 0 0;
}
.social-list li a {
	display:inline-block;
	width:27px;
	height:24px;
	background:#585858;
}
.social-list li a:hover {
	background:#b30404;
}
l
</style>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AgroPlus | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="main-bg">
  <!-- Header -->
  <header>
    <div class="inner">
      <h1 class="logo"><a href="index.html">AgroPlus - Agriculture company</a></h1>
      <nav>
        <ul class="sf-menu">
          <li><a href="index.html">home</a></li>
          <li><a href="products.html">products</a></li>
          <li> <a href="technology.html">technology</a>
            <ul>
              <li><a href="#">Maecenas faucibus</a></li>
              <li><a href="#">Fusce tincidunt</a></li>
              <li> <a href="#">tempor eros</a>
                <ul>
                  <li><a href="#">ut viverra</a></li>
                  <li><a href="#">hendrerit mauris</a></li>
                </ul>
              </li>
              <li><a href="#">mauris ut du</a></li>
            </ul>
          </li>
          <li><a href="pricing.html">pricing</a></li>
          <li class="current"><a href="contacts.html">contacts</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </header>
  <!-- Content -->
  <section id="content">
    <div class="container_24">
      <div class="wrapper">
        <div class="grid_24 content-bg">
          <div class="wrapper">
            <article class="grid_6 suffix_1 prefix_1 alpha">
              <h2>Contact info:</h2>
              <p class="p1"> <strong class="str-2"> AgroPlus </strong>
              <dl class="adress">
                <dt>8901 Marmora Road, Glasgow, D04 89GR</dt>
                <dd><span>Telephone:</span><b>+1 959 603 6035</b></dd>
                <dd><span>Fax:</span><b>+1 504 889 9898</b></dd>
                <dd><span>Email:</span><a href="#">mail@thomsander.com</a></dd>
              </dl>
              <dl class="adress">
                <dt>9863 Mill Road, Cambridge, MG09 99HT</dt>
                <dd><span>Telephone:</span><b>+1 959 603 6035</b></dd>
                <dd><span>Fax:</span><b>+1 504 889 9898</b></dd>
                <dd><span>Email:</span><a href="#">mail@thomsander.com</a></dd>
              </dl>
              <p></p>
            </article>
            <article class="grid_15 suffix_1 omega">
              <h2>Contact form:</h2>
              <form action="#" id="contact-form" method="post">
                <fieldset>
                  <label class="name"> <span>Full name:</span>
                    <input type="text">
                  </label>
                  <label class="email"> <span>Email:</span>
                    <input type="email">
                  </label>
                  <label class="message"> <span>Message:</span>
                    <textarea></textarea>
                  </label>
                  <div class="btns"> <a class="button">Clear</a> <a class="button">Send</a> </div>
                </fieldset>
              </form>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer>
    <div class="container_24">
      <div class="wrapper">
        <div class="grid_24 footer-bg">
          <div class="hr-border-2"></div>
          <div class="wrapper">
            <div class="grid_7 suffix_1 prefix_1 alpha">
              <div class="copyright"> &copy; 2012 <strong class="footer-logo">AgroPlus</strong>
                <div>Website Template by <a target="_blank" href="http://www.templatemonster.com/">Templatemonster.com</a></div>
              </div>
            </div>
            <div class="grid_4">
              <h5 class="heading-1">Archives:</h5>
              <ul class="footer-list">
                <li><a href="#">October 2012</a></li>
                <li><a href="#">September 2012</a></li>
                <li><a href="#">August 2012</a></li>
                <li><a href="#">July 2012</a></li>
              </ul>
            </div>
            <div class="grid_4">
              <h5 class="heading-1">Links:</h5>
              <ul class="footer-list">
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Suggest Ideas</a></li>
                <li><a href="#">Support Forum</a></li>
              </ul>
            </div>
            <div class="grid_4">
              <h5 class="heading-1">Support:</h5>
              <ul class="footer-list">
                <li><a href="#">Special Proposition</a></li>
                <li><a href="#">Free Phone</a></li>
                <li><a href="#">Solutions</a></li>
              </ul>
            </div>
            <div class="grid_2 suffix_1 omega">
              <ul class="social-list">
                <li><a href="#"><img src="images/social-icon-1.png" alt=""></a></li>
                <li><a href="#"><img src="images/social-icon-2.png" alt=""></a></li>
                <li><a href="#"><img src="images/social-icon-3.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
</body>
</html>

