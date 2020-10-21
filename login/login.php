<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">

    <?php
    

        if(isset($_GET['error']))
        {
            echo "<div class='alert alert-danger'>Please Login First To acess</div>";
        }
    
    
    ?>

        <form action="login.php" method='POST'>
            <div class="form-group">
                <label for="">Enter Your E-Mail</label>
                <input type="email" name="mail" class="form-control" placeholder='Enter Your E-Mail'>
            </div>

            <div class="form-group">
                <label for="">Enter Your Passwrod</label>
                <input type="password" name="pass" class="form-control" placeholder='Enter Your Passwrod'>
            </div>


            <div class="form-group">
                <input type="submit" name='login' value="Login" class="btn btn-primary">
            </div>

        </form>
    
    </div>

    <?php

        include('db.php');
        if(isset($_POST['login']))
        {
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM users WHERE mail='$mail' AND pass='$pass'";
            $result = $connection->query($sql);

            if($result->num_rows > 0)
            {
                session_start();
                while($rows = $result->fetch_assoc())
                {
                    $_SESSION['id'] = $rows['id']; // pass user id inside the session info
                }
                header('location:home.php'); // redirect user to home page
            }else
            {
                echo 'error login please try again';
            }
        }
    
    
    
    ?>
</body>
</html>