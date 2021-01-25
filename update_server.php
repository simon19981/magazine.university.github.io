 <?php 

include 'config/db.php';

session_start();

   //INITILISING VARIABLES 

                             $eventname ="";
                             $eventdes ="";


                               if (isset($_POST['update'])) {
                          
                            $id = mysqli_real_escape_string($connect, $_POST['id']);
                           $eventname = mysqli_real_escape_string($connect, $_POST['eventname']);
                           $eventdes = mysqli_real_escape_string($connect, $_POST['eventdes']); 
                           $startdate = mysqli_real_escape_string($connect, $_POST['startdate']);
                           $enddate = mysqli_real_escape_string($connect, $_POST['enddate']);


                               $query = "UPDATE event SET event_name='$eventname', event_description='$eventdes', starting_date='$startdate', end_date='$enddate' WHERE id = '$id' ";
                                 
                                $datas = mysqli_query($connect, $query);
                                if ($datas)
                                {
                                  //echo "record updated";
                                   echo "<script>alert('data successfully updated');
                                    location.href='admin_panel.php';</script>";
                                    //header("location:admin_panel.php");
                                }
                                else {
                                  echo "record not updated";
                                }
                              }


 ?>