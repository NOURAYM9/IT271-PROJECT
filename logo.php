<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
			$conn = new PDO("mysql:host=$servername;dbname=abaya", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully";

		  
	if(isset($_POST['ok']))
	{
        $email=$_POST['email'];
		$pass=$_POST['pass'];
        var_dump($_POST);
        if(!empty($_POST['email']))
		{
			if(!empty($_POST['pass']))
			{				
                $sql = "INSERT INTO users (email, pass)
                VALUES ('$email', '$pass')";

                
							   
            }
            else
            {			
                echo "Insert user password";
            }
        }
        else
        {
            echo "Insert user Email";
        }
    }
		   
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>