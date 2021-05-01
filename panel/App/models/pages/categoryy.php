<?


class categoryy extends Model
{
      private $tableName = 'category';

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

                   $this->result = $this->create( "INSERT INTO $this->tableName SET
                     random = :random,
                     kimlik = :kimlik,
                     ranking = :ranking,
                     title = :title,
                     link = :link,
                     image = :image,
                     keywords = :keywords,
                     description = :description,
                     upmenu = :upmenu,
                     upmenu_random = :upmenu_random,
                     upmenu_id = :upmenu_id,
                     upmenu_link = :upmenu_link,
                     dil = :dil,
                     datee = :datee,
                     ip_addres = :ip_addres,
                     user = :user
                     " );

                   $this->result->execute( array_merge( $data -> upMenuData , [
                     'random' => $data->random,
                     'kimlik' => 'wefwefwef',
                     'ranking' => self::rowCountt( $this->tableName )+1,
                     'title' => $data->title,
                     'link' => $data->link,
                     'image' => $data->image,
                     'keywords' => $data->keywords,
                     'description' => $data->description,
                     'dil' => 'eng',
                     'datee' => dateClock,
                     'ip_addres' => ipData,
                     'user' => user
                     ] ) );

                     $this->movementSave = $this->movementSave( [ 'category' , $data -> random , 'Ekleme İşlemi başarılı' , dateClock , ipData , user ] );

                     if ( $this->result and $this->movementSave )
                         return TRUE;
                     else
                         return FALSE;

             } else
             return NULL;
      }

      public function readBring( $data = NULL ){
              if( $data != NULL )
                  return $this->read( "SELECT * FROM $this->tableName WHERE random=:random" , [ 'random' => $data ] );
              else
                  return $this->read( "SELECT * FROM $this->tableName WHERE upmenu_random=:upmenu_random ORDER BY ranking DESC" , [ 'upmenu_random' => 0 ] );
      }
}
