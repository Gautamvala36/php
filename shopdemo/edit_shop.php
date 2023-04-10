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
                <?php 
                    $sql = "SELECT * FROM shop WHERE id = ? ";
                    $statment = $db->prepare($sql);
                    $statment -> bindparam(1,$_REQUEST['id']);
                    $statment -> setFetchMode(PDO::FETCH_ASSOC);
                    $statment ->execute();
                    $row = $statment->fetch();
                ?>
                <div class="card shadow mt-3">
                    <div class="card-header h3 bg-dark-subtle">
                        Shop Opening Time
                    </div>
                    <div class="card-body">
                        <form action="update_shop.php" method="post">
                            <div class="form-floating mb-3">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="text" class="form-control" name="name" id="name" 
                                value="<?php echo $row['name']; ?>" placeholder="Enter Shop Name">
                                <label for="name">Enter Shop Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="address" id="address" 
                                value="<?php echo $row['address']; ?>"
                                    placeholder="Shop Address">
                                <label for="address">Shop Address</label>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Shop Status </label>
                                <br>
                                <input type="radio" class="form-radio" name="status" value="0"
                                <?php 
                                    if ($row['status'] == 0) {
                                        echo "checked";
                                    }
                                ?>
                                > Open</input>
                                <input type="radio" class="form-radio" name="status" value="1"
                                <?php 
                                    if ($row['status'] == 1) {
                                        echo "checked";
                                    }
                                ?>
                                > Close</input>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="city" 
                                value="<?php echo $row['city']; ?>" id="city" placeholder="Shop City">
                                <label for="city">Shop City</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="conumber" id="conumber" 
                                value="<?php echo $row['conumber']; ?>"
                                    placeholder="Shop Contact Number">
                                <label for="conumber">Shop Contact Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="opd" id="opd" 
                                value="<?php echo $row['opd']; ?>"
                                    placeholder="Shop Opening Date">
                                <label for="opd">Shop Opening Date </label>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-outline-dark">
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
    <script src="https://kit.fontawesome.com/16e157803b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</body>

</html>