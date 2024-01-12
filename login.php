
<!doctype html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="css2/txt4.css">
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
            <a href="#" id="search-button">SEARCH</a>
            <a href="#" id="login-button">LOG IN</a>
           
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


     <div class="container py-2"> 
        <div class="register grid"  id="login-content">
    
    <form method="post" class="register__form grid">
      <h4 class="register__title">LOGIN</h4>
      <div class="register__group grid">
      <div>
        <label class="register__label">Email :</label>
        <input type="text" class="register__input" placeholder="Enter your email" name="login">
      </div>
      <div>
        <label class="register__label">Password :</label>
        <input type="password"  name="password" placeholder="Enter your password" class="register__input">
      </div>
      </div>
      <button type="submit" value="ok" class="login__button button"  name="connexion"  >LOGIN</button>
        <!-- <input type="submit" value="LOGIN"  name="connexion" class="valid"> -->
        <span class="register__signup">
                You do not have an account ? 
                <a href="inscription.php">  Register now</a>
            </span>
    </form>
      </div>
    <?php
        if(isset($_POST['connexion'])){
            $login = $_POST['login'];
            $pwd   = $_POST['password'];
            $servername = "localhost";
	$dbname = "inscription";
	$username = "root";
	$password = "";

            if(!empty($login) && !empty($pwd)){
               try {
                  		$pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
                  	} catch (PDOException $exc) {
                  		echo $exc->getMessage();
                  		echo "bienn1";
                  		exit();
                  	}

                $sqlState = $pdo->prepare('SELECT * FROM utilisateur 
                                                WHERE email=?
                                                AND   password=?');
                $sqlState->execute([$login,$pwd]);
               //  echo $sqlState->rowCount();
                if($sqlState->rowCount()>=1){
                    $_SESSION['utilisateur'] = $sqlState->fetch();
                    header('location: index2.php');
                }else{
                    ?>
                      <center>  <div  class="alert alert-danger" role="alert">
                        Email or password incorrect.
                    </div>  </center>

                    <?php
                }
            }else{
                ?>
             <center>   <div class="alert alert-danger" role="alert">
                    Login , password sont obligatoires
                </div> </center>
                <?php
            }
        }
    ?>
    
</div>

      
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
