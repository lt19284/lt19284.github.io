<?php
@include 'config.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])){
   header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>English For Children</title>
</head>
<style>
    body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
  }
#menu-list {
	list-style: none;
	padding: 0;
}
#menu-list li {
	margin-bottom: 5px;
}
#menu-list a {
	text-decoration: none;
	color: #c4c5d1;
}

#menu-list a:hover {
	color: #f00;
}
  header {
	background-color: #3b3890;
	color: #fff;
	padding: 50px 0px;
	text-align: center;
  }
  
  nav ul {
	list-style: lower-roman;
	padding: 0;
	margin: 0;
  }
  
  nav li {
	display: inline;
	margin: 0 20px;
  }
  
  nav a {
	text-decoration: none;
	color: #fff;
  }
  .hero {
	background-image: url('hero-image.jpg');
	background-size: cover;
	background-position: center;
	color: #0c0505;
	text-align: center;
	padding: 100px 0;
  }
  
  .hero-content {
	max-width: 800px;
	margin: 0 auto;
  }
  
  .cta-button {
	display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
  }
  .cta-button:hover{
	background-color: #2980b9;
  }
  
  .section {
	padding: 50px 0;
  }
  
  .lessons, .games {
	background-color: #f0f0f0;
	text-align: center;
  }

  footer {
	background-color: #333;
	color: #fff;
	text-align: center;
	padding: 10px 0;
  }
  .nep1{
	background-color: var(--blue);
	background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);
	border-radius: 20px;
	border: 1px solid var(--blue);
	color: var(--white);
	cursor: pointer;
	font-size: 0.8rem;
	font-weight: bold;
	letter-spacing: 0.1rem;
	padding: 0.9rem 4rem;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
  }
  :root {
	/* COLORS */
	--white: #e9e9e9;
	--gray: #333;
	--blue: #0367a6;
	--lightblue: #008997;

	/* RADII */
	--button-radius: 0.7rem;

	/* SIZES */
	--max-width: 758px;
	--max-height: 420px;

	font-size: 16px;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
		Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
/* giao diện js */
img {
	vertical-align: middle;
}
.mySlides {
	display: none;
}
.container {
	position: relative;
}
.prev,
.next {
 cursor: pointer;
 position: absolute;
 top: 40%;
 width: auto;
 padding: 16px;
 margin-top: -50px;
 color: white;
 font-weight: bold;
 font-size: 20px;
 border-radius: 0 3px 3px 0;
 user-select: none;
 -webkit-user-select: none;
}
/* Position the "next button" to the right */
.next {
 right: 0;
 border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
 background-color: rgba(0, 0, 0, 0.8);
}
.niie{
	padding-right: 60%;
	width: 30%;
}
</style>
<body>
  <header>
<!-- giao diện js -->
    <h1 style="text-align:center">Welcome to English For Children</h1>
<div class="container">
 <div class="mySlides">
 <div class="numbertext"></div>
 <img src="https://nurtem.com/wp-content/uploads/2020/07/English-reading-overview.jpg" style="width:100%">
 </div>
 <div class="mySlides">
 <div class="numbertext"></div>
 <img src="https://channel.mediacdn.vn/2019/8/30/photo-1-1567102805856407666989.jpg" style="width:100%">
 </div>
 <a class="prev" onclick="plusSlides(-1)">❮</a>  
 <a class="next" onclick="plusSlides(1)">❯</a>
 <!-- Final -->
 <nav class="vertical-menu">
    <ul id="menu-list">
        <!-- Content -->
        <li class="nep1"><a href="<?php if (!isset($_SESSION['loggedin'])) { echo './login.php'; } else { echo './NEP1.php'; } ?>">NEP 1</a></li>
        <li class="nep1"><a href="<?php if (!isset($_SESSION['loggedin'])) { echo './login.php'; } else { echo './NEP2.php'; } ?>">NEP 2</a></li>
    </ul>
</nav>
  </header>
  <section class="hero">
    <div class="hero-content">
      <h2>Fun and Interactive English Learning</h2>
      <p>Join us for exciting lessons and games to learn English in a playful way!</p>
      <!-- Content -->
      <a href="login.php" class="cta-button">Get Started</a>
    </div>
  </section>
  <footer>
    <img class="niie" src="https://niie.edu.vn/wp-content/uploads/2022/04/logo-niie.png" alt="">
    <h3>Viện NIIE Nguyễn Tất Thành</h3>
    <p>Địa chỉ : 3F Đ. Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Thành phố Hồ Chí Minh, Việt Nam </p>
    <p>Email : nhathuan892@gmail.com</p>
    <p>SĐT : 0123456789</p>
    <p>&copy; 2023 English For Children. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
<script>
   const menuItems = document.querySelectorAll("#menu-list li");
menuItems.forEach(item => {
    item.addEventListener("click", () => {
        console.log(" Đã nhấp vào mục: ", item.textContent)
    });
});
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
 let dots = document.getElementsByClassName("demo");
 let captionText = document.getElementById("caption");
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
 captionText.innerHTML = dots[slideIndex-1].alt;
} 
</script>
</html>