<?php
$servername = "localhost";
$username = "root";
$password = "";
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$msg ='';
try {
			$conn = new PDO("mysql:host=$servername;dbname=abaya", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully";

		  
	if(isset($_POST['ok']))
	{
        $email=$_POST['email'];
		$pass=$_POST['pass'];
        // var_dump($_POST);
        if(!empty($_POST['email']))
		{
			if(!empty($_POST['pass']))
			{				
                $sql = "INSERT INTO users (email, pass)
                VALUES ('$email', '$pass')";
                $conn->exec($sql);
                $extra = 'products.php';
							   
            }
            else
            {			
                $msg =  "Insert user password";
                $extra = 'index.php';
            }
        }
        else
        {
            $msg = "Insert user Email";
            $extra = 'index.php';
            
        }
        header("Location: http://$host$uri/$extra?msg=".$msg);
    }
		   
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
