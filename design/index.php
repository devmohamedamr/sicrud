<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach($data as $user): ?>
        <tr>
            <td> <?= $user['id']; ?> </td>
            <td> <?= $user['name']; ?> </td>
            <td> <?= $user['email']; ?> </td>
        </tr>
        <?php endforeach; ?>
     </table>   
</body>
</html>