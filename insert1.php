<html>
    <head> 
	 
	 </head>
	 <body>
	 <h1>mysql <h1>
	 <?php
		 $servername ="localhost";
		 $username="root";
		 $password ="";
		 $dbname ="MyOtis";
		 
		 //creat connection
		 $conn = new mysqli($servername,$username,$password,$dbname);
		 
		// check connection
		  if ($conn->connect_error) {
			  die(" connection failed " . $conn->connect_error);
		  }
		     echo "connected successfully";
	 
			 //creat database
		/* 
		 $sql="CREATE DATABASE myOtis";
		 if($conn->query($sql)=== TrUE){
			    echo "Database created successfully ";
		 }
			else
				 echo "Error creating database :" .$conn->error;

		*/   
		
		
		
		//sql to creat table
		/* 
		 $sql= "CREATE TABLE MyAccount(
		 coustumer_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		 firstname VARCHAR(30) NOT NULL,
		 lastname  VARCHAR(30) NOT NULL,
		 email VARCHAR(50)NOT NULL,
		 password  VARCHAR (8) NOT NULL,
         phone_numbers INT(10),
         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
		if($conn->query($sql)=== TrUE){
			     echo "Table MyAccount created successfully ";
			  }
			else { echo "Error creating Table :" .$conn->error;}
		*/

         // create connection to myOtis 
		/*
		$sql="INSERT INTO MyAccount (firstname,lastname,email,password,phone_numbers)VALUES ('Marawn','Ali','marwan@gmail.com','12345678','0558522222');";
        $sql.="INSERT INTO MyAccount(firstname,lastname,email,password,phone_numbers)VALUES('Ibrahim','Mohd','ibra@hotmail.com','8764321','0551111122');"; 
        $sql.="INSERT INTO MyAccount (firstname,lastname,email,password,phone_numbers)VALUES ('Faisal','Ali','faisal@gmail.com','01234567','0551155122')"; 			 
	       if ($conn->multi_query($sql)===TrUE){
                      $last_id=$conn->insert_id;
			     echo "you sign up successfully.";
			}else{
				echo "Error:".$sql."<br>".$conn->error;
			 }		
       */
	     //insert the recod 
	
			if (isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['email'])&& isset($_POST['psw'])&& isset($_POST['phone']))
			{
				$sql="INSERT INTO MyAccount (firstname,lastname,email,password,phone_numbers)VALUES('$_POST[f_name]','$_POST[l_name]','$_POST[email]','$_POST[psw]','$_POST[phone]')";
			 if ($conn->query($sql)===TrUE){
                      $last_id=$conn->insert_id;
			     echo "New record created successfully.<br/>";
			}else{
				echo "Error:".$sql."<br>".$conn->error;
				
			 }
			}
			

		   $conn->close();
			
	        ?>	
 </body>	
</html> 