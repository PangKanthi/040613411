<?php include "connect.php" ?>
<?php

    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]); 
    $stmt->execute(); 
    $row = $stmt->fetch(); 
?>

<html>
<head><meta charset="UTF-8"></head>
<body>
    <form action="workshop9edit.php" method="post">
    <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
    password : <input type="text" name="password" value="<?=$row["password"]?>"><br>
    name : <input type="text" name="name" value="<?=$row["name"]?>"><br>
    address : <input type="text" name="address" value="<?=$row["address"]?>"><br>
    mobile : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    email : <input type="text" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขรายละเอียดสมาชิก ">
    </form>
</body>
</html>