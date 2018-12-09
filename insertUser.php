<?php
// var_dump($_POST);
// exit;

try {
//  $conn = new PDO("mysql:host=localhost;dbname=test_db", "root", "root");
 $conn = new PDO("mysql:host=wm63be5w8m7gs25a.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uuviphx5n4gyc1f1", "oxy3p75ywig591we", "vq5ornmt4t13ua8n");

} catch (PDOException $e) {
    echo "Error: " .$e -> getMessage();
}
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (email, password) VALUES ('$email', '$password');";
$result = $conn -> query($query);

if($result){
    echo json_encode(true);
} else {
    echo json_encode(false);
}

// /Applications/MAMP/Library/bin/mysql --host=wm63be5w8m7gs25a.cbetxkdyhwsb.us-east-1.rds.amazonaws.com -u oxy3p75ywig591we  -p uuviphx5n4gyc1f1;
//password: vq5ornmt4t13ua8n


?>