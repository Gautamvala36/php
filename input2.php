<!-- grt method -->
<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
     <div class="container">
          <div class="row">
               <div class="col-12">
                    <h1>
                         Example of get method 
                    </h1>
                    <hr>
                    <form action="submit/submit2.php"  method="get">
                         <table border="2"  align="center">
                              <tr>
                                   <td>Enter your name </td>
                                   <td>
                                        <input type="text" name="name" id="name" placeholder="Enter your name ">
                                   </td>
                              </tr>
                              <tr>
                                   <td>Enter your Mobile number</td>
                                   <td>
                                        <input type="number" name="mobile_number" id="mobile_number" placeholder="Enter your Mobile number ">
                                   </td>
                              </tr>
                              <tr>
                                   <td>Enter your Password</td>
                                   <td>
                                        <input type="password" name="password" id="password" placeholder="Enter your password ">
                                   </td>
                              </tr>
                              <tr>
                                   <td colspan="2" align="center">
                                        <input type="submit" value="Submit" >
                                   </td>
                              </tr>
                         </table>
                    </form>
               </div>
          </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>