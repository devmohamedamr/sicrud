<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateuser.php" method="post" enctype="multipart/form-data">
        <input type="text" value="<?= $userdata['name']; ?>" name="username" placeholder="username">
        <input type="text" value="<?= $userdata['email']; ?>" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <img src="userimg/<?= $userdata['img']; ?>" width="50">
        <input type="hidden" name="id" value="<?= $userdata['id']; ?>">
        <input type="file" name="img">
        <input type="submit">
    </form>
</body>
</html>