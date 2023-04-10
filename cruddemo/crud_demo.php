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
            unset($_SESSION['message']);
            ?>

            <div class="col-12">
                <div class="card shadow mt-5">
                    <div class="card-header h3 bg-primary-subtle">
                        Crud Demo
                    </div>
                    <div class="card-body">
                        <form action="insert_employee.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter your Name">
                                <label for="name">Enter your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter your Email">
                                <label for="email">Enter your Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="age" id="age" placeholder="Your Age">
                                <label for="age">Your Age</label>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Select Gender </label>
                                <br>
                                <input type="radio" class="form-radio" name="gender" value="0">Female</input>
                                <input type="radio" class="form-radio" name="gender" value="1">Male</input>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="doj" id="doj"
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
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-5">
                    <div class="card-header h3 bg-primary-subtle">
                        View Data
                    </div>
                    <div class="card-body">
                        <table id="example" class="display table table-striped table-hover table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Date of joining</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM employee";
                                $statement = $db->prepare($sql);
                                $statement->setFetchMode(PDO::FETCH_ASSOC);
                                $statement->execute();
                                $table = $statement->fetchAll();
                                // var_dump($table);
                                // var_dump($value);
                                foreach ($table as $value) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['age']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($value['gender'] == 0) {
                                                echo "Female";
                                            } else {
                                                echo "Male";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php  echo date("d-m-Y",strtotime($value['doj'])); ?>
                                        </td>
                                        <td>
                                            <a href="edit_employee.php?id=<?php echo $value['id'] ?>">
                                                <img src="images/edit.png" style="height:40px;" alt="">
                                            </a>
                                            <a href="delete_employee.php?id=<?php echo $value['id']; ?>">
                                                <img src="images/delete.png" style="height:40px;" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
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