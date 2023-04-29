<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
   <div class="header-1" >
       
    

       
   </div>

   <div class="header-2">
  
      <div class="flex">
         <a href="home.php" class="logo">OUR CLOTHES</a>

         <nav class="navbar">
            <a href="home.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">Home</a>
            <a href="about.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">About</a>
            <a href="shop.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">Shop</a>
            <a href="contact.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">Contact</a>
            <a href="orders.php"onMouseOver="this.style.padding='1em'"
         onMouseOut="this.style.padding=' 0em'">Orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"onMouseOver="this.style.padding='0.5em'"
         onMouseOut="this.style.padding=' 0em'"></a>
            <div id="user-btn" class="fas fa-user"onMouseOver="this.style.padding='0.5em'"
         onMouseOut="this.style.padding=' 0em'"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"onMouseOver="this.style.padding='0.5em'"
         onMouseOut="this.style.padding=' 0em'"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>