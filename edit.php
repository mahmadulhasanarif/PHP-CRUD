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
    <?php
    include 'database.php';
    $id = $_POST['id'];
    $sql = "SELECT `id`, `name`, `email`, `password` FROM `crud` WHERE id = '$id'";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
        while ($result = mysqli_fetch_array($query_run)) {
    ?>
            <div class="col-lg-5 m-auto">
                <form action="update.php?id=<?=$result['id']?>" method="POST">
                    </br></br>
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h2 class="text-white text-center">Insert Operation</h2>
                        </div>
                        <input type="hidden" value="<?= $result['id']; ?>">
                        <label>User Name:</label>
                        <input type="text" name='name' class="form-control" value="<?= $result['name']; ?>"><br>

                        <label>User Email:</label>
                        <input type="text" name='email' class="form-control" value="<?= $result['email']; ?>"><br>

                        <label>User Password:</label>
                        <input type="text" name='password' class="form-control" value="<?= $result['password']; ?>"><br>
                    </div>
                    <button class="btn btn-success" type="submit" name="update">Update</button>
                    <a href="display.php" class="btn btn-info">Cancle</a>
                </form>

               

            </div>
    <?php
        }
    }

    ?>

</body>

</html>