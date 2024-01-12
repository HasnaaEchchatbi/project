<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/8f27d68390.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css2/txt8.css" />
    <title>HouCe Morocco</title>
    <script src="https://kit.fontawesome.com/fed3d7c8de.js" crossorigin="anonymous"></script>  
  </head>
  <body>
    <header>
            <ul class="header_menu">
            <li> <a href="#" id="woman-button">WOMAN</a></li>
            <li> <a href="#" id="man-button">MAN</a></li>
            <li> <a href="#" id="kids-button">KIDS</a></li>
            </ul>
             <img class="logo"    src="img2/houcelogo [Recovered].png">
           <div class="header_buttons">
            
              <div class="cart-box"> 
                 <div class="cart-icon">
                       <i class="fas fa-cart-arrow-down fa-2x"></i>
              <a href="#" id="search-button">SEARCH</a> 
                 <a href="login.php" id="login-button">LOG IN</a>
                 </div>
                    <!-- showshop -->
                   <div class="whole-cart-window hide">
                        <h2>Shopping Bag</h2>
                        <div class="cart-wrapper"></div>
                        <div class="subtotal">Subtotal: $0.00</div>
                        <!-- <div class="checkout">Checkout</div>  -->
                      
                         <div class="view-cart" onclick="window.location.href='paiement.php'">Go to pay</div>
                        
                   </div>
              </div>
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

 

    <section class="shop-section">
      <div class="card-wrapper">
        <div data-id="4" class="card-item" >
        <img src="img2/img4m.jpg" alt="" >
          <div class="details">
             <h3>Mint-green dress</h3>
             <p>
              <span></span >
              <span class="price">Price: $70.50</span><br>
              <select >
                        <option>select size </option>
                        <option>S </option>
                        <option>M </option>
                        <option>L</option>
                        <option>XL </option>
                        <option>XXl </option>
                     </select><br><br>
                     <button type="submit" value="ok" class="add-to-cart-btn"  name="connexion"  >Add To Cart</button>
            </p>
          </div>
        </div>
       
       </div>
    </section>

    <script src="java.js"></script>
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
    
                    
    </body>
</html>
 