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
        },

        messages: {
            nome: 'Campo Obrigatório. Digite o seu nome',
            email: {
                required: 'Campo Obrigatório.',
                email: 'Digite um email válido'
            }
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