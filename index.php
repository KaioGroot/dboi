<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   
    <link rel="stylesheet" href="css/css2.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<a class="conectar" href="http://localhost/DANKICODE/cadastro.php#"><svg class="svg-inline--fa fa-user-plus fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user-plus"></i> -->&nbsp;Register</a>
<center> <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/677b7403-76bf-4871-b1eb-996331c62c03/d2n5b8i-e33b6c5a-dd53-4a4d-ba0a-801d4f1d5cff.png/v1/fill/w_800,h_203,strp/logo___dragon_ball_online_videogame_by_vicdbz_d2n5b8i-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0yMDMiLCJwYXRoIjoiXC9mXC82NzdiNzQwMy03NmJmLTQ4NzEtYjFlYi05OTYzMzFjNjJjMDNcL2QybjViOGktZTMzYjZjNWEtZGQ1My00YTRkLWJhMGEtODAxZDRmMWQ1Y2ZmLnBuZyIsIndpZHRoIjoiPD04MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.h0EAVPRkV_JQmISOpaT8yUQ2fCF_GLarPHYhSviQMuk" width="370" alt="">
<body>


                    <h3 class="title has-text-grey"> Login</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">DBOI</a></h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>
                              
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <a href="cadastro.php">Cadastrar</a>
                                  
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>