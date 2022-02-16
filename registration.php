<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title>Rusaero</title>
</head>

    <section class="section">
<body>
    
    <form action="php/check.php" method="post" id="sign">
        <div class="sign_in">
            <div class="container">
                <div class="sign-content">
                    <h2 class="title_sign">Логин</h2>
                    <input type="text" name='login' class='sing-inp' required id="sign-login">
                    <h2 class="title_sign" >Пароль</h2>
                    <input type="text" name='password' class='sing-inp' required id="sign-pass"><br>
                    <button class='sign' id="button">ВОЙТИ</button>
                    <a href="register.php">Зарегистрироваться</a>
                    <h1 id="sign-result"></h1>
                </div>
            </div>
        </div>
    </form>
    
     <h1></h1>
    <a href="php/exit.php"></a>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="script-sign.js"></script>
</body>
</html>