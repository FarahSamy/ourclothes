<?php

include 'config.php';

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
   <link rel="shortcut icon" type="image" href="https://github.githubassets.com/pinned-octocat.svg" >
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoviBhtl-pxhe1KHxsbbYRzpFXXIcTVYekRA&usqp=CAU);" >
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/zz.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us!!??</h3>
         <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos natus nostrum atque minima quas molestias vel enim quod, tempore assumenda, doloribus facilis iste, repellat amet vero iusto aspernatur aut ipsum libero. Debitis odio dolore et quae accusamus nemo unde est neque atque laudantium voluptatem, porro dolorum, eveniet repudiandae laborum repellat tempora, officia blanditiis eos! Facilis cumque, nam quod neque nulla magni officiis exercitationem dignissimos fugit unde delectus qui quia architecto sint repellendus modi vero temporibus doloremque rem distinctio laboriosam repudiandae. Unde illo est maxime commodi quis impedit eius laborum sunt enim iste sapiente voluptates aliquam culpa aperiam odio perferendis consectetur dolore vero, excepturi animi error sequi vel. Consectetur laborum quae hic quibusdam omnis possimus id ab nobis incidunt? Voluptatum, fugiat!</p>
         <a href="contact.php" class="btn"style="background-color:  #00a8e2;">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/alexander.jfif" alt="">
         <p>Nobody likes to spend money on a new book only to face that overwhelming feeling of disappointment when it doesn't live up to your expectations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexander Felming</h3>
      </div>

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, saepe at. Recusandae, labore temporibus! Aut?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>issac</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium sit a ut voluptatibus inventore.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>ELdoc</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I think I was about 35 when I reached the same conclusion as the crime writer Mark Billingham: if you’re not enjoying a book after the first 20 pages, give up.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alexis</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>All the evidence suggests he wasn’t just trying to sound kooky or clever. Interviewing Bowie on the set of his film The Man Who Fell to Earth in 1975.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John dark</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>In recent days, however, the author behind bestsellers such as Misery, Carrie and The Stand heard a story he found truly shocking. Maine’s largest newspaper, the Portland Press Herald, would no longer be running reviews of works by local authors.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title"> Producers</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Peter parker</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tomas shelpy</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Thor</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Black panther</h3>
      </div>

      <div class="box">
         <img src="images/alexander.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Alexander felming 1928</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Null</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>