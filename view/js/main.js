$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
    //encrypt and decrypt
    $(document).ready(function(){

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

        function encryptCifrar(obj)
        {
            $('#txt_result1').empty();
            var string = $('#txt_encript1').val();
            var chave = $('#txt_key_encript1').val();
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'encryptCifrar':'encryptCifrar'},
                dataType: "json",
                success : function(data){
                    $('#txt_result1').html(data);
                }
            });
        }
        function decryptCifrar(obj)
        {
            $('#txt_result1').empty();
            var string = $('#txt_decript1').val();
            var chave = $('#txt_key_decript1').val();
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'decryptCifrar':'decryptCifrar'},
                dataType: "json",
                success : function(data){
                    $('#txt_result1').html(data);
                }
            });
        }
        

        function encryptAes(obj)
        {
            $('#txt_result2').empty();
            var string = $('#txt_encript2').val();
            var chave = $('#txt_key_encript2').val();
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'encryptAes':'encryptAes'},
                dataType: "json",
                success : function(data){
                    $('#txt_result2').html(data);
                }
            });
        }
        function decryptAes(obj)
        {
            $('#txt_resul2').empty();
            var string = $('#txt_decript2').val();
            var chave = $('#txt_key_decript2').val();
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'decryptAes':'decryptAes'},
                dataType: "json",
                success : function(data){
                    $('#txt_result2').html(data);
                }
            });
        }

        function encryptMcrypt(obj)
        {
            $('#txt_result3').empty();
            var string = $('#txt_encript3').val();
            var chave = $('#txt_key_encript3').val();
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'encryptMcrypt':'encryptMcrypt'},
                dataType: "json",
                success : function(data){
                    $('#txt_result3').html(data);
                }
            });
        }
        function decryptMcrypt(obj)
        {
            $('#txt_resul3').empty();
            var string = $('#txt_decript3').val();
            var chave = $('#txt_key_decript3').val();
            $.ajax({
                type: "POST",
                url: "../model/criptografarGeral.php",
                data: {'string': string, 'chave': chave, 'decryptMcrypt':'decryptMcrypt'},
                dataType: "json",
                success : function(data){
                    $('#txt_result3').html(data);
                }
            });
        }
    })
