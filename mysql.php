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
		 coustumer_ID UNSIGNED AUTO_INCREMENT PRIMARY KEY,
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
		
	 //sql to creat table
	 /*
		$sql= "CREATE TABLE Products(
		product_ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		Name VARCHAR(30)NOT NULL,
		count_of_product INT(2)NOT NULL,
        price VARCHAR(20)NOT NULL,
		coustumer INT (6)UNSIGNED NOT NULL ,
		FOREIGN KEY(coustumer) REFERENCES MyAccount(coustumer_ID))";
	
		
         if($conn->query($sql)=== TrUE){
			     echo "Table Products created successfully ";
			  }
			else { echo "Error creating Table :" .$conn->error;}	
      
	*/
		//sql to creat table
		$sql= "CREATE TABLE orders(
		orders_ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		coustumer_id INT (6)UNSIGNED NOT NULL ,
		FOREIGN KEY(coustumer_id) REFERENCES MyAccount(coustumer_ID),
		product_id INT UNSIGNED NOT NULL,
		FOREIGN KEY(product_id) REFERENCES Products(product_ID),
        counts INT(2)NOT NULL)";
		
         if($conn->query($sql)=== TrUE){
			     echo "Table orders created successfully ";
			  }
			else { echo "Error creating Table :" .$conn->error;}	
      
      
	   
				$conn->close();
			
	        ?>	 
	</body>
	 
	 
	
</html>	