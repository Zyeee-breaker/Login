<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyeee</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/originals/31/68/c0/3168c09eeeb529be5b321575fe56b02b.gif');
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8); /* Slightly transparent background */
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .title {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 1em;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
        }

        .footer-text {
            margin-top: 20px;
            font-size: 1.2em;
            color: black;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <div class="footer-text">Write and edit by Zyeee</div>
            <h6>Silahkan Isikan Username dan Password untuk Login</h6>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Login" name="login"/>
            </form>
        </div>
    </div>

</body>
</html>