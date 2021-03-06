<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php 
            require_once 'process.php'; 
        ?>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                ?>
            </div>
        <?php endif;?>

        <?php 
            $mysqli = new mysqli('localhost', 'root', 'root', 'web_lab') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM lab15") or die($mysqli->error);
        ?>
    
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Surname</th>
                        <th>Count of neightbors</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['count']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile?>
    
            </table>
        </div>
    
        <div class="row justify-content-center">
            <form action="process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="name">Number</label>
                    <input type="text" name="number" class="form-control" id="" placeholder="Enter your flat number" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Surname</label>
                    <input type="text" name="surname" class="form-control" id="" placeholder="Enter your surname" value="<?php echo $phone; ?>">
                </div>
                <div class="form-group">
                    <label for="address">Count of neightbors</label>
                    <input type="text" name="count" class="form-control" id="" placeholder="Enter your count " value="<?php echo $address; ?>">
                </div>
                <div class="form-group">
                    <?php if ($update == true): ?>
                        <button type="submit" class="btn btn-info" name="update">Update</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>