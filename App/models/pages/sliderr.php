<?php


class sliderr extends Model {

      private $tableName = 'slider';

      private function movementSave( array $data = NULL ){

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

                $result = $this->create( "INSERT INTO $this->tableName SET
                  random = :random,
                  kimlik = :kimlik,
                  image = :image,
                  title = :title,
                  description = :description,
                  link = :link,
                  dil = :dil,
                  datee = :datee,
                  ip_addres = :ip_addres,
                  user = :user
                  " );

                $result->execute( [
                    'random' => $data -> random,
                    'kimlik' => 'wefwefwefwef',
                    'image' => $data -> image,
                    'title' => $data -> title,
                    'description' => $data -> description,
                    'link' => $data -> link,
                    'dil' => 'eng',
                    'datee' => dateClock,
                    'ip_addres' => ipData,
                    'user' => user
                ] );

                $this->movementSave = $this->movementSave( [ 'slider' , $data -> random , 'Ekleme İşlemi başarılı' , dateClock , ipData , user ] );

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

                   if( $this->delete AND $this->movementSave )
                        return $this->delete;
                   else
                        return FALSE;

             } else
                return NULL;
      }

      public function editBring( $data = NULL , $classThis = NULL ){

             if( $data != NULL ){

                    // SQL - UPDATE
                    $this -> update = $this -> update( "UPDATE $this->tableName SET " . $classThis->dataTheSon( $classThis ) . 'random=:random, datee=:datee, ip_addres=:ip_addres, user=:user WHERE '.'random=:oldRandom' , array_merge( $classThis->dataInput ,
                    [
                      'random' => $classThis -> random,
                      'oldRandom' => $data,
                      'datee' => dateClock,
                      'ip_addres' => ipData,
                      'user' => user
                      ] ) );

                    // MOVEMENT SAVE
                    $this -> movementSave = $this->movementSave( [ 'slider' , $classThis -> random , 'Düzenleme İşlemi başarılı' , dateClock , ipData , user ] );

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
