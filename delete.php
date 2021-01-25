<?php


            include 'config/db.php';

            $id = $_GET['id'];

            $deletequery = "DELETE FROM event WHERE id = $id ";

            $query = mysqli_query($connect, $deletequery);

            


            if ($query)
            {
              //echo "record deleted";
              echo "<script>alert('data successfully Deleted');
             location.href='admin_panel.php';</script>";
             //header("location:admin_panel.php");
            }
            else {
              echo "record not deleted";
            }
                              


?>