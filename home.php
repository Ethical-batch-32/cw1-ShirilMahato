<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<style>
   .text h1{
   position: absolute;
   color: white;
   font-size: 4.5rem;
   top: 65%;
   left: 50%;
   transform: translate(-50%, -50%);
   }
   @media only screen and (max-width: 1100px) {
 .text h1 {
    font-size: 30px;
  }
}
   @media only screen and (max-width: 600px) {
 .text h1 {
    font-size: 20px;
  }
}
   
</style>
<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="home.php" class="logo">LAPTOP STORE</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="product.php">products</a>
            <!-- <a href="buy.php">buy</a> -->
            <a href="sign.php">Login/Signup</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

<!-- home section starts  -->


<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/forHome.jpg) no-repeat">
         <div class="text">
            <h1>Welcome <br> to <br> Laptop Store</h1>
         </div>
        <span>
         <!-- <h3>Explore</h3> -->
        </span> 
            <!-- <div class="content">
               <span>explore, Choose, Buy</span>
               <h3>The best Device for You</h3>
               <a href="product.php" class="btn">discover more</a>
            </div> -->
         </div>




</section>


<!-- home about section starts 


<section class="home-about">

   <div class="image">
      <img src="images/buylap.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>At our company, we offer a wide variety of laptops for all types of needs and budgets. From lightweight
                and portable laptops for students, to high-performance laptops for professionals and gaming laptops for
                gamers. We also have budget-friendly options. Our team of experts can help you find the perfect laptop
                to meet your needs and we also offer accessories, financing options and fast shipping.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> products </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/lap1.png" alt="">
         </div>
         <div class="content">
         <h3>Apple MacBook Pro 16-inch</h3>
            <p>It is a macOS laptop with a 16.20-inch display that has a resolution of 3546x2234 pixels.</p>
            <p>RS 2,23,990</p>
            <a href="buy.php" class="btn">buy now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/lap2.png" alt="">
         </div>
         <div class="content">
         <h3>Apple MacBook Pro MVVK2LL</h3>
            <p>It is a macOS laptop with a 16.00-inch display that has a resolution of 3072x1920 pixels.</p>
            <p>RS 2,32,990</p>
            <a href="buy.php" class="btn">buy now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/lap3.png" alt="">
         </div>
         <div class="content">
         <h3>Apple MacBook Pro MVVJ2LL</h3>
            <p>It is a macOS laptop with a 16.00-inch display that has a resolution of 3072x1920 pixels.</p>
            <p>RS 1,99,900</p>
            <a href="buy.php" class="btn">buy now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="product.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 30% off</h3>
      <p>This offer is limited so do fast</p>
      <a href="buy.php" class="btn">buy now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="product.php"> <i class="fas fa-angle-right"></i> product</a>
         <a href="sign.php"> <i class="fas fa-angle-right"></i> Sigin/Signup</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 9844012345 </a>
         <a href="#"> <i class="fas fa-phone"></i> 9812345678 </a>
         <a href="#"> <i class="fas fa-envelope"></i> mahatoshiril@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> kathmandu, Nepal </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/shiril.mahato" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/shirilmahato/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/shiril-mahato-607211245/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
  let menuBtn = document.getElementById("menu-btn");
  let navLinks = document.querySelector(".navbar");
  
  menuBtn.addEventListener("click", function(){
    navLinks.classList.toggle("active");
  });
</script>

</body>
</html>