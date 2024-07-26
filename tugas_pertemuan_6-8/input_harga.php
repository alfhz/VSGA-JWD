<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Diskon</title>
        <style>
            body{
                text-align: center; 
                justify-content: center;
                align-items: center; 
                height: 100vh;
                background-color: #dfdf; 
            }
        </style>
</head>
<body>
    <h2><u>TOTAL DISKON</u></h2>
    <form action="hitung_diskon.php" method="post">
        <label for="inputHarga">Total Harga Belanja:</label>
        <input type="number" id="inputHarga" name="inputHarga" required>
        <input type="submit" value="hitung">
    </form>
</body>
</html>