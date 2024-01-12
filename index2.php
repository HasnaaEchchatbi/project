


<!DOCTYPE html>
<html lang="fr"> 
    <head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="css2/text.css">
    <title>HouCe Morocco</title>
      <script src="https://kit.fontawesome.com/fed3d7c8de.js" crossorigin="anonymous"></script>  
   </head>
    <body>
        <header >
           
        <nav class="navbar" >
        <a href="#" class="toggle-button" id="#menu-icon">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
             <ul class="header_menu">
            <li> <a href="#" id="woman-button">WOMAN</a></li>
            <li> <a href="#" id="man-button">MAN</a></li>
            <li> <a href="#" id="kids-button">KIDS</a></li>
           </ul>
        </nav>
           <img class="logo"    src="img2/houcelogo [Recovered].png">
           <div class="header_buttons">
            <a href="#" id="search-button">SEARCH</a>
            <a href="login.php" id="login-button" class="item">LOG IN</a>
           
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

        <!-- login -->
        <!-- <div class="login grid" id="login-content">
        <i class="fa-regular fa-circle-xmark login__close" id="login-close" style="color: #000000;"></i>
        <form  class="login__form grid" metod="post" >
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
             <button type="submit" class="login__button button" name="login" > Log In</button><br><br> 
            <input type="submit" value="Envoyer" name="login" >
          
            <span class="login__signup">
                You do not have an account ? 
                <a href="inscription.php">  Register now</a>
            </span>
           </div>

        </form>
        </div> -->

    <!-- body -->
        <section class="home">

            <div class="premier" >
                <img class="photo" src="img2/pexels-godisable-jacob-953266.jpg" width="100%"  height="400px">
                <div class="titre">
                <h3>NEW IN</h3>
                <a href="New.php">
                <button class="btn"><span> view Now</span> </button></a>
               </div>
            </div>
            
 
            <div class="second" >
                
                <img class="photo" src="img2/pexels-cottonbro-studio-3419673.jpg" width="100%"  height="400px" >
                 <div class="titre-2">
                <h3>Party</h3>
                <a href="party.php">
                <button class="btn"><span> view Now</span> </button></a>
            </div> 
            </div> 
            <div class="third" >
                
                <img class="photo" src="img2/pretty-curly-brunette-fitness-woman.jpg" width="100%"  height="400px" >
                 <div class="titre-3">
                <h3>Sportswear</h3>
                <a href="sportswear.php">
                <button class="btn"><span> view Now</span> </button></a>
            </div> 
            </div> 
            <div class="" >
                
                <img class="photo" src="img2/jewelry.jpg"  >
                 <div class="titre-3">
                <h3>Jewelry</h3>
                <a href="jewelry.php">
                <button class="btn"><span> view Now</span> </button></a>
               </div> 
               </div>
               <div class="" >
               <img class="photo" src="img2/beauty-portrait-mystery-smiling-ginger-woman-with-long-hair-posing-sideways-looking.jpg"  >
                 <div class="titre-3">
                <h3>Beauty</h3>
                <a href="beauty.php">
                <button class="btn"><span> view Now</span> </button></a>
               </div> 

            </div> 

            <div class="fourth" >
                
                <img class="photo" src="img2/pexels-cottonbro-studio-9168243.jpg" width="100%"  height="400px" >
                 <div class="titre-4">
                <h3>Bags</h3>
                <a href="bags.php">
                <button class="btn"><span> view Now</span> </button></a>
            </div> 
            </div> 
            <div class="five" >
                
                <img class="photo" src="img2/side-view-woman-posing-with-high-heels.jpg" width="100%"  height="400px" >
                 <div class="titre-5">
                <h3>Footwear</h3>
                <a href="footwear.php">
                <button class="btn"><span> view Now</span> </button></a>
            </div> 
            </div> 
          
</section>
            
               <section class="section-category" aria-label="category">
               <div class="container">
                <h2 class="h2 section-title">
                    <span class="span">Top</span> categories
                </h2>
                <ul class="has-scrollbar">
                    <li class="scrollbar-item">
                        <div class="category-card">
                           <figure class="card-banner img-holder" style="--width:330 ;--height:300 ;">
                            
                        <img src="img2/suit.jpg" alt="Suit" width="330" height="300" loading="lazy" class="img-cover">
                          </figure>
                        </div>
                         <h3 class="h3">
                            <a href="suit.php" class="card_title">Suit</a>
                        </h3>
                    </li>
                    <li class="scrollbar-item">
                        <div class="category-card">
                           <figure class="card-banner img-holder" style="--width:330 ;--height:300 ;">
                        <img src="img2/dresses.jpg" alt="Dresses" width="330" height="300" loading="lazy" class="img-cover">
                        </figure>
                       
                        </div>
                         <h3 class="h3">
                            <a href="dress.php" class="card_title">Dresses</a>
                        </h3>
                    </li>
                    <li class="scrollbar-item">
                        <div class="category-card">
                           <figure class="card-banner img-holder" style="--width:330 ;--height:300 ;">
                        <img src="img2/underwear.jpg" alt="Underwear" width="330" height="300" loading="lazy" class="img-cover">
                        </figure>
                       
                        </div> <h3 class="h3">
                            <a href="underwear.php" class="card_title">Underwear</a>
                        </h3>
                    </li>
                    <li class="scrollbar-item">
                        <div class="category-card">
                           <figure class="card-banner img-holder" style="--width:330 ;--height:300 ;">
                        <img src="img2/pyjamas.jpg" alt="Pyjammas" width="330" height="300" loading="lazy" class="img-cover">
                        </figure>
                        
                        </div><h3 class="h3">
                            <a href="pyjama.php" class="card_title">Pyjamas</a>
                        </h3>
                    </li>
                    <li class="scrollbar-item"> 
                        <div class="category-card">
                           <figure class="card-banner img-holder" style="--width:330 ;--height:300 ;">
                        <img src="img2/tshirt.jpg" alt="T-shirts" width="330" height="300" loading="lazy" class="img-cover">
                        </figure>
                        
                        </div><h3 class="h3">
                            <a href="tshirt.php" class="card_title">T-shirts</a>
                        </h3>
                    </li>
                </ul>
            </div> 
        </section>
        <!-- footer -->
      
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