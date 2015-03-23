<?php
//TITLE
$eventName = "Nome do Evento";

?>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $eventName ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/icons/favicon.ico">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/semantic.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="container">

            <header>
                <div class="ui grid">
                    <div class="four wide column">Logo</div>
                    <div class="twelve wide column"><?php echo $eventName ?></div>                
                </div>
                
            </header>
            
            <nav>
                <div class="ui steps fluid">
                  <a href="" class="step">
                    <i class="file text outline icon"></i>
                    <div class="content">
                      <div class="title">Cadastro</div>
                      <div class="description">Informe seus dados</div>
                    </div>
                  </a>
                  <a href="" class="active step">
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
            </nav>

            <section class="content">
            <form class="ui form">
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
                    <input type="senha">
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
                  <div class="valor">Valor: <span class="moeda">R$ 650</span></div>
                </div>
              </div>
              
              <div class="ui success message">
                <div class="header">We noticed some issues</div>
              </div>
              <div class="ui submit button">Inscrever</div>
            </form>
            </section>
            <footer></footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/semantic.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
        /*(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');*/

        var myJS = myJS || {};
        (function ($) {

          myJS.init = function () {

            $('.ui.checkbox')
              .checkbox()
            ;
            $('select.dropdown')
              .dropdown()
            ;

          };

          myJS.init();


        }(jQuery));            
        </script>
    </body>
</html>
