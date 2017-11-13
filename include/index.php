<?php
    require_once 'include/function.php';
    require_once 'include/delete.php';
    require_once 'include/adding_users.php';
    ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Table_tests_work</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css" type="text/css"/>
        <link href="css/favicon.png" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div class="conteiner">
        <?php
            $users = get_users_data_();
        ?>
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             
                    <div class="page-header">
                        <h1><i class="glyphicon glyphicon-user"></i> About users:</h1>
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Mail</th>
                          <th>Country</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($users as $user) :?>
                        <tr>
                          <th scope="row"><?=$user['id']?></th>
                          <td><?=$user['user_name']?></td>
                          <td><?=$user['user_email']?></td>
                          <td><?=$user['user_country_name']?></td>
    
                          <td><a href="include/delete.php?del=<?=$user['id']?>">Delete</a></td>
                          
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
                
                </div>
                <form class="form-inline" method = "post" action = "">
                    <div class="form-group">
                        <label for="exampleInputName2">Name</label>
                        <input type="text" class="form-control" name = "user_name" id="name" placeholder="Solomia Krushelnytska" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control email" name = "user_email" id="email" placeholder="solomia@example.com" required>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputCountry2">Country num</label>
                        <input type="text" class="form-control country" name = "user_country_name" id="country" placeholder="three-letter country codes" required>
                    </div>
                        <input type="submit" name="enter"/>
                </form>
                
            </div>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
