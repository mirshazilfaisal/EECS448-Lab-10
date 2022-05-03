<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s663m589", "eigheiN3","s663m589");

if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
     $query = "SELECT UserID from Users";
    $answer = $mysqli->query($query);
echo "<p style='color: Brown; font-size:30px'> ViewUsers</p>";

    echo "<table style='border: 3px solid black; font-size:24px'>";
    echo "<tr>";
    echo "<td>" . "USERS:" . "</td>";
    echo "</tr>";
    if ($answer->num_rows > 0){
        while ($row = $answer->fetch_assoc()){
            echo "<tr>";
            echo "<td style='border: 2px solid black; color:Green'>" . $row["UserID"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
 
$mysqli->close();
?>