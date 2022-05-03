<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s663m589", "eigheiN3", "s663m589");

if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
echo "<p style='color: Brown; font-size:30px'> ViewUserPosts</p>";

	$username=$_POST["user_id"];
	echo"<p style='color: Red; font-size:20px'>Posts of ".$username."<br></p>";

     $query = "SELECT content from Posts where author_id='$username'";
    $answer = $mysqli->query($query);

    echo "<table style='border: 4px solid black; font-size:24px'>";
       if ($answer->num_rows > 0){
        while ($row = $answer->fetch_assoc()){
            echo "<tr>";
            echo "<td style='border: 3px solid black'>" . $row["content"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
 
$mysqli->close();
?>