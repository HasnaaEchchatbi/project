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
        <header class="header">
             <ul class="header_menu">
                <li> <a href="#" id="woman-button">WOMAN</a></li>
                <li> <a href="#" id="man-button">MAN</a></li>
                <li> <a href="#" id="kids-button">KIDS</a></li>
           </ul>
           <img class="logo"    src="img2/houcelogo [Recovered].png">
           <div class="header_buttons">
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
                <form action="" method="post" class="search__form">
                    <i class="fa-solid fa-magnifying-glass search__icon" style="color: #000000;" name="submit"></i>
                        <input name="mc" type="search" placeholder="Search for an item ,colour ,collection" class="search__input" >
                    <button type="submit" value="search" id="login-button">Search</button>
                    </form>
            </div>
    
        <!-- <div class="login grid" id="login-content">
            <i class="fa-regular fa-circle-xmark login__close" id="login-close" style="color: #000000;"></i>
    
            <form action="" class="login__form grid">
                <h3 class="login__title"> LOG IN</h3>
               <div class="login__group grid">
                <div>
                    <label for="login-email" class="login__label">Email</label>
                    <input type="email" placeholder="Enter your email" 
                    id="login-email" class="login__input">
                </div>
                <div>
                    <label for="login-pass" class="login__label">Password</label>
                    <input type="passwors" placeholder="Enter your password" 
                    id="login-pass" class="login__input">
                </div>
               </div>
               <div>
                <button type="submit" class="login__button button"> Log In</button><br><br>
                <span class="login__signup">
                    You do not have an account ? <a href="register_form.html">Sign Up</a>
                </span>
               </div>
    
            </form>
        </div> -->


        <?php
             $bdd = new PDO("mysql:host=localhost;dbname=inscription",'root','');
	if(isset($_POST['mc'])) // variable existant
	{
		if(!empty($_POST['mc'])) //champs non vide
		{
			
			$sql1="select * from produit where 
		 nom='".$_POST['mc']."' ";
			$reponse = $bdd->query($sql1);
			$nbrDeLigne = $reponse->rowCount();

				while($enreg = $reponse->fetch())
				{
				?>
				<div id="product" class="produit" style="margin-top: 100px;">
						  <img width="300" height="400" src="<?php echo $enreg['photo'] ?>" /><br/>
						  <?php echo $enreg['nom'];?><br/>
						  <?php echo "$".$enreg['prix'];?><br/>
						  
				  </div>
			   <?php } }}?>
       
    

        <div class="center-text">
                <h2>PARTY</h2>
            </div> 
        <section class="trending products" id="trending">
          
            <div class="products">
                <div class="row" onclick="window.location.href=''">
                    <img src="img2/img3m.jpg" alt="">
                    
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Navy blue dress</h4>
                        <p> $50.50</p>
                    </div>
                </div>
                <div class="row"  onclick="window.location.href='p7.php'">
                    <img src="img2/img1m.jpg" alt="">
                    <div class="products-text">
                        <h5>NEW</h5>
                    </div>
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Pearl long dress</h4>
                        <p> $60.50</p>
                    </div>
                </div>
                <div class="row"  onclick="window.location.href='p6.php'">
                    <img src="img2/img4m.jpg" alt="">
                    
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Mint-green dress</h4>
                        <p> $70.50</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img7m.jpg" alt="">
                    
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Green dress</h4>
                        <p> $60.00</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img5m.jpg" alt="">
                    <div class="products-text">
                        <h5>Sale</h5>
                    </div>
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>White dress</h4>
                        <p> $30.00</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img2m.jpg" alt="">
                  
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Navy blue long dress</h4>
                        <p> $60.50</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img6m.jpg" alt="">
                    
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Black dress</h4>
                        <p> $20.00</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img8m.jpg" alt="">
                    <div class="products-text">
                        <h5>Sale</h5>
                    </div>
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Olive-green dress</h4>
                        <p> $90.50</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img11m.jpg" alt="">
                    <div class="products-text">
                        <h5>Sale</h5>
                    </div>
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Ginger-orange dress</h4>
                        <p> $60.00</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img9m.jpg" alt="">
                   
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Gray dress</h4>
                        <p> $40.50</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img12m.jpg" alt="">
                    <div class="products-text">
                        <h5>NEW</h5>
                    </div>
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Beige satin dress</h4>
                        <p> $30.00</p>
                    </div>
                </div>
                <div class="row">
                    <img src="img2/img10m.jpg" alt="">
                    
                    <div class="heart-icon">
                        <i class="fa-regular fa-heart" style="color: #000000;"></i> 
                    </div>
                    <div class="ratting">
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-regular fa-star" style="color: #000000;"></i>
                        <i class="fa-solid fa-star-half-stroke" style="color: #000000;"></i>
                    </div>
                    <div class="price">
                        <h4>Beige dress</h4>
                        <p> $60.50</p>
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
    <script src="java.js"></script>
        </body>
        </html>