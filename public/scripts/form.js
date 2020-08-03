$(document).ready(function(){
    $('#formulario').validate({
        errorLabelContainer: '#erros',
        wrapper: 'p',

        rules: {
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            senha: 'required'
        },

        messages: {
            nome: 'Campo Obrigatório. Digite o seu nome',
            email: {
                required: 'Campo Obrigatório.',
                email: 'Digite um email válido'
            },
            senha: 'Campo Obrigatório. Digite a sua senha'
        },
        submitHandler: function(form){
            var data = $(form).serialize();
            $.ajax({
                method: 'post',
                url: '../cadastro.php',
                data: data,
                success: function(result){
                    if(result.status){
                        $('#formulario').hide();
                        $('#msgCadastroRealizado').show();
                    }
                }
            })
        }
    })
})