<!DOCTYPE html>
<html>
    <head>
        <meta   charset="UTF-8">
        <meta   name="viewport"                 content="width=device-width, initial-scale=1.0">
        <meta   http-equiv="X-UA-Compatible"    content="ie=edge">
        <title> High Scores </title>
        <link   rel="stylesheet"                href="app.css"> 
        <link   rel="stylesheet"                href="highscores.css"> 
    </head>


<body>
    <div            class= "container">
        <div id="highscores"  class= "flex-center flex-column">   
            <h1 id= "finalScore">    High Scores     </h1>


        <table>
            <tr>
                <th>Ranking     </th>
                <th>Username    </th>
                <th>Score       </th>
            </tr>




            
            <?php
  
                $server = "localhost";
                $user = "root";
                $password = "";

                $conn = mysqli_connect($server, $user, $password, "Project438");

                if (!$conn)
                    die("Connection failed: " . mysqli_connect_error());
                else {
                     //print("Connection successfully      <br>");
                     }
        

                $result = $conn->query("SELECT username, score FROM userInfo ORDER BY score DESC");
  
        
                /* First rank will be 1 and second be 2 and so on */
                $ranking = 1;
        
                /* Fetch Rows from the SQL query */
                if (mysqli_num_rows($result)) {
                    
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr   class= 'high-score'>";
                        echo "<td>{$ranking}</td>
                              <td>{$row['username']}</td>
                              <td>{$row['score']}</td>";
                        $ranking++;
                        echo "</tr>";
                    }
                    
                }
            ?>

        </table>
            <br><br>
            <a class= "btn"    href= "index.html">       Go Home     </a>
        </div>
    </div>    


</body>    
</html>