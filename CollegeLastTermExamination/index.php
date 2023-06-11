<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #333;
  color: #f1f1f1;
}

/* Header */

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

/* Header */

/* NavigationBar */

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* NavigationBar */

/* Slideshow */

.mySlides {display: none}
/*img {vertical-align: middle;}
*/

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

/* Slideshow */

/* Title */

.titlebar{
    background-color: #333;
    text-align: center;
}

/* Title */

/* Article */


.ArticaleContainer{
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-size: 15px;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  width: 80%;
  padding: 22px;
  margin-left: 10%;
  text-align: center;
}

/* Article */

/* CustomButton */

.custombutton {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.custombutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.custombutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.custombutton:hover span {
  padding-right: 25px;
}

.custombutton:hover span:after {
  opacity: 1;
  right: 0;
}

/* CustomButton */

/* Card */

.Cardcontainer {
  position: relative;
  width: 50%;
}

.Cardimage {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.Cardmiddle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.Cardcontainer:hover .image {
  opacity: 0.3;
}

.Cardcontainer:hover .middle {
  opacity: 1;
}

.Cardtext {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

/* Card */

/* Article */

.ArticleTextContainer{
  position: relative;
  border-radius: 4px;
  background-color: #4f7bc2;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

/* Article */


</style>
</head>
<body>
 
<!-- Header -->

<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

<!-- Header -->

<!-- NavigationBar -->

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- NavigationBar -->

<!-- Title -->

<div class="titlebar">
 <h1>
    FLAVOUR TEXT
 </h1>
</div>

<!-- Title -->

<!-- Slideshow -->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="download.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="download.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="download.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!-- SlideShow -->

<!-- Title -->

<div class="titlebar">
 <h1>
    Πειρεάς 
 </h1>
</div>

<!-- Title -->

<!-- Article -->

 <div class="ArticaleContainer">
    <h1>
    Ο Πειραιάς (αρχαία ελληνικά: Πειραιεύς) είναι πόλη, τμήμα του Πολεοδομικού Συγκροτήματος Αθηνών-Πειραιώς, «η τρίτη πόλη της Ελλάδας μετά την Αθήνα και τη Θεσσαλονίκη» με δική της περιφερειακή αστική ζώνη, και έδρα του σημαντικότερου λιμανιού της Ελλάδας. Ο Δήμος Πειραιά, έχει σύμφωνα με την Απογραφή του 2011 έκταση 10,9 τ. χλμ. και πληθυσμό 163.688 κατοίκους.
    </h1>
 </div> 



<!-- Article -->

<!-- Title -->

<div class="titlebar">
 <h1>
    Πειρεάς 
 </h1>
</div>

<!-- Title -->



<!-- Card Article -->

 <div class ="ArticaleContainer">
 <div class="Cardcontainer">
  <img src="Εικόνα1.jpg" class="Cardimage" style="width:100%">
  <div class="Cardmiddle">
    <div class="Cardtext">John Doe</div>
  </div>
</div>
 <div class="ArticleTextContainer">
  <h1>
  Τα τείχη και οι πύλες του αρχαίου Πειραιά. Τα ερείπια των οχυρώσεων βρίσκονται σε καλή κατάσταση ως σήμερα. Το 493 π.Χ. ο Θεμιστοκλής ξεκίνησε την κατασκευή οχυρώσεων γύρω από τον Πειραιά. Οι δύο κύριες πύλες των οχυρώσεων βρίσκονται στην είσοδο της σύγχρονης πόλης στην οδό του 34ου Συντάγματος. Η Πύλη του Άστεως είναι η πιο δυτική πύλη, η οποία περικλείεται από τις οδούς Πύλης, Ομηρίδου, Σκλυλίτση και Κολοκοτρώνη. Ο κύριος δρόμος για τις μεταφορές προς την Αθήνα περνούσε μέσα από την Πύλη του Άστεως. Τα Μακρά Τείχη και η Μέση Πύλη. Ο σκοπός κατασκευής των Μακρών Τειχών ήταν η σύνδεση της Αθήνας με το επίνειό της. Τα Μακρά Τείχη (Βόρειο, Φαληρικό και το Μέσο ή Νότιο τείχος) δημιουργούσαν έναν ασφαλή διάδρομο ανάμεσα στην Αθήνα και τον Πειραιά για τον πληθυσμό της Αττικής κατά τον Πελοποννησιακό Πόλεμο. Η Μέση Πύλη, κοντά στην Πύλη του Άστεως, είναι πολύ παρόμοια με το Δίπυλον της Αθήνας, αλλά μικρότερη. Είχε κατασκευαστεί για διακίνηση χρησιμοποιώντας τον διάδρομο των Μακρών Τειχών. Η Ηετιώνεια Πύλη βρίσκεται στη βορεινή πλευρά του κύριου λιμένα, του Κάνθαρου, στην περιοχή της Δραπετσώνας. Το φρούριο της Ηετιωνείας κατασκευάστηκε με σκοπό τον έλεγχο του λιμανιού. Δύο τμήματα του τείχους ξεκινούν απ’ αυτή την πύλη. Η πρώτη στα ανατολικά προς τον λιμένα. Η δεύτερη προς τον εξωτερικό λιμένα. Δύο ισχυροί κυκλικοί πύργοι της ελληνιστικής περιόδου ορθώνονταν στα πλευρά της πύλης. Το τείχος προστατεύεται από μια βαθιά τάφρο σκαμμένη μέσα στον βράχο.
  </h1>
  </div>
 </div>


<!-- Card Article --> 

<!-- Title -->

<div class="titlebar">
 <h1>
    Go explore!
 </h1>
</div>

<!-- Title -->

<!-- Custombutton -->

<button class="custombutton" style="margin-left: 44.5%;"><span><a href="finalExaminationProject.html">Explore!</a> </span></button>

<!-- Custombutton -->


</body>
</html>