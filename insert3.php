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
			 
			 $sql="SELECT FROM Myaccount INNER JOIN Products  ON Myaccount.Coustomers_ID = Products.Products_ID";
			 $result =$conn->query($sql);
			 if ($result-> num_rows > 0) {
                   // output data of each row
                  while($row = $result->fetch_assoc()) {
                        echo  " Customers_ID: " . $row["Coustomers_ID"]. "ProductsID " . $row["Products_ID"]. "<br>";
              }
             } else {
                      echo "0 results";
               }
			  

			  $conn->close();
			  ?>