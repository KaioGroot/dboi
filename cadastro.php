<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
  
    <link rel="stylesheet" href="css/css.css" />
  
</head>




<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/677b7403-76bf-4871-b1eb-996331c62c03/d2n5b8i-e33b6c5a-dd53-4a4d-ba0a-801d4f1d5cff.png/v1/fill/w_800,h_203,strp/logo___dragon_ball_online_videogame_by_vicdbz_d2n5b8i-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0yMDMiLCJwYXRoIjoiXC9mXC82NzdiNzQwMy03NmJmLTQ4NzEtYjFlYi05OTYzMzFjNjJjMDNcL2QybjViOGktZTMzYjZjNWEtZGQ1My00YTRkLWJhMGEtODAxZDRmMWQ1Y2ZmLnBuZyIsIndpZHRoIjoiPD04MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.h0EAVPRkV_JQmISOpaT8yUQ2fCF_GLarPHYhSviQMuk" width="400" alt="">
        <ul>
  
<li><a class="active" href="#">Início</a></li>
			<li><a href="#">Sobre</a></li>
            <li><a class="" href="">Download</a></li>
			<li><a href="#">informação</a></li>
		</ul>
    </nav>
	<section>
		<h1></h1>
	</section>
    <a class="conectar" href="http://localhost/DANKICODE/index.php"><svg class="svg-inline--fa fa-sign-in-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" role="img" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg><!-- <i class="fas fa-sign-in-alt"></i> -->&nbsp;Log In</a>
      
        <a  class="conectar" href="http://localhost/DANKICODE/cadastro.php#"><svg class="svg-inline--fa fa-user-plus fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user-plus"></i> -->&nbsp;Register</a>
   
        <body>

      
                   
                    </div>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">

                                </div>
                               <center> <img class="foto" src="https://library.kissclipart.com/20180829/giq/kissclipart-icones-login-clipart-login-computer-icons-user-ff10ae341a89a106.png" width="49" alt="">
                            </div>
                   
    
                        <center>         <button type="submit"   class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                   <center>     <p>Faça login informando o seu usuário e senha <a class="aqui" href="login.php">aqui</a></p>
                </form>
                </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>