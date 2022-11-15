<?php 
 $id = $_GET['id'];
 $name= $_GET['name'];
 $lastname= $_GET['lastname'];
 $username= $_GET['username'];
 $email= $_GET['email'];
 $password= $_GET['password'];
 $image= $_GET['image'];
 $status= $_GET['status'];
 $kind= $_GET['kind'];
?>

<html>

    <body>
    <form action="c_modificarUsuario.php" method="GET">
        <input type="number" value="<?php echo $id;?>" placeholder="id" name="id" readonly>
        <input type="text" value="<?php echo $name;?>" placeholder="rname" name="name">
        <input type="text" value="<?php echo $lastname;?>" placeholder="lastname" name="lastname">
        <input type="text" value="<?php echo $username;?>" placeholder="username" name="username">
        <input type="text" value="<?php echo $password;?>" placeholder="password" name="password">
        <input type="text" value="<?php echo $email;?>" placeholder="email" name="email">
        <input type="text" value="<?php echo $image;?>" placeholder="image" name="image">
        <input type="number" value="<?php echo $status;?>" placeholder="status" name="status">
        <input type="number" value="<?php echo $kind;?>" placeholder="kind" name="kind" readonly>
        <input type="submit" value="editar">
    </form>

</html>