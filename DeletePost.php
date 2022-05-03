
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "s663m589", "eigheiN3", "s663m589");

if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}	

$query="SELECT post_id, content, author_id from Posts";
 $answer = $mysqli->query($query);
if ($answer->num_rows > 0){
    while ($row = $answer->fetch_assoc()){
	$delete=$_POST[$row["post_id"]];
	if($delete=="on")
	{
		$query="DELETE FROM Posts WHERE post_id='".$row["post_id"]."'";
		$deleted = $mysqli->query($query);
		echo "<p style='font-size:30px; color:Red'>Post Id:".$row["post_id"]." from user:".$row["author_id"]." has been deleted successfully </p>"; 	
	}
}
}
$mysqli->close();
?>
