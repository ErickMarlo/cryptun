<?php

class cryptun {
  function en($txt,$key='SoMePaSsword K8s',$alg='twofish',$mod ='ecb')
  {

      $iv = mcrypt_create_iv(mcrypt_get_iv_size($alg, $mod), MCRYPT_RAND);
      $encrypted_string = mcrypt_encrypt($alg, $key, $txt, $mod, $iv);
      return base64_encode($encrypted_string);
  }

  function de($txt,$key='SoMePaSsword K8s',$alg='twofish',$mod ='ecb')
  {
      $txt = base64_decode($txt);

      $iv = mcrypt_create_iv(mcrypt_get_iv_size($alg, $mod), MCRYPT_RAND);
      $decrypted_string = mcrypt_decrypt($alg, $key,  $txt, $mod, $iv);
      return trim($decrypted_string);
  }

}

?>
