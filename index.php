<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleNew.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>

</head>

<body style="background-color: #004A7C;">
    <?php
    include 'navbar.php';
    ?>
    <div>
        <img src="img/bank.jpg" height="800rem">
    </div>
        
    <div class="card-container">
        <section class="func_card">
            <a href="createuser.php" class="func_link">
            <img src="img/user.png" alt="" width="200px"> <br> <br>
            Create User
            </a>
    
        </section>
        
        <section class="func_card">
            <a href="transfermoney.php" class="func_link">
            <img src="img/transfer.png" alt="" width="300px"> <br> <br>
            Make Transaction
            </a>
        </section>

        <section class="func_card">
            <a href="transactionhistory.php" class="func_link">
              <img src="img/history.png" width="200px"> <br> <br>
              History
            </a>
        </section>
 
       
    </div>
    <br>
<br>
    <hr style="height:3px; color:#E8F1F5; background-color:#E8F1F5;">
    <footer class="text-center mt-5 py-2" style="background-color: #004A7C; color:#E8F1F5;">
        <p>&copy 2021. Made by <b>Kashish Phulwani</b> <br>The Sparks Foundation</p>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>