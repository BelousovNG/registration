$(document).ready(function(){
    $('#regist').submit(function(e){
        e.preventDefault();
        var fio=$('#fio').val();
        var login=$('#login').val();
        var mail=$('#mail').val();
        var pass=$('#pass').val();
        var repeatpass=$('#repeat-pass').val();
        if(pass!=repeatpass){
            $('#result').html("пароли не совпадают");
            return;
        }
        $.ajax({
            url : 'php/register.php',
            type: 'POST',
            data: {
            sso: fio,
            login: login,
            mail: mail,
            pass: pass
            }

            
        }).done(function(res){
            if(res=="loginerror"){
                $('#result').html("Логин занят");
                return;
            }
            location.replace('index.php')
          
        })

    });
         
    $('#sign').submit(function(e){
        e.preventDefault();
        var login=$('#sign-login').val();;
        var pass=$('#sign-pass').val();
        $.ajax({
            url : 'php/check.php',
            type: 'POST',
            data: {
            login: login,
            pass: pass
            }

            
        }).done(function(res){
            if(res=='userno'){
                $('#sign-result').html("Вы не вошли");
            }
            else{
                location.replace('index.php')
            }
           
            
          
        })
        $('#creatpost').submit(function(e){
            var img=$('#postimg')[0].files[0];
            if(img['size']>10485760){
                $('#postimg').val('');
                $('#errorfile').html("Файл превышает 10мб");
                e.preventDefault();
            }
        })
    });
         

})
