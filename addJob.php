<?php

use App\Models\Job;

// var_dump($_GET);
// var_dump($_POST);

if (!empty($_POST)) {
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}

?>

<html>
    <head>
        <title>Add Job Form</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
         <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <form action="addJob.php" method="post">
            <h1>Add Job</h1>
            <label for="">Title:</label>
            <input type="text" name="title"><br/>
            <label for="">Description:</label>
            <input type="text" name="description"><br/>
            <button type="submit">Save</button>
        </form>
    </body>
</html>