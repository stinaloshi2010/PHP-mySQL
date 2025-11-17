<?php


    include_once("config.php");


    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];


        $sql = "INSERT INTO users(name, email,password, repeat) VALUES (:name, :email, :password, :repeat)";


        $sqlQuery = $conn->prepare($sql);


        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':email', $email);
        $sqlQuery->bindParam(':password', $password);
        $sqlQuery->bindParam(':repeat', $repeat);


        $sqlQuery->execute();


        echo "The user was added successfully!";
    }
    
?>