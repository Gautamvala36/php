<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="continer">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card col-6">
                    <div class="card-header">
                        Your Interest Amount
                    </div>
                    <div class="card-body">
                        <?php
                        extract($_POST);
                        echo "<br>This Your Amount : " . $_POST['amount'];
                        echo "<br>";
                        echo "<br>This Your Rate(%) of Interest : " . $_POST['rate'] . "%";
                        echo "<br>";
                        echo "<br>This Your Time Period Year: " . $_POST['time'];
                        echo "<br>";

                        $si = ($amount * $rate * $time) / 100;
                        echo "<br>Your Interest Amount : " . $si;
                        echo "<br>";
                        $total = $amount + $si;
                        echo "<br>Your Total Amount : " . $total;
                        ?>
                    </div>
                    <div class="card-footer">
                        <form action="p1.php" method="post">
                            <input type="button" value="Exit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>