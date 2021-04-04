<?


class categoryy extends Model
{

      private $tableName = 'category';

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

             echo 'EKLE -> MODEL ALANI';
      }
}
