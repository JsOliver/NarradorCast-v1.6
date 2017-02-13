$(document).ready(function(){
    $('#ajax_form').validate({
        rules: {
            nome: { required: true, minlength: 2 },
            email: { required: true, email: true },
            mensagem: { required: true, minlength: 10}
        },
        messages: {
            nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },
            email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },
            mensagem: { required: 'Prencha esse campo', minlength: 'No mínimo 10 letras' }

        },
        submitHandler: function( form ){
            var dados = $( form ).serialize();

            $.ajax({
                type: "POST",
                url: "contatoForm",
                data: dados,
                success: function( data )
                {
                    $("#contatoSucess").text('Obrigado por entrar em contato conosco.');
                    $("#c-form-3-email").val("");
                    $("#c-form-3-subject").val("");
                    $("#c-form-3-message").val("");
                }
            });

            return false;
        }
    });
});