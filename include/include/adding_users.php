<?php 
        if($_POST['user_name'] && $_POST ['user_email'] && $_POST ['user_country_name'])
            {
                $user_name = $_POST ['user_name'];
                $user_email = $_POST ['user_email'];
                $user_country_name = $_POST ['user_country_name'];
                            
                if(mysqli_query($link, "INSERT INTO  users_data_base.users(user_name, user_email, user_country_name) VALUES ('$user_name', '$user_email', '$user_country_name')"))
                    {
                        echo "Successful Insertion!";
                        echo "<meta http-equiv='refresh' content = '0;url=../index.php'>";
                    }
                else
		            echo " \n Please try again";
            }
?>