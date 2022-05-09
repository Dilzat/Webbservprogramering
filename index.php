<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $login_success = false;
    $full_name = "";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["username"] == $_POST["username"] &&
                    $row["password"] == $_POST["password"]) {
                    $login_success = true;
                    $full_name = $row["FirstName"] . " " .
                            $row["LastName"];
                    }
                }
        } 
        else {
        echo "0 results";
        }
                $conn->close();
        
        if($login_success){
            session_start();
	        $_SESSION["username"] = $_POST["username"];
            echo " Welcome ".$full_name." !";
            echo '<script>
            alert("Welcome '.$full_name.' ! ");
            window.location.href="uppload.html";
            </script>';
        }

        else{
            echo " Login faild";
        }

?>