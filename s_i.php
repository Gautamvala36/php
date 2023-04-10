<!--( SI = P × R × T / 100) where P = Principal, R = Rate of Interest, and T = Time period.  -->
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
    <div class="conteiner-fulid">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <form action="submit/s_i_submit.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            Simple Interest Calculator
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <tr>
                                    <td>
                                        Enter your Amount
                                    </td>
                                    <td>
                                        <input type="number" name="amount" id="amount" placeholder=" Amount">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Enter your Rate(%) of Interest
                                    </td>
                                    <td>
                                        <input type="number" name="rate" id="rate" placeholder="Rate of Interest(%)">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Enter your Time period
                                    </td>
                                    <td>
                                        <input type="number" name="time" id="time" placeholder="Time period">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Submit" class="btn btn-dark">
                            <input type="reset" value="Reset" class="btn btn-dark">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>