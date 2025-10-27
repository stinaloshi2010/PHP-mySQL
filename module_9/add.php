<?php


    include_once("config.php");


    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];


        $sql = "INSERT INTO users(name,surname,email) VALUES (:name, :surname, :email)";


        $sqlQuery = $conn->prepare($sql);


        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':surname', $surname);
        $sqlQuery->bindParam(':email', $email);


        $sqlQuery->execute();


        echo "The user was added successfully!";
    }
    
?>