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
    <div class="container "><br><br>
    <a href="insert.php" style="float: right;" class="text-center btn btn-dark">Data Insert</a>
        <div class="col-lg-12 m-auto  bg-success">
            <h3 class="text-center text-white">Display Table Data</h3>
            <table class="table table-success table-striped table-hover">
                <tr class="text-center">
                    <th style="width: 10px;">ID</th>
                    <th style="width: 20px;">Name</th>
                    <th style="width: 25px;">Email</th>
                    <th style="width: 25px;">Password</th>
                    <th style="width: 20px;">Action</th>
                </tr>

                <?php
                include 'database.php';

                $sql = "SELECT * FROM `crud` ";
                $query = mysqli_query($conn, $sql);
                $i=1;
                while ($result = mysqli_fetch_assoc($query)) {
                ?>
                    <tr class="text-center">
                        <td><?= $i; ?></td>
                        <td><?= $result['name']; ?></td>
                        <td><?= $result['email']; ?></td>
                        <td><?= $result['password']; ?></td>
                        <td>
                            <div class="row text-center">
                                <div class="col">
                                    <form action="edit.php" method="post">
                                        <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                        <button class="btn btn-warning" type="submit">Update</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <a class="btn btn-danger" href="delete.php?id=<?= $result['id'] ?>">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>