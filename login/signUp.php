<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">

        <form action="signUp.php" method='POST'>
            <div class="form-group">
                <label for="">Enter Your Name</label>
                <input type="text" name="name" class="form-control" placeholder='Enter Your Name'>
            </div>
            <div class="form-group">
                <label for="">Enter Your E-Mail</label>
                <input type="email" name="mail" class="form-control" placeholder='Enter Your E-Mail'>
            </div>

            <div class="form-group">
                <label for="">Enter Your Passwrod</label>
                <input type="password" name="pass" class="form-control" placeholder='Enter Your Passwrod'>
            </div>


            <div class="form-group">
                <input type="submit" name='singUp' value="SignUp" class="btn btn-primary">
            </div>

        </form>
    
    </div>

    <?php

        include('db.php');
        if(isset($_POST['singUp']))
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            $sql = "INSERT INTO users(name,mail,pass) VALUES('$name','$mail','$pass')";

            //mysqli_query($connection,$sql);

            if($connection->query($sql))
            {
                echo 'Insert is Ok U can login';
            }else
            {
                echo 'Error' . $connection->error;
            }
        }
    
    
    
    ?>
</body>
</html>