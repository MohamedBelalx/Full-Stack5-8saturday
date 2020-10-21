<?php

session_start();

if(isset($_SESSION['id']))
{
    echo 'u can access';
    echo $_SESSION['id'];
}else
{
    header('location:login.php?error=1'); // how to send data via URL
}




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <h1>welcome to home page</h1>
        <a href="logout.php">logout</a>


        <form action="home.php" method='POST' enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Enter Book Name</label>
                <input type="text" name="name" class="form-control" placeholder='Enter Book Name'>
            </div>
            <div class="form-group">
                <label for="">Enter No. of Pages E-Mail</label>
                <input type="number" name="pages" class="form-control" placeholder='Enter No. Of Pages'>
            </div>

            <div class="form-group">
                <label for="">Enter Book Details</label>
                <textarea name="details" id="summernote" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="">Enter Book Source</label>
                <input type="file" name="asset" class="form-control">
            </div>



            <div class="form-group">
                <input type="submit" name='add' value="Add" class="btn btn-primary">
            </div>

        </form>

    </div>

    <?php

        if(isset($_POST['add']))
        {
            $name = $_POST['name'];
            $pages = $_POST['pages'];
            $details = $_POST['details'];

            $location = 'uploads/';
            $file_location = $location . $_FILES['asset']['name'];

            $fileType = strtolower(pathinfo($file_location,PATHINFO_EXTENSION));

            echo $fileType;

            if($fileType == 'pdf')
            {
                include('db.php');
                move_uploaded_file($_FILES['asset']['tmp_name'],$file_location);

                $id = $_SESSION['id']; // user id


                $sql = "INSERT INTO books(name,pages,details,asset,user_id)
                 VALUES('$name','$pages','$details','$file_location','$id')";


                $connection->query($sql);

            }else
            {
                echo 'please upload a pdf file';
            }






        }

        // select

        include('db.php');
        $sql = "SELECT users.name,books.name as bname,books.pages,books.asset,books.details,books.id  FROM users JOIN books ON books.user_id=users.id";

        $res = $connection->query($sql);


        if($res->num_rows > 0)
        {
            while($rows = $res->fetch_assoc())
            {
                ?>
                <div class="container">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">BookName</th>
                            <th scope="col">pages</th>
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
                            <th scope="col">Asset</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $rows['id'] ?></th>
                            <td><?php echo $rows['bname'] ?></td>
                            <td><?php echo $rows['pages'] ?></td>
                            <td><?php echo $rows['name'] ?></td>
                            <td><?php echo $rows['details'] ?></td>
                            <td><?php echo "<iframe src='{$rows['asset']}' frameborder='0'></iframe>" ?></td>
                            <td> <a href="delete.php?id=<?php echo $rows['id'] ?>" class='btn btn-danger'>Delete</a> </td>
                            <td> <a href="" class='btn btn-primary'> Update </a> </td>

                        </tr>
                    </tbody>
                </table>
                </div>

                
                <?php
            }
        }else
        {
            echo 'there is no books for now';
        }
    
    
    
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>

