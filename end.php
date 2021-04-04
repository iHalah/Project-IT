
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
        else
            print("Connection successfully      <br>");


        $check = $conn->query("SELECT username FROM userInfo WHERE username = '$username'");
       
                                                    //True False
        $matchFound = mysqli_num_rows($check) > 0 ?    1 : 0;


        if (!$matchFound) {
            print("Correct      <br>");
            $query = "INSERT INTO userInfo (username, password_) VALUES ('$username', $userPassword)";

            
            if ( mysqli_query($conn, $query) ) {
                print("insert executed successfully     <br>");
                header('Location: game.html');
                
            }
            else {
                print("Error insert: " . mysqli_connect_error($conn));
                
            }
                
        }
        else {
            print("Username is already exist, try again");
            header('Location: https://github.com/Dirk-Sandberg/plyer');
        }

        mysqli_close($conn);

    
    ?>





    <div            class= "container">
            <div id="end"  class= "flex-center flex-column">   
                <h1 id= "finalScore">     </h1>

                <h3>   Great!  <?php   print($username);    ?>     </h3>

                <form>
                    <button type="submit"   class= "btn"            id= "saveScoreBtn"    onclick= "saveHighScore(event)">   Save     </button>
                </form>

                <a  class= "btn"       href= "game.html">   Play Again  </a>
                <a  class= "btn"       href= "index.html">   Go Home     </a>

            </div>
        </div>    

        <script src= "end.js"> </script>

</body>
</html>