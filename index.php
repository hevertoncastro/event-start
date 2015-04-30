<?php
//TITLE
$eventName = "XVI Congresso Brasileiro de Quadril";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $eventName ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="semantic/dist/semantic.min.css">
        <link rel="stylesheet" href="css/main.min.css">
        <script src="http://localhost:35729/livereload.js"></script>

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><?php echo $eventName ?></h1>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

            <div class="ui steps fluid">
              <a href="" class="active step">
                <i class="file text outline icon"></i>
                <div class="content">
                  <div class="title">Cadastro</div>
                  <div class="description">Informe seus dados</div>
                </div>
              </a>
              <a href="" class="disabled step">
                <i class="payment icon"></i>
                <div class="content">
                  <div class="title">Pagamento</div>
                  <div class="description">Realize o pagamento</div>
                </div>
              </a>
              <a href="" class="disabled step">
                <i class="check square icon"></i>
                <div class="content">
                  <div class="title">Confirmação</div>
                  <div class="description">Pagou? Emita seu recibo</div>
                </div>
              </a>
            </div>

            <section class="content">
            <form class="ui form" id="form-data">
              <h4 class="ui dividing header">Dados Pessoais</h4>
              <div class="three fields">
                <div class="required field">
                  <label>CPF</label>
                  <input name="cpf" placeholder="CPF" type="text">
                </div>
                <div class="required field">
                  <label>Nome</label>
                  <div class="two fields">
                    <div class="field">
                      <input name="nome" placeholder="Primeiro Nome" type="text">
                    </div>
                    <div class="field">
                      <input name="sobrenome" placeholder="Sobrenome" type="text">
                    </div>
                  </div>
                </div>
                <div class="field">
                  <label>Nome para crachá</label>
                  <input name="nome" placeholder="Nome para Crachá" type="text">
                </div>
              </div>

              <div class="three fields">
                <div class="field">
                  <label>CRM</label>
                  <input name="crm" placeholder="CRM" type="text">
                </div>
                <div class="field">
                  <label>Sexo</label>
                  <select class="ui dropdown" name="sexo">
                    <option value="">Selecione</option>
                    <option value="1">Masculino</option>
                    <option value="0">Feminino</option>
                  </select>
                </div>
                <div class="field">
                  <label>Estado Civil</label>
                  <select class="ui dropdown" name="civil">
                    <option value="">Selecione</option>
                    <option value="casado">Casado</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                  </select>
                </div>
              </div>

              <div class="three fields">
                <div class="required field">
                  <label>Nascimento</label>
                  <input name="nascimento" placeholder="Nascimento" type="text">
                </div>
                <div class="field">
                  <label>Especialidade</label>
                  <input name="especialidade" placeholder="Especialidade" type="text">
                </div>
                <div class="field">
                  <label>Instituição</label>
                  <input name="instituicao" placeholder="Instituição" type="text">
                </div>
              </div>

              <h4 class="ui dividing header">Endereço</h4>

              <div class="three fields">
                <div class="required field">
                  <label>CEP</label>
                  <input name="cep" placeholder="CEP" type="text">
                </div>
                <div class="required field">
                  <label>Endereço</label>
                  <input name="endereco" placeholder="Endereço" type="text">
                </div>
                <div class="field">
                  <label>Complemento</label>
                  <input name="complemento" placeholder="Complemento" type="text">
                </div>
              </div>

              <div class="three fields">
                <div class="field">
                  <label>Bairro</label>
                  <input name="bairro" placeholder="Bairro" type="text">
                </div>
                <div class="required field">
                  <label>Estado</label>
                  <select class="ui dropdown" name="estado">
                    <option value="">Selecione</option>
                    <option value="casado">Casado</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                  </select>
                </div>
                <div class="required field">
                  <label>Cidade</label>
                  <select class="ui dropdown" name="cidade">
                    <option value="">Selecione</option>
                    <option value="casado">Casado</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                  </select>              
                </div>
              </div>

              <h4 class="ui dividing header">Contato</h4>
              <div class="three fields">
                <div class="field">
                  <label>Telefone Residencial</label>
                  <input name="tel-res" placeholder="Telefone Residencial" type="text">
                </div>
                <div class="field">
                  <label>Telefone Comercial</label>
                  <input name="tel-com" placeholder="Telefone Comercial" type="text">
                </div>
                <div class="required field">
                  <label>Telefone Celular</label>
                  <input name="tel-cel" placeholder="Telefone Celular" type="text">
                </div>
              </div>
              <div class="two fields">
                <div class="required field">
                  <label>Email</label>
                  <div class="ui icon input">
                    <input placeholder="email" type="email">
                    <i class="mail icon"></i>
                  </div>
                </div>
                <div class="required field">
                  <label>Senha</label>
                  <div class="ui icon input">
                    <input placeholder="senha" type="password">
                    <i class="lock icon"></i>
                  </div>
                </div>
              </div>

              <h4 class="ui dividing header">Inscrição</h4>
              <div class="two fields">
                <div class="field">
                  <label>Categoria</label>
                  <select class="ui dropdown" name="categoria">
                    <option value="">Selecione</option>
                    <option value="associado">Associado</option>
                    <option value="medico">Médico</option>
                    <option value="residente">Residente</option>
                  </select>
                </div>
                <div class="field">
                  <label>Valor</label>
                  <div class="ui icon input">
                    <input type="text" value="R$ 650" disabled>
                    <i class="dollar  icon"></i>
                  </div>
                </div>
              </div>

              <div class="ui success message">
                <div class="header">We noticed some issues</div>
              </div>
              <button type="button" class="positive ui submit button btn-send">Inscrever</button>
              <div class="ui active small inline loader"></div>
              <span class="res"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, eligendi.</p></span>
            </form>

            </section>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="semantic/dist/semantic.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
            */
            var myJS = myJS || {};
            (function ($) {

              myJS.init = function () {

                $('.ui.checkbox')
                  .checkbox()
                ;
                $('select.dropdown')
                  .dropdown()
                ;

                //ENVIAR DADOS
                $(".btn-send").click(function() {

                //MOSTRA LOADER
                $(".loader").show();
                //OCULTA DIV DE DO AVISO
                $(".res").hide();
                //DESATIVA O BOTÃO SUBMIT
                $(".btn-send").attr("disabled", true);
                //SERIALIZA DADOS
                var datastring = $("#form-data").serialize();

                    //ENVIA DADOS
                    $.ajax({
                      url: "include/form-contact.php",
                      type: "post",
                      data: datastring,
                      dataType: "HTML"

                    }).done(function(data){

                      //VERIFICAÇÃO DO TEXTO DE RETORNO DO PHP
                      if(data == "nome"){
                          returnError("nome", "Informe seu <strong>nome</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "llllllll"){
                          returnError("llllllll", "Informe um <strong>llllllll</strong>.");
                      } else if(data == "erro_sql"){
                          msg = '<span class="glyphicon glyphicon-remove"></span>Erro ao enviar, tente novamente mais tarde.';
                          myJS.ga.send('contact', 'click', 'erro - erro_sql');
                      } else {
                          //SUCESSO
                          $(".res").css("color","#67AFD6");
                          //ENVIADO
                          msg = '<span class="glyphicon glyphicon-ok"></span>Mensagem enviada com sucesso!';
                          //RESETA FORM
                          //setTimeout(function(){
                          $("#form-data")[0].reset();
                          //}, 7000); //esconde após 7 segundos
                      }
                      var showMessage = function(){
                          //ESCONDE LOADER
                          $(".loader").hide();
                          //MOSTRA MENSAGEM
                          $(".res").html(data);
                          $(".res").slideDown();
                      }

                      showMessage();

                    }).fail(function(){
                      //MOSTRA MENSAGEM DE ERRO
                      msg = "Erro ao enviar, tente em alguns minutos.";
                      showMessage();
                    });
                });

              };

              myJS.init();


            }(jQuery));
        </script>
    </body>
</html>
