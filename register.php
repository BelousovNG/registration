<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title></title>
</head>
<body>
<form action="php/register.php" method="post" id="regist">
        <div class="sign_in">
            <div class="container">
                <div class="sign-content">
                    <h1>Регистрация</h1><br><br>

                    <input type="text" name='sso' class='sing-inp' placeholder="Введите ФИО"  pattern="^[А-Яа-яЁё\s]+$" id="fio" required><br>
                    <input type="text" name='login' class='sing-inp' placeholder="Введите логин"  pattern="^[a-zA-Z]+$" id="login" required> <br>
                    <input type="email" name='mail' class='sing-inp' placeholder="Введите почту"  id="mail" required> <br>
                    <input type="text" name='pass' class='sing-inp' placeholder="Введите пароль" id="pass" required> <br>
                    <input type="text" name='pass_repeat' class='sing-inp' placeholder="Повтор пароля"  id="repeat-pass" required> <br>
                    <input type="checkbox" name="" id="sogl" required><label for="sogl">Согласисие на обработку персональных данных </label><br>
                    <br>
                    <input type="submit" name="sub" class="registr" value="Зарегистрироваться">
                   <h1 id="result"></h1>
                </div>
            </div>
        </div>
    </form>
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="script-sign.js">

    </script>
</body>
</html>