<?php

include '../backend/config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/css/style.css">

</head>
<body>
   
<?php include 'includes/header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="../images/grocery-items.jpeg" alt="">
      </div>

      <div class="content">
         <h3>Why eGrocery?</h3>
         <p>1. Freshness Intelligence: eGrocery curates produce straight from partner farms and co-ops, tagging each batch with harvest insights so you always know what is in season.<br>
         2. Entrepreneur Enablement: Our vendor console empowers small grocers with analytics, delivery planning, and financial literacy prompts to scale sustainably.<br>
         3. Climate-Conscious Deliveries: We cluster neighbourhood orders, promote reusable packaging, and reward customers who choose low-carbon delivery slots.<br>
         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customers's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="../images/my2.jpg" alt="">
         <p>"eGrocery made it easy to restock our hostel kitchenette. The freshness indicators and student delivery slots keep costs low while supporting local farms. We love the transparency!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Grace Nansubuga</h3>
      </div>

      <div class="box">
         <img src="../images/my5.png" alt="">
         <p>"Strong concept and community impact. Once the mobile app ships, eGrocery will be unstoppable. The team already iterates quickly on our feedback."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Brian Okello</h3>
      </div>

      <div class="box">
         <img src="../images/my3.avif" alt="">
         <p>"I onboarded as a vendor through eGrocery and immediately saw which products were trending. The analytics dashboard helps me plan stock and reduce waste."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amina Nakazibwe</h3>
      </div>

      <div class="box">
         <img src="../images/my.webp" alt="">
         <p>"The carbon rewards make the difference. Group deliveries earn us points we donate to the campus sustainability fund. It is a smart, purpose-driven system."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Samuel Ssekandi</h3>
      </div>

      <div class="box">
         <img src="../images/my4.avif" alt="">
         <p>"My family appreciates the traceability labels, and the kids enjoy choosing eco-friendly packaging. eGrocery is now our weekly ritual."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Joan Nabirye</h3>
      </div>

      <div class="box">
         <img src="../images/nigga.jpg" alt="">
         <p>"As an entrepreneur, I value how eGrocery pairs commerce with mentorship. The team links us with micro-financing partners and showcases our success stories."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Moses Kato</h3>
      </div>

   </div>



<?php include 'includes/footer.php'; ?>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>
