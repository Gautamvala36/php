 <!-- write a program to print following pattern
      *
     ***
    *****
   *******
  ********* -->

 <?php
    // $count = 0;
    // $flash = 0;
    for ($count = 1; $count <= 5; $count++) {
        for ($flash = $count; $flash < 5; $flash++) {
            echo "_";
        }
        for ($flash = 1; $flash <= (2 * $count - 1); $flash++) {
            echo "*";
        }
        echo "<br>";
    }
?>