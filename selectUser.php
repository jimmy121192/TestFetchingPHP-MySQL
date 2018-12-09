<?php


try {
    $conn = new PDO("mysql:host=wm63be5w8m7gs25a.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uuviphx5n4gyc1f1", "oxy3p75ywig591we", "vq5ornmt4t13ua8n");
} catch (PDOException $e) {
    echo "Error: " .$e -> getMessage();
}
$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * from users;";
// $query = "SELECT * from users WHERE email='$email' AND password='$password'";
$result = $conn -> query($query);

if($result){
   $user = $result -> fetchAll();
   echo json_encode($user);
} else {
    echo json_encode(false);
}




?>