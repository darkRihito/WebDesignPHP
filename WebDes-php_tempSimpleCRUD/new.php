<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mycss.css">    
    <title>Contact</title>
</head>
<body>
    <form action="new_submit.php" method="post">
        <h1>New Record</h1>
        <p>Nama <input type="text" name="nama"></p>
        <p>Alamat <input type="text" name="alamat"></p>
        <p>Telp <input type="text" name="telp"></p>
        <p>Email <input type="email" name="email"></p>
        <p>Catatan
            <textarea name="catatan" rows="4" cols="50"></textarea>
         </p>
        <p><input type="submit" name="save" value="Save">
        <input type="submit" name="cancel" value="Cancel"></p>
    </form>
</body>
</html>