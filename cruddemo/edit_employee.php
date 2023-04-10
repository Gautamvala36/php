<?php
require_once("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            if (isset($_SESSION['message']) == true) {
                ?>
                <div class="col-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="col-12">
                <?php 
                    $sql = "SELECT * FROM employee WHERE id = ? ";
                    $statment = $db->prepare($sql);
                    $statment -> bindparam(1,$_REQUEST['id']);
                    $statment -> setFetchMode(PDO::FETCH_ASSOC);
                    $statment ->execute();
                    $row = $statment->fetch();
                ?>
                <div class="card shadow mt-5">
                    <div class="card-header h3 bg-primary-subtle">
                        Crud Demo
                    </div>
                    <div class="card-body">
                        <form action="update_employee.php" method="post">
                            <div class="form-floating mb-3">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>"
                                    placeholder="Enter your Name">
                                <label for="name">Enter your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>"
                                    placeholder="Enter your Email">
                                <label for="email">Enter your Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="age" id="age" value="<?php echo $row['age']; ?>" placeholder="Your Age">
                                <label for="age">Your Age</label>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Select Gender </label>
                                <br>
                                <input type="radio" class="form-radio" name="gender" value="0"
                                <?php 
                                    if($row['gender']==0)
                                    {
                                        echo "checked";
                                    }
                                ?>
                                >Female</input>
                                <input type="radio" class="form-radio" name="gender" value="1"
                                <?php
                                    if($row['gender']==1)
                                    {
                                        echo "checked";
                                    }
                                ?>
                                >Male</input>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="doj" id="doj" value="<?php echo $row['doj']; ?>"
                                    placeholder="Select date of joining">
                                <label for="doj">Select date of joining</label>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-outline-success">
                                <input type="reset" value="Clear All" class="btn btn-outline-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>

</html>