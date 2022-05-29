<?php
        include 'database.php';
        if (!empty(isset($_POST['save']))) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO `crud`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header('location: display.php');
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="col-lg-5 m-auto">
        <form action="" method="POST">
        </br></br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h2 class="text-white text-center">Insert Operation</h2>
                </div>
                <label>User Name:</label>
                <input type="text" name='name' class="form-control" required><br>
                
                <label>User Email:</label>
                <input type="text" name='email' class="form-control"><br>
                
                <label>User Password:</label>
                <input type="text" name='password' class="form-control"><br>
                <button class="btn btn-success" type="submit" name="save">Save</button>
            </div>
        </form>
    </div>
</body>
</html>