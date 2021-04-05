<?php
session_start();
?>

<!DOCTYPE html>


<html>
    <head>
        <meta   charset="UTF-8">
        <meta   name="viewport"                 content="width=device-width, initial-scale=1.0">
        <meta   http-equiv="X-UA-Compatible"    content="ie=edge">
        <title> Congrats!    </title>
        <link   rel="stylesheet"                href="app.css"> 
    </head>


    <body>


    <div                class= "container">
        <div id="end"   class= "flex-center flex-column"> 
            
            <form   method="POST"   action="check.php">
                <h1 id= "finalScore">     </h1>

                <h3>   Great!    </h3>
            

            
                <input  type="text"         name="username"         id="username"         placeholder="username"/>
                <input  type="password"     name="password"         id= "password"        placeholder="password">

                <?php

                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div<h4> Username or password is incorrect. </h4></div>";

                    }
                ?>

                <button type="submit"       class= "btn"            id= "saveScoreBtn"                          >   Save     </button>
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

