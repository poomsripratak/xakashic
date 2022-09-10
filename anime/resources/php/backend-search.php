<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "123456", "Website");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM Anime WHERE EnglishName LIKE ? OR Name Like ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $param_term, $param_term);
        
        // Set parameters
        $param_term = '%'.$_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    if ($row["EnglishName"]==$row["Name"]) {
                        echo  "<div class='resultBox'><h3>" . $row["EnglishName"]. "</h3><h6> </h6></div>";
                    } else {
                        echo "<div class='resultBox'><h3>" . $row["EnglishName"]. "</h3><h6>".$row["Name"] ."</h6></div>";
                    }
                }
            } else{
                echo "<div class='resultBox'><p>No matches found</p></div>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    }
     
    // Close statement
    mysqli_stmt_close($stmt);

}
 
// close connection
mysqli_close($link);
?>