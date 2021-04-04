<?php



class sliderr extends Model {

      private $tableName = 'slider';

      public $id;
      public $title;
      public $description;
      public $image;

      private function movementSave( $data = NULL ){

              if( $data != NULL ){
                    $result = $this->create( "INSERT INTO hareket SET tip = ?, random = ?, operation = ?, datee = ?, ip_address = ?, user = ?" );
                    $result->execute( $data );
                    if( $result == TRUE )
                       return TRUE;
                    else
                       return NULL;
              } else
              return NULL;
      }

      public function createBring( $data = NULL ){

             if( $data != NULL ){

                $this -> random = $data->random( 7 ); // // Random - Number -> Create

                $result = $this->create( "INSERT INTO $this->tableName SET
                  random = :random,
                  kimlik = :kimlik,
                  resim_yol = :resim_yol,
                  baslik = :title,
                  aciklama = :description,
                  slider_link = :link,
                  dil = :dil,
                  datee = :datee,
                  ip_addres = :ip_addres,
                  user = :user
                  " );

                $result->execute( [
                    'random' => $this -> random,
                    'kimlik' => 'wefwefwefwef',
                    'resim_yol' => $data->pictureData,
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'link' => $data->sefLink( $_POST['title'] ),
                    'dil' => 'eng',
                    'datee' => dateClock,
                    'ip_addres' => ipData,
                    'user' => user
                ] );

                $this->movementSave = $this->movementSave( [ 'slider' , $this -> random , 'Ekleme İşlemi başarılı' , dateClock , ipData , user ] );

                if ( $result and $this->movementSave ){
                     return TRUE;
                } else
                    return FALSE;
             } else
               return NULL;
      }

      public function readBring( $data = NULL ){

            if( $data != NULL )
                return $this->read( "SELECT * FROM $this->tableName WHERE random=:random" , [ 'random' => $data ] );
            else
                return $this->read( "SELECT * FROM $this->tableName ORDER BY id DESC" );
      }

      public function deleteBring( $data = NULL , $classThis = NULL ){

             if( $data != NULL ){

                   // SQL - DELETE
                   $this->delete = $this->delete( "DELETE FROM $this->tableName WHERE random=:random" , [ 'random' => $data ] );

                   // MOVEMENT SAVE
                   $this->movementSave = $this->movementSave( [ 'slider' , $data , 'Silme İşlemi başarılı' , dateClock , ipData , user ] );

                   // Picture - Unlink
                   $this -> pictureUnlink = $classThis->pictureUnlink( $image = $_POST['image'] , $classThis );

                   if( $this -> pictureUnlink AND $this->delete AND $this->movementSave )
                        return $this->delete;
                   else
                        return FALSE;

             } else
                return NULL;
      }

      public function editBring( $data = NULL , $classThis = NULL ){

             if( $data != NULL ){

                    // RANDOM -> Create
                    $this -> random = $classThis->random();

                    // SQL - UPDATE
                    $this -> update = $this -> update( "UPDATE $this->tableName SET " . $classThis->dataTheSon( $classThis ) . 'random=:random, datee=:datee, ip_addres=:ip_addres, user=:user WHERE '.'random=:oldRandom' , array_merge( $classThis->dataInput ,
                    [
                      'random' => $this -> random,
                      'oldRandom' => $data,
                      'datee' => dateClock,
                      'ip_addres' => ipData,
                      'user' => user
                      ] ) );

                    // MOVEMENT SAVE
                    $this -> movementSave = $this->movementSave( [ 'slider' , $this -> random , 'Düzenleme İşlemi başarılı' , dateClock , ipData , user ] );

                    if( $this -> update and $this -> movementSave ){

                       // Picture Unlink
                       $classThis->pictureUnlink( $image = $_POST['oldData']['image'] , $classThis );

                       return TRUE;

                    } else
                       return NULL;

             } else
                return NULL;
      }
}
