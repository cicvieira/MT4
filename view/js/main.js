$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
    //encrypt and decrypt
    $(document).ready(function(){
        $('.hide').hide();

        //cifra de cesar envio via ajax
        $('#btn_encript1').click(function(){
            encryptCifrar($(this));
        })
        $('#btn_decript1').click(function(){
            decryptCifrar($(this));
        })

        //aes envio via ajax
        $('#btn_encript2').click(function(){
            encryptAes($(this));
        })
        $('#btn_decript2').click(function(){
            decryptAes($(this));
        })

        //Mcrypt envio via ajax
        $('#btn_encript3').click(function(){
            encryptMcrypt($(this));
        })
        $('#btn_decript3').click(function(){
            decryptMcrypt($(this));
        })

        //Compare Hashes
        $('#btn_hash').click(function(){
            compareHashes($(this));
        })



        function encryptCifrar(obj)
        {
            $('#txt_result1').empty();
            var string = $('#txt_encript1').val();
            var chave = $('#txt_key_encript1').val();
            if(string=='' || chave ==''){
                $('.hide').show();
                $('.alert-danger').html('Digite o Texto e Chave! {encryptCifrar}');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'encryptCifrar':'encryptCifrar'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    $('#txt_result1').html(data);
                }
            });
        }

        function decryptCifrar(obj)
        {
            $('#txt_result1').empty();
            var string = $('#txt_decript1').val();
            var chave = $('#txt_key_decript1').val();
            if(string=='' || chave ==''){
                $('.hide').show();
                $('.alert-danger').html('Digite o Texto e Chave! {decryptCifrar}');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'decryptCifrar':'decryptCifrar'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    $('#txt_result1').html(data);
                }
            });
        }
        

        function encryptAes(obj)
        {
            $('#txt_result2').empty();
            var string = $('#txt_encript2').val();
            var chave = $('#txt_key_encript2').val();
            if(string=='' || chave ==''){
                $('.hide').show();
                $('.alert-danger').html('Digite o Texto e Chave! {encryptAes}');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'encryptAes':'encryptAes'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    $('#txt_result2').html(data);
                }
            });
        }

        function decryptAes(obj)
        {
            $('#txt_resul2').empty();
            var string = $('#txt_decript2').val();
            var chave = $('#txt_key_decript2').val();
            if(string=='' || chave ==''){
                $('.hide').show();
                $('.alert-danger').html('Digite o Texto e Chave! {decryptAes}');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'decryptAes':'decryptAes'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    $('#txt_result2').html(data);
                }
            });
        }

        function encryptMcrypt(obj)
        {
            $('#txt_result3').empty();
            var string = $('#txt_encript3').val();
            var chave = $('#txt_key_encript3').val();
            if(string=='' || chave ==''){
                $('.hide').show();
                $('.alert-danger').html('Digite o Texto e Chave! {encryptMcrypt}');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'encryptMcrypt':'encryptMcrypt'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    $('#txt_result3').html(data);
                }
            });
        }

        function decryptMcrypt(obj)
        {
            $('#txt_resul3').empty();
            var string = $('#txt_decript3').val();
            var chave = $('#txt_key_decript3').val();
            if(string=='' || chave ==''){
                $('.hide').show();
                $('.alert-danger').html('Digite o Texto e Chave! {decryptMcrypt}');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'decryptMcrypt':'decryptMcrypt'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    $('#txt_result3').html(data);
                }
            });
        }

        function compareHashes(obj)
        {
            $('#hash_txt_result').empty();
            var html = '';
            var txt_hash = $('#txt_hash').val();
            var comp_txt_hash = $('#comp_txt_hash').val();
            if(txt_hash==''){
                $('.hide').show();
                $('.alert-danger').html('Texto obrigatório!');
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'txt_hash': txt_hash, 'comp_txt_hash': comp_txt_hash, 'compareHashes':'compareHashes'},
                dataType: "json",
                success : function(data){
                    $('.hide').hide();
                    for (var i = 0; i < data.length; i++) {
                        var css = 'table-danger';
                        if(data[i].Hash=='OK'){
                            css = 'table-success';
                        }

                        html += '<tr class="'+css+'">';
                        html += '<td>'+data[i].Thash+'</td>';
                        html += '<td>'+data[i].Hash+'</td>';
                        html += '<td>'+data[i].Chash+'</td>';
                        html += '<td>'+data[i].Uhash+'</td>';
                        html += '</tr>';
                    }

                    $('#hash_txt_result').html(html);
                }
            });
        }
    })
