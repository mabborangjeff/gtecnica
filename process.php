<?php
    include("connection.php"); // include database connection file

    // get selected options from form
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];

    // do something with selected options, for example insert them into database
    $query = "INSERT INTO table_name (column1, column2, column3, column4) VALUES ('$option1', '$option2', '$option3', '$option4')";
    mysqli_query($conn, $query);

    // redirect to another page
    header("Location: success.php");
?>
