<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css">
        .table {
            margin: 0 auto;
            width: 80%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 align="center">Table Creating</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto col-12 col-lg-6 col-md-8">
                <form action="submit/l8_submit.php" target="_blank" method="POST">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Enter your column</td>
                            <td><input type="number" name="column" id="column" required></td>
                        </tr>
                        <tr>
                            <td>Enter your rows</td>
                            <td><input type="number" name="row" id="row" required></td>
                        </tr>
                        <tr>
                            <td>Select loop</td>
                            <td> 
                                <input type="radio" value="0" class="m-2" name="loop" id="loop" checked> For
                                <input type="radio" value="1" class="m-2" name="loop" id="loop"> While
                                <input type="radio" value="2" class="m-2" name="loop" id="loop"> Do
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Enter text for table
                            </td>
                            <td>
                                <input type="text" name="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Select Color 
                            </td>
                            <td>
                                <select name="color" id="">
                                    <option value="0">Red</option>
                                    <option value="1">Blue</option>
                                    <option value="2">Green</option>
                                    <option value="3">Black</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Select Text Color  
                            </td>
                            <td>
                                <select name="text_color" id="">
                                    <option value="0">White</option>
                                    <option value="1">Black</option>
                                </select>
                            </td>
                        </tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset">
                        </td>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>