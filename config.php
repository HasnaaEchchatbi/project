 <?php
//  $con = mysqli_connect("localhost","root","","user_form") or die("couldn't connect");
 
  



 function connexion(){

	
	
	$servername = "localhost";
	 $dbname = "inscription";
	 $username = "root";
	 $password = "";
 	try
 	{
 		global $pdo;
		 $pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
		 echo"database connected";


	
		
 	}
 	catch (Exception $e)
 	{
 			die('Erreur : ' . $e->getMessage());
 	}
 }





?>
 
