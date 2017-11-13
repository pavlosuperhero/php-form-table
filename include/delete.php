<?php 
    require_once 'function.php';
      if (isset ($_GET['del'])){ 

        $id = $_GET['del'];
        $sql = "DELETE FROM users_data_base.users where users.id = '$id'";
        print_r($id);
        $result = mysqli_query($link, $sql) or die ("Failed".mysqli_error($link));
        echo "<meta http-equiv='refresh' content = '0;url=../index.php'>";
        /*echo 'Error in connection with data base('.mysqli_errno($link).' ): '. mysqli_error($link);*/
        }
?>
