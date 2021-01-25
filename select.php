 <?php 

include 'config/db.php';

session_start();

   //INITILISING VARIABLES 

if ($_GET['id']) {
    $id = $_GET['id'];
}
                            
$query = "UPDATE event_registration SET is_selected = '1' WHERE id = '$id' ";
 
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


 ?>