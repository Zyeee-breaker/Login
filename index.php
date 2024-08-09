<?php 
session_start();
if (isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 0;
           background-image: url('https://i.pinimg.com/originals/31/68/c0/3168c09eeeb529be5b321575fe56b02b.gif');
           background-size: cover; /* This makes sure the image covers the whole page */
           background-attachment: fixed; /* This ensures the image stays fixed */
        } 
        header {
          background-color: #333;
          color: #fff;
          text-align: center;
          padding: 1em 0;
        }
        .exit-button {
            display: inline-block;
            padding: 20px 90px;
            font-size: 16px;
            color: white;
            background-color: #1E90FF;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin: 700px 860px;
        }
        .exit-button:hover {
            background-color: red;
        }
    </style>
</head>
<body> 
    <header>
        <h1>Selamat Datang <?= htmlspecialchars($_SESSION['nama'], ENT_QUOTES, 'UTF-8') ?></h1>
    </header>
    <br/>
    <a href="logout.php?keluar" class="exit-button">Exit</a>
</body>
</html>
<?php 
} else {
    echo "<script language=\"javascript\">alert(\"Silahkan Login Terlebih Dahulu\");document.location.href='login.php';</script>";
}
?>