var myJS = myJS || {};

myJS.ga = {};

myJS.ga.send = function (category, action, label) {
    ga('send', 'event', category, action, label);
};

myJS.returnerror = function(item, message){
    //dá foco no campo e ativa botão
    setTimeout(function(){
        $('html,body').animate({scrollTop: $("label[for='"+item+"']").offset().top}, 700);
        $("#"+item).focus();
        $(".res").hide("slow");
        $('.btn-send').attr('disabled', false);
    }, 2500);

    //adiciona borda
    $("label[for='"+item+"'], #"+item).addClass("border-warning");
    //remove borda
    setTimeout(function(){
        $("label[for='"+item+"'], #"+item).removeClass("border-warning");
    }, 4500);

    icon = '<i class="warning sign icon"></i>';
    msg = icon+message;
}

myJS.init = function() {

    //SEMANTIC UI
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
        var datastring = $(".contact-form").serialize();

        //ENVIA DADOS
        $.ajax({
          url: "include/form-data.php",
          type: "post",
          data: datastring,
          dataType: "HTML"

        }).done(function(data){

            //VERIFICAÇÃO DO TEXTO DE RETORNO DO PHP   
            if(data == "cpf"){
                myJS.returnerror("cpf", "É necessário digitar um <strong>CPF válido.");
                // myJS.ga.send('contact', 'click', 'erro - nome');
            } else if(data == "cpfinscrito"){
                myJS.returnerror("cpf", "O <strong>CPF</strong> informado já está inscrito no evento.");
                // myJS.ga.send('contact', 'click', 'erro - email');
            } else if(data == "cracha"){
                myJS.returnerror("cracha", "Informe o nome para seu <strong>crachá</strong>.");
                // myJS.ga.send('contact', 'click', 'erro - telefone');
            } else if(data == "nome"){
                myJS.returnerror("nome", "Informe seu <strong>nome</strong>.");
                // myJS.ga.send('contact', 'click', 'erro - telefone');
            } else if(data == "sobrenome"){
                myJS.returnerror("sobrenome", "Informe seu <strong>sobrenome</strong>.");
                // myJS.ga.send('contact', 'click', 'erro - telefone');
            } else if(data == "assunto"){
                myJS.returnerror("assunto", "Informe o <strong>motivo</strong> do contato.");
                // myJS.ga.send('contact', 'click', 'erro - assunto');
            } else if(data == "mensagem"){
                myJS.returnerror("mensagem", "Digite uma <strong>mensagem</strong>.");
                // myJS.ga.send('contact', 'click', 'erro - mensagem');
            } else if(data == "erro"){
                msg = '<span class="glyphicon glyphicon-remove"></span>Erro ao enviar, tente novamente mais tarde.';
                // myJS.ga.send('contact', 'click', 'erro - erro_sql');
            } else if(data == "ok") {

                //SUCESSO
                $(".res").css("color","#67AFD6");

                //ENVIADO
                msg = '<i class="checkmark icon"></i>Mensagem enviada com sucesso!';
                //showMessage();

                //RESETA FORM
                $("#form.data")[0].reset();

                // myJS.ga.send('contact', 'click', 'enviado');

            } else {
                //MOSTRA MENSAGEM DE ERRO
                msg = "Erro ao enviar, tente em alguns minutos.";
                // myJS.ga.send('contact', 'click', 'erro - fail');
            }

            var showMessage = function(){
                console.log(msg);
                //ESCONDE LOADER
                $(".loader").hide();

                //MOSTRA MENSAGEM
                $(".res p").html(msg);
                $(".res").slideDown();
            }
            showMessage();

        })
        .fail(function(){
            //MOSTRA MENSAGEM DE ERRO
            msg = "Erro ao enviar, tente em alguns minutos.";
            showMessage();
            // myJS.ga.send('contact', 'click', 'erro - fail');
        });

    });

};