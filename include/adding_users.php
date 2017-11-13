<?php
function add_new_user()
{
    if($_POST['user_name'] && $_POST ['user_email'] && $_POST ['user_country_id'])
        {
            $user_name = $_POST ['user_name'];
            $user_email = $_POST ['user_email'];
            $user_country_id = $_POST ['user_country_id'];
            
            if(mysqli_query($link, "INSERT INTO  users_data_base.users('id', 'user_name', 'user_email', 'user_country_id') VALUES (NULL, '$user_name', '$user_email', '$user_country_id')"))
                echo "Successful Insertion!";
            else
		        echo " \n Please try again";
        }
}
?>