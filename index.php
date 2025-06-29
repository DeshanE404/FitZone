<?php
session_start();
include('config.php'); // This must set up $dbh
include('include/header.php'); // Your header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym Management System</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Update path if needed -->
</head>
<div class="intro-box">
    <h1> Crush Your Limits, Own the Day</h1>
    <p>
        Unlock your potential with every rep. Our gym blends expert coaching, cutting-edge equipment, 
        and a motivating community to help you build strength, endurance, and confidence. Whether you're a beginner or an athlete, your fitness journey starts here. Train harder, live healthier, and achieve goals you never thought possible.
    </p>
</div>



<body>

<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="images/slide 1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="images/slide 2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="images/slide 3.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="images/slide 4.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="images/slide 5.jpg" style="width:100%">
    </div>

</div>
<br>

<!-- Slideshow Dots -->
<div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
</div>



<h2>Sri Lanka's Most rusted Fitness Trailblazers for Ten Years</h2>

<section>
    <h3>Pricing Plans</h3>
    <p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
</section>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<?php include('include/footer.php'); ?>
</body>
</html>
