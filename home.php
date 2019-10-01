<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rangers of Nature Worldwide</title>

    <!-- menyisipkan bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di Rangers of Nature Worldwide</h1>
                        <p>Bergabunglah untuk menjaga bumi ini bersama...</p>
                    </div>
                    <div class="col-md-4">
                        <a href="timeline.php" class="btn btn-secondary">Timeline</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img img-responsive" src="img/ronw.png" />
                </div>
            </div>
        </div>
    </section>

<center>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="img/1.jpg" style="width:100%">
  <a href="https://www.liputan6.com/bisnis/read/4073898/ada-karhutla-pencarian-sumber-migas-tetap-lancar">Kebakaran Hutan</a>
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <img src="img/3.jpg" style="width:100%">
  <a href="https://news.detik.com/berita-jawa-timur/d-3647930/4-kecamatan-di-kabupaten-kediri-rawan-kekeringan">Kekeringan Melanda</a>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div class="card-body p-3">

<h5 id="instance-6871-header" class="card-title d-inline">Kalender</h5>


<div class="card-text content mt-3">
<div id="calendar-month-2019-September-5d8f6f95356e65d8f6f9525db93" data-template="core_calendar/month_mini" data-includenavigation="true" data-mini="true">
<div id="month-mini-2019-September-1" class="calendarwrapper" data-courseid="1" data-categoryid="0" data-month="9" data-year="2019" data-view="month">


<span class="overlay-icon-container hidden" data-region="overlay-icon-container">


<span class="loading-icon icon-no-margin">

<i class="icon fa fa-circle-o-notch fa-spin fa-fw " aria-hidden="true" title="Memuat" aria-label="Memuat"></i>
</span>
</span>
<table class="minicalendar calendartable">
<caption class="calendar-controls">
    <a href="#" class="arrow_link previous" title="Previous month" data-year="2019" data-month="8">
        <span class="arrow">◄</span>
    </a>
    <span class="hide"> | </span>
    <span class="current">
        <a href="https://elearning.umsida.ac.id/calendar/view.php?view=month&amp;time=1567270800" title="Bulan ini">September 2019</a>
    </span>
    <span class="hide"> | </span>
    <a href="#" class="arrow_link next" title="Bulan depan" data-year="2019" data-month="10">
        <span class="arrow">►</span>
    </a>
</caption>
<thead>
<tr>
    <th class="header text-xs-center" scope="col">
        <abbr title="Senin">Sen</abbr>
    </th>
    <th class="header text-xs-center" scope="col">
        <abbr title="Selasa">Sel</abbr>
    </th>
    <th class="header text-xs-center" scope="col">
        <abbr title="Rabu">Rab</abbr>
    </th>
    <th class="header text-xs-center" scope="col">
        <abbr title="Kamis">Kam</abbr>
    </th>
    <th class="header text-xs-center" scope="col">
        <abbr title="Jum'at">Jum</abbr>
    </th>
    <th class="header text-xs-center" scope="col">
        <abbr title="Sabtu">Sab</abbr>
    </th>
    <th class="header text-xs-center" scope="col">
        <abbr title="Minggu">Ming</abbr>
    </th>
</tr>
</thead>
<tbody>
<tr data-region="month-view-week">
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="day text-center weekend" data-day-timestamp="1567270800">                            1
            </td>
</tr>
<tr data-region="month-view-week">
        <td class="day text-center" data-day-timestamp="1567357200">                            2
            </td>
        <td class="day text-center" data-day-timestamp="1567443600">                            3
            </td>
        <td class="day text-center" data-day-timestamp="1567530000">                            4
            </td>
        <td class="day text-center" data-day-timestamp="1567616400">                            5
            </td>
        <td class="day text-center" data-day-timestamp="1567702800">                            6
            </td>
        <td class="day text-center weekend" data-day-timestamp="1567789200">                            7
            </td>
        <td class="day text-center weekend" data-day-timestamp="1567875600">                            8
            </td>
</tr>
<tr data-region="month-view-week">
        <td class="day text-center" data-day-timestamp="1567962000">                            9
            </td>
        <td class="day text-center" data-day-timestamp="1568048400">                            10
            </td>
        <td class="day text-center" data-day-timestamp="1568134800">                            11
            </td>
        <td class="day text-center" data-day-timestamp="1568221200">                            12
            </td>
        <td class="day text-center" data-day-timestamp="1568307600">                            13
            </td>
        <td class="day text-center weekend" data-day-timestamp="1568394000">                            14
            </td>
        <td class="day text-center weekend" data-day-timestamp="1568480400">                            15
            </td>
</tr>
<tr data-region="month-view-week">
        <td class="day text-center" data-day-timestamp="1568566800">                            16
            </td>
        <td class="day text-center" data-day-timestamp="1568653200">                            17
            </td>
        <td class="day text-center" data-day-timestamp="1568739600">                            18
            </td>
        <td class="day text-center" data-day-timestamp="1568826000">                            19
            </td>
        <td class="day text-center" data-day-timestamp="1568912400">                            20
            </td>
        <td class="day text-center weekend" data-day-timestamp="1568998800">                            21
            </td>
        <td class="day text-center weekend" data-day-timestamp="1569085200">                            22
            </td>
</tr>
<tr data-region="month-view-week">
        <td class="day text-center" data-day-timestamp="1569171600">                            23
            </td>
        <td class="day text-center" data-day-timestamp="1569258000">                            24
            </td>
        <td class="day text-center" data-day-timestamp="1569344400">                            25
            </td>
        <td class="day text-center" data-day-timestamp="1569430800">                            26
            </td>
        <td class="day text-center" data-day-timestamp="1569517200">                            27
            </td>
        <td class="day text-center today weekend" data-day-timestamp="1569603600">


<a id="calendar-day-popover-link-1-2019-270-1" href="https://elearning.umsida.ac.id/calendar/view.php?view=day&amp;time=1569603600" data-container="body" data-toggle="popover" data-html="true" data-trigger="hover" data-placement="top" data-title="Today Saturday, 28 September" data-alternate="Tidak ada acara" data-original-title="" title="">28</a>
<div class="hidden">

                    </div>
</td>
        <td class="day text-center weekend" data-day-timestamp="1569690000">                            29
            </td>
</tr>
<tr data-region="month-view-week">
        <td class="day text-center" data-day-timestamp="1569776400">                            30
            </td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
        <td class="dayblank">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</center>
</body>

<footer id="footer" class="page-footer unique-color-dark mt-4">
  <div class="info-color-dark text-center py-4">
    <!--Newsletter-->
    <a href="tentang.php" class="btn btn-info" role="button">Tentang Kami</a>
    <a href="kontak.php" class="btn btn-info" role="button">Hubungi Kami</a>
    </div>
</footer>

<div class="footer-copyright py-3 text-center">
    &copy; 2019, Us to Earth
  </div>

</html>