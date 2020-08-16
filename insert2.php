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
			 
			 //insert the recod 
	
			if (isset($_POST['name1']) && isset($_POST['Select1'])&& isset($_POST['Select2']) && isset($_POST['cus']))
			{
				$sql="INSERT INTO Products (Name,count_of_product,price,coustumer)VALUES('$_POST[name1]','$_POST[Select1]','$_POST[Select2]','$_POST[cus]')";
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