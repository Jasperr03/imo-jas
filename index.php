<?php require_once 'connection.php' ?>
<!--script for side nav-->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/img/creative-pencil-logo-design-vector-removebg-preview.png" rel="icon">
    <link rel="stylesheet" href="css/mystyle.css">
 </head>
<body>
    <!--Header Navigation-->
    <?php include 'components/header.php' ?>
    <!--side Nav-->
    
    <!--Main Content-->
        <?php include 'content/main_home.php' ?>
    <!--footer-->
   <?php include 'components/footer.php' ?>
</body>
</html>