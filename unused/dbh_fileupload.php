<?php
$dbServerName = "localhost";
$dbUSerName = "root";
$dbPassword = "";
$dbName = "trainme.lk";

$conn = mysqli_connect($dbServerName, $dbUSerName, $dbPassword, $dbName);

$file = $_FILES['file'];
$sql = "INSERT INTO `files`(`uploaderID`, `subjectID`, `num`, `description`,`file_data`) VALUES ('7','9','0','8','$file');";
//$sql = "select * from posts;";
$result = mysqli_query($conn, $sql);
//$resultCheck = mysqli_num_rows($result);
//if($resultCheck){
//    while($row = mysqli_fetch_assoc($result)){
//        echo $row['DATE']."<br>";
//    }
//}
header("Location: file.php?createquiz=success");
?>