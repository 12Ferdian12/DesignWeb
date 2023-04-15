<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi 55</title>
    <link rel="stylesheet" href="SF.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="Navbar">
        <a href="../Main.php"><img src="../img/Logo3.png" alt="Logo"></a>
    </nav>
    <form method="post"action="../Data/Function/funcAddForm.php">
        <div class="Input">
            <label for="Name">Nama:</label>
            <input type="text" id="name" name="Name"><br>
            <label for="Age">Nama:</label>
            <input type="number" id="Age" name="Age"><br>
        </div>
        <button type="submit" >Submit</button>
    </form>
</body>
</html>