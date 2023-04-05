<?php 
    if(isset($_POST['passShow'])){
        echo "hi";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash Password</title>
</head>
<body>
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="password" id="">
        
        <input type="submit" value="Show Password" name="passShow">
    </form>
</body>
</html>