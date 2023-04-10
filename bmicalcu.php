<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bmi cal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 align="center">Bmi Calculator</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="submit/bmicalcu_submit.php" method="POST">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>
                                Enter your weight
                            </td>
                            <td>
                                <input type="number" name="weight" id="weight" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Enter your Height in foot
                            </td>
                            <td>
                                <input type="number" name="height_foot" id="height_foot" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Enter your Height in inch
                            </td>
                            <td>
                                <input type="number" name="height_inch" id="height_inch" required>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <input type="submit" name="mysubmit" value="Submit">
                            </td>
                            <td>
                                <input type="reset" />
                            </td>
                        </tr>
                        <?php
                        if (isset($_GET['bmi']) == true) {
                            ?>
                            <tr>
                                <td>Your bmi is :</td>
                                <td><?php echo $_REQUEST['bmi']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>