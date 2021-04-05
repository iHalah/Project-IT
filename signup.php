
<html>
    <head>

        <title> php </title>
        <link   rel="stylesheet"                href="app.css"> 
        <link   rel="stylesheet"                href="signup.css">
    </head>


<body>
    <?php
        $username = $_POST["username"];
        $userPassword = $_POST["password"];

        //Database
        $server = "localhost";
        $user = "root";
        $password = "";

        $conn = mysqli_connect($server, $user, $password, "Project438");

        if (!$conn)
            die("Connection failed: " . mysqli_connect_error());
        else {
            //print("Connection successfully      <br>");
        }
            


        $check = $conn->query("SELECT username FROM userInfo WHERE username = '$username'");
       
                                                    //True False
        $matchFound = mysqli_num_rows($check) > 0 ?    1 : 0;


        if (!$matchFound) {
            $query = "INSERT INTO userInfo (username, password_) VALUES ('$username', $userPassword)";
 
            
            if ( mysqli_query($conn, $query) ) {
                print("insert executed successfully     <br>");
                header('Location: end.php');
                
            }
            else {
                print("Error insert: " . mysqli_connect_error($conn));
            }
                
        }
        else {
            print("Username is already exist, try again");
            header('Location: invalid.html');
        }

        mysqli_close($conn);

    
    ?>




</body>
</html>