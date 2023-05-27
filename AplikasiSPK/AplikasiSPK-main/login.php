<!DOCTYPE html>
<html>
<head>
    <title>::Login Page::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="asset/css/login.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css">
</head>
<body id="login-container">
    <img src="asset/image/Logo_SPK_Kelompok_3.png" style="width: 300px;">
    <br><br>
    <div id="login-container">
        <form id="formgroup" method="POST" action="ceklogin.php">
            <div class="group-input">
                <label for="username">Username:</label>
                <input type="text" class="form-custom" required autocomplete="off" placeholder="Username" id="username" name="username">
            </div>
            <div class="group-input">
                <label for="password">Password:</label>
                <input type="password" class="form-custom" required autocomplete="off" placeholder="Password" id="password" name="password">
            </div>
            <button class="btn.btn-pink"><i class="fa fa-arrow-alt-circle-right"></i> Login</button>
        </form>
    </div>
    <p>&copy SPK Kelompok 3</p>

    <script src="asset/js/jquery.js" type="text/javascript"></script>
    <script src="asset/js/main.js" type="text/javascript"></script>
</body>
</html>
