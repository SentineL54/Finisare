<?php



class loginn extends Model {

      private $tableName = 'users';

      public $dataLogin = [];


      public function login( $data = NULL , $classThis ){

              if( $data != NULL ){

                  $result = $this->read( "SELECT * FROM $this->tableName WHERE username=:username AND password=:password", [
                      'username' => $data["username"],
                      'password' => $data["password"]
                    ] );

                  if( $result )
                     echo 'VAR';
                  else
                     echo 'YOK';

                     /*
                     if( $result )
                        return TRUE;
                     else
                        return NULL;
                        */

              } else
                 return NULL;

              unset( $data , $result );
              exit;
      }


}
