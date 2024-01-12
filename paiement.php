
<!DOCTYPE html>
<html lang="fr"> 
    <head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
     <link rel="stylesheet" href="css2/txt7.css"> 
    <title>HouCe Morocco</title>
      <script src="https://kit.fontawesome.com/fed3d7c8de.js" crossorigin="anonymous"></script>  
   </head>

   <body>
        <header >
             <ul class="header_menu">
            <li> <a href="#" id="woman-button">WOMAN</a></li>
            <li> <a href="#" id="man-button">MAN</a></li>
            <li> <a href="#" id="kids-button">KIDS</a></li>
           </ul>
           <img class="logo"    src="img2/houcelogo [Recovered].png">
           <div class="header_buttons">
           <!-- <a href="cart.php" id="shop-button">Bag (0)
                <i class="fa-solid fa-cart-shopping" style="color: #000000;" ></i>
                </a> -->
            <a href="#" id="search-button">SEARCH</a>
            <a href="login.php" id="login-button">LOG IN</a>
           
           </div>
        </header>
        <div class="woman" id="woman-content">
            <i class="fa-regular fa-circle-xmark woman__close" id="woman-close" style="color: #000000;"></i>
            <ul class="lista">
            <li><a href="#">Coats</a></li>
           <li> <a href="#">T-shirt</a></li>
           <li><a href="#">Pants</a></li> 
           <li> <a href="#">Sweaters</a></li>
           <li> <a href="#">Jeans</a></li>
            <li><a href="#">Pyjamas</a></li>
            <li><a href="#">Shoes</a></li>
           <li> <a href="#">Parfums</a></li>
        </ul>
        </div>
        <div class="search" id="search-content">   
        <i class="fa-regular fa-circle-xmark search__close" id="search-close" style="color: #000000;"></i>
            <form action="" class="search__form">
                <i class="fa-solid fa-magnifying-glass search__icon" style="color: #000000;"></i>
                    <input type="search" placeholder="Search for an item ,colour ,collection" class="search__input">
                    <button type="submit" value="search" id="login-button">Search</button>
        </form>
        </div>

    <!-- <div class="login grid" id="login-content">

        <i class="fa-regular fa-circle-xmark login__close" id="login-close" style="color: #000000;"></i>

        <form action="" class="login__form grid" metod="post">
            <h3 class="login__title"> LOG IN</h3>
           <div class="login__group grid">
            <div>
                <label for="login-email" class="login__label">Email</label>
                <input type="email" placeholder="Enter your email"  name="mail"
                id="login-email" class="login__input">
            </div>
            <div>
                <label for="login-pass" class="login__label">Password</label>
                <input type="password" placeholder="Enter your password"  name="password" 
                id="login-pass" class="login__input">
            </div>
           </div>
           <div> 
          
            <button type="submit" class="btn" name="login"> Log In</button><br><br>
          
            <span class="login__signup">
                You do not have an account ? 
                <a href="register.php">  Register now</a>
            </span>
           </div>

        </form> -->

        

<form method="post" action="">
 <div class="wrapper">
  <div class="payment">

    <h2>Payment Gateway</h2>
    <div class="form">
      <div class="card space icon-relative">
        <label for="nom" class="label">Card holder:</label>
        <input type="text" class="input" id="nom" placeholder="Coding Market" name="nom">
        <i class="fas fa-user"></i>
      </div>
      <div class="card space icon-relative">
        <label for="num" class="label">Card number:</label>
        <input type="text" id="num" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name="num">
        <i class="far fa-credit-card"></i>
      </div>
      <div class="card-grp space">
        <div class="card-item icon-relative">
          <label for="date" class="label">Expiry date:</label>
          <input type="text" id="date"  class="input"  placeholder="0000-00-00" name="date">
          <i class="far fa-calendar-alt"></i>
        </div>
        <div class="card-item icon-relative">
          <label for="cvc" class="label">CVC:</label>
          <input type="text" id="cvc" class="input" data-mask="000" placeholder="000" name="cvc">
          <i class="fas fa-lock"></i>
        </div> 
        
      </div>
      <div>
       <!-- <button type="submit" value="ok" class="btnpay" style="width=350px;" >Pay</button> -->
       <input type="submit" value="Pay" class="valid" > 
        <!-- <button class="btnpay" type="submit">Pay</button>  -->
        </div>
      
    </div>

  </div>
</div> 
</form>

<?php
    
if(isset($_POST['nom']) and isset($_POST['num']) and isset($_POST['date']) and isset($_POST['cvc']))
{
  if(!empty($_POST['nom']) and !empty($_POST['num']) and !empty($_POST['date']) and !empty($_POST['cvc']) )
  {
    try
    {
      global $bdd;
      $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
      
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
  $sql1="select * from coord_pay where card_N='".$_POST['num']."'";
  $reponse = $bdd->query($sql1);
    $donnees = $reponse->fetch();

    if(empty($donnees))
    {   
      $sql2="INSERT INTO coord_pay(cardholder, card_N, dateexpiry, cvc) values('".$_POST['nom']."','".$_POST['num']."','".$_POST['date']."','".$_POST['cvc']."')";
      $bdd->exec($sql2);
      echo"<center></center>";
    }
    else
    echo "<center></center>";
  } 
}


?>
             <footer class="contact">
            <div class="footer-list">
                <p class="footer-list-title title">Subscribe newsletter</p>
            <input type="email" name="email_address" placeholder="Enter your email address" 
           required autocomplete="off" class="input-field"><br>
           
           <button class="btn btn-secondary">Subscribe</button>
         
            </div>

            <div class="contact-info">    
         <div class="second-info">
                <h4>HELP</h4>
                <p>My Account</p>
                <p>My purchases</p>
                <p>Payement and Invoices</p>
                <p>Exchanges,Returns<br>
                     and Refunds</p>
                <p>Legal & Privacy</p>
                <p></p>
            </div>
            <div class="third-info">
                <h4>Shop</h4>
                <p>Women</p>
                <p>Men</p>
                <p>Baby</p>
                <p>Kids</p>
                <p>Beauty</p>
                <p>Sport</p>
            </div>
            <div class="fourth-info">
              <h4>Company</h4>
              <p>About Us</p>
              <p>Join Life</p>
              <p>Offices</p>
              <p>Stores</p>
            </div> 
            <div class="first-info">
                <h4>FOLLOW US!</h4>
                <div class="icons">   
                    <a href="#"><i class="fa-brands fa-facebook-f" style="color: #000000;"></i></a> 
                    <a href="#"><i class="fa-brands fa-instagram" style="color: #000000;"></i></a> 
                    <a href="#"><i class="fa-brands fa-x-twitter" style="color: #000000;"></i></a> 
                    <a href="#"><i class="fa-brands fa-pinterest" style="color: #000000;"></i></a> 
                    <a href="#"><i class="fa-brands fa-youtube" style="color: #000000;"></i></a>
                </div>
               
            </div>
        </div>

          <p class="copyright">&copy;2023 HouCe All rights is reserved </p>

    </footer> 
    <script src="java.js"></script>
                    
    </body>
</html>