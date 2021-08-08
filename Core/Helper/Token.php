<?php

class Token {

      public function generate(){

              if( !isset( $_POST['_token'] ) )
                  $_SESSION['_token'] = md5(sha1(time().rand(0,9999)));

              return '<input type="hidden" name="_token" value="'.$_SESSION['_token'].'" />';
      }


      public function tokenCheck( $token = NULL ){

              if( $token != NULL ):

                    if( !isset( $token ) ):
                        return FALSE;
                    else:
                        if( $token === $_SESSION['_token'] )
                            return TRUE;
                        else
                            return FALSE;
                    endif;

              else:
                   return NULL;
              endif;

              unset( $token );
      }



      /*
      public function generate(){

            return $_SESSION['token'] = md5( time() . rand(0,999999) . base64_encode( openssl_random_pseudo_bytes(32) ) );

            if( empty( $_SESSION['key'] ) )
                $_SESSION['key'] = bin2hex( random_bytes( 32 ) ).md5(sha1(time().rand(0,9999)));

            $csrf = hash_hmac( 'sha256' , 'alinedim.com' , $_SESSION['key'] );
      }

      public function check( $token ){

             if( isset( $_SESSION['token'] ) && $token === $_SESSION['token'] )
                 unset( $_SESSION['token'] ); return TRUE;

              return FALSE;

      }*/

}
