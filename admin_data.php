<!DOCTYPE html>
<html>
 
<head>
    
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => scholar
        $conn = mysqli_connect("localhost", "root", "", "scholar");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO admin_login VALUES ('$username', 
            '$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.
                </h3>"; 
 
            echo nl2br("\n$username\n $password\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>