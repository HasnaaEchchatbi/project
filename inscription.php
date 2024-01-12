
<!DOCTYPE html>
<html lang="fr"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <link rel="stylesheet" href="css2/txt4.css">
    <title>HouCe Morocco</title>
      <script src="https://kit.fontawesome.com/fed3d7c8de.js" crossorigin="anonymous"></script>  
    
    <script language="JavaScript">
       
       function verification() {
            if (document.getElementById("nom").value == "") { alert("Veuillez taper votre nom!"); return false;}
       
    
            if (document.getElementById("eml").value == "") { alert("Veuillez entrer votre adresse e-mail!"); return false;}
           if (document.getElementById("eml").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }    
        }
    </script>
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

  

	<div class="register grid" id="register-content">

   <form id="formulaire_test" action="" method="post" onSubmit="verification()" class="register__form grid">
<h2 class="register__title">Register</h2><br>
 
 <div class="register__group grid">
	<div>
<label for="nom" class="register__label">Name :</label> 
 <input type="text"  id="nom" name="nom" placeholder="Enter your  name" class="register__input">
	</div>
	<div>

  <label for="eml" class="register__label">Email :</label>
 <input type="text"  name="eml" id="eml" placeholder="Enter your email" class="register__input" > 
	</div>
	<div>
<label for="pass" class="register__label">password:</label>
 <input type="password"  name="pass" id="pass" placeholder="Enter your password" class="register__input"> 
</div>
	</div>

 <button type="submit" value="ok" class="login__button button" >Register</button>
 <span class="register__signup">
                Already have an account ? 
                <a href="login.php">  Login now</a>
            </span>

 </form>
	</div>
 <?php

    
	if(isset($_POST['nom']) and isset($_POST['pass']) and isset($_POST['eml']))
	{
		if(!empty($_POST['nom']) and !empty($_POST['pass']) and !empty($_POST['eml']))
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
		$sql1="select * from utilisateur where email='".$_POST['eml']."'";
		$reponse = $bdd->query($sql1);
	    $donnees = $reponse->fetch();
	
			if(empty($donnees))
			{   
				$sql2="insert into utilisateur(nom, email, password) values('".$_POST['nom']."','".$_POST['eml']."','".$_POST['pass']."')";
				$bdd->exec($sql2);
				echo"<center>Your account has been created successfully</center>";
			}
			else
			echo "<center>User has already exist !!!</center>";
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






 
        

        
        
    
                
            
        
        

