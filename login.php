<?php
session_start();
?>

<!DOCTYPE html>


<html>
    <head>
        <meta   charset="UTF-8">
        <meta   name="viewport"                 content="width=device-width, initial-scale=1.0">
        <meta   http-equiv="X-UA-Compatible"    content="ie=edge">
        <title> login </title>
        <link   rel="stylesheet"                href="app.css"> 
    </head>


    <body>


    <?php
                  
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div><h3>Username/password is incorrect.</div>";

                    }
    ?>


    <div            class= "container">
        <div id="end"  class= "flex-center flex-column">   
            <h1 id= "finalScore">     </h1>

            <h3>   Great!    </h3>
            

            <form   method="POST"   action="check.php">
                <input  type="text"         name="username"         id="username"         placeholder="username"/>
                <input  type="password"     name="password"         id= "password"        placeholder="password">
                <button type="submit"       class= "btn"            id= "saveScoreBtn"    onclick= "saveHighScore(event)">   Save     </button>
                <input class="button" type="submit" id="login" name="login" value="login">  
            </form>
            
            <a  class= "btn"       href= "game.html">   Play Again  </a>
            <a  class= "btn"       href= "index.html">   Go Home     </a>

        </div>
    </div>    

    <script src= "end.js"> </script>



    </body>
</html>

<?php
    unset($_SESSION["error"]);
?>


