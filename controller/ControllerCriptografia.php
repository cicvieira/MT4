<?php
/*
* Criptografia 
* Cifra de César
* AES256
* Mcrypt
*/
class Criptografia
{

    public function criptografa($textoNormal, $chave = 42)
    {
        return $this->executar($textoNormal, $chave);
    }

    public function decriptografa($textoCriptografado, $chave = -42)
    {
        return $this->executar($textoCriptografado, -$chave);
    }

    protected function executar($str, $chave)
    {
        return implode('', array_map(function ($caracter) use ($chave) {
            return $this->embaralha($caracter, $chave);
        }, str_split($str)));
    }

    protected function embaralha($caracter, $embaralhar)
    {
        $embaralhar = $embaralhar % 25;
        $ascii = ord($caracter);
        $embaralhado = $ascii + $embaralhar;
        if ($ascii >= 65 && $ascii <= 90) {
            return chr($this->wrapUppercase($embaralhado));
        }
        if ($ascii >= 97 && $ascii <= 122) {
            return chr($this->wrapLowercase($embaralhado));
        }
        return chr($ascii);
    }

    protected function wrapUppercase($ascii)
    {
        if ($ascii < 65) {
            $ascii = 91 - (65 - $ascii);
        }

        if ($ascii > 90) {
            $ascii = ($ascii - 90) + 64;
        }
        return $ascii;
    }

    protected function wrapLowercase($ascii)
    {
        if ($ascii < 97) {
            $ascii = 123 - (97 - $ascii);
        }

        if ($ascii > 122) {
            $ascii = ($ascii - 122) + 96;
        }
        return $ascii;
    }


    public function criptografaAes($textoNormal,$key) {
        $method = "AES-256-CBC";
        $key = hash('sha256', $key, true);
        $iv = openssl_random_pseudo_bytes(16);
        $ciphertext = openssl_encrypt($textoNormal, $method, $key, OPENSSL_RAW_DATA, $iv);
        $hash = hash_hmac('sha256', $ciphertext, $key, true);
        return base64_encode($iv . $hash . $ciphertext);
    }

    public function decriptografaAes($textoCriptografado, $key) {
        $ivHashCiphertext = base64_decode($textoCriptografado);
        $method = "AES-256-CBC";
        $iv = substr($ivHashCiphertext, 0, 16);
        $hash = substr($ivHashCiphertext, 16, 32);
        $ciphertext = substr($ivHashCiphertext, 48);
        $key = hash('sha256', $key, true);
        if (hash_hmac('sha256', $ciphertext, $key, true) !== $hash) return null;
        return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
    }


    public function criptografaMcrypt($textoNormal, $key) {
        $algorithm = 'rijndael-128';
        $key = md5( $key, true); 
        $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
        $iv = mcrypt_create_iv( $iv_length, MCRYPT_RAND );
        $encrypted = mcrypt_encrypt( $algorithm, $key, $textoNormal, MCRYPT_MODE_CBC, $iv );
        $result = base64_encode( $iv . $encrypted );
        return $result;
    }

    public function decriptografaMcrypt($textoCriptografado, $key) {
        $algorithm =  'rijndael-128';
        $key = md5( $key, true );
        $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
        $string = base64_decode( $textoCriptografado );
        $iv = substr( $string, 0, $iv_length );
        $encrypted = substr( $string, $iv_length );
        $result = mcrypt_decrypt( $algorithm, $key, $encrypted, MCRYPT_MODE_CBC, $iv );
        return $result;
    }


    public function compareHashes($txt_hash, $comp_txt_hash) {

       $c0 = $c1 = $c2 = 'Erro';

       $sha512 = $this->HashSHA512($txt_hash);
       $HMAC = $this->HashHMAC($txt_hash);
       $Hmd5 = $this->HashMd5($txt_hash);

       if($sha512 == $comp_txt_hash){
          $c0 = 'OK';
       }
       if($HMAC == $comp_txt_hash){
          $c1 = 'OK';
       }
       if($Hmd5 == $comp_txt_hash){
          $c2 = 'OK';
       }

       $Uhash = $comp_txt_hash;

       $a = array();
       $a[0] = array('Thash' => 'SHA512', 'Hash' => $c0 ,'Chash' => $sha512 ,'Uhash' => $Uhash,);
       $a[1] = array('Thash' => 'HMAC', 'Hash' => $c1 ,'Chash' => $HMAC , 'Uhash' => $Uhash);
       $a[2] = array('Thash' => 'MD5', 'Hash' => $c2 ,'Chash' => $Hmd5 ,'Uhash' => $Uhash);
     
       return $a;
    }


    protected function HashSHA512($string)
    {
        $rounds = 5000;
        $count = 0;
        while ($count < $rounds) {
            $string =  hash('sha512', $string);
            $count++;
        }
        return $string;
    }

    protected function HashHMAC($string)
    {
        $seguro = 'haval256,5';
        return hash_hmac($seguro, $string, '42');
    }

    protected function HashMd5($string)
    {
        $rounds = 5000;
        $count = 0;
        while ($count < $rounds) {
            $string =  hash('md5', $string);
            $count++;
        }
        return $string;
    }

}
