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
            <div class="col-10 offset-1">
                <div class="card shadow mt-5">
                    <div class="card-header h3 bg-dark-subtle">
                        Shop Opening Time
                    </div>
                    <div class="card-body">
                        <form action="insert_shop.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Shop Name">
                                <label for="name">Enter Shop Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Shop Address">
                                </input>

                                <label for="address">Shop Address</label>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label">Shop Status </label>
                                <br>
                                <input type="radio" class="form-radio" name="status" value="0"> Open</input>
                                <input type="radio" class="form-radio" name="status" value="1"> Close</input>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="city" id="city" placeholder="Shop City">
                                <label for="city">Shop City</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="conumber" id="conumber"
                                    placeholder="Shop Contact Number">
                                <label for="conumber">Shop Contact Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="opd" id="opd"
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mt-5">
                    <div class="card-header h3 bg-dark-subtle">
                        Shop Opening Time Data
                    </div>
                    <div class="card-body">
                        <table id="example" class="display table table-striped table-hover table-bordered"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>Shop Address</th>
                                    <th>Shop Status</th>
                                    <th>Shop City</th>
                                    <th>Shop Contact Number</th>
                                    <th>Shop Opening Date</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM shop";
                                $statement = $db->prepare($sql);
                                $statement->setFetchMode(PDO::FETCH_ASSOC);
                                $statement->execute();
                                $tabel = $statement->fetchAll();
                                // var_dump($tabel);
                                foreach ($tabel as $value) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['address']; ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($value['status'] == 0) {
                                                echo "Open";
                                            } else {
                                                echo "Close";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $value['city']; ?>
                                        </td>
                                        <td>
                                            <?php echo $value['conumber']; ?>
                                        </td>
                                        <td>
                                            <?php echo date("d-m-Y", strtotime($value['opd'])); ?>
                                        </td>
                                        <td>
                                            <a href="edit_shop.php?id=<?php echo $value['id']; ?>">
                                                <i class="fa-solid fa-pen-to-square fa-2xl" style="color: #000000;"></i>
                                            </a>
                                            <a href="delete_shop.php?id=<?php echo $value['id']; ?>">
                                                <i class="fa-solid fa-trash fa-2xl" style="color: #000000;"></i>
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