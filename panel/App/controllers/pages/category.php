<?

class category extends Controller {

     private static $modelName = 'categoryy';
     private static $viewFolder = 'category';

     // Picture - Create info
     const pictureConfig = [
       'path' => 'category',
       'type' => 'jpg', // png - webp - jpeg
       'ratio_fill' => FALSE, // TRUE - FALSE
       'width' => 380,
       'height' => 220,
     ];
     // Picture - Create info

     public function __construct(){
            $this -> model = $this -> model( self::$modelName , 'pages/' );
     }

     public function start(){
        echo 'wefwfwf';
     }

     public function creat(  ){

             if( isset( $_POST['categoryCreate'] ) ) {

                     // Random - Number -> Create
                     $this -> random = $this->random( 7 );

                     // Title - Create
                     $this -> title = $this->strReplace( $_POST['title'] );

                     // Seflink - Create
                     $this -> link = $this->sefLink( $_POST['title'] );

                     // Keywords -> Create
                     $this -> keywords = $this -> createTag( $_POST['description'] ? $_POST['description'] : $this->title );

                     // Description -> Create
                     $this -> description = $this->strReplace( $_POST['description'] ? $_POST['description'] : $this->title );

                     // $this -> upMenuData -> True / False --> Control
                     count( $this -> upMenuData = explode( '@' , $_POST['upmenu'] ) ) > 1 ?
                     $this -> upMenuData = [
                         'upmenu' => $this->strReplace( $this->upMenuData[0] ),
                         'upmenu_random' => $this->upMenuData[1],
                         'upmenu_id' => $this->upMenuData[2],
                         'upmenu_link' => $this->upMenuData[3]
                        ] : $this -> upMenuData = [
                         'upmenu' => 0,
                         'upmenu_random' => 0,
                         'upmenu_id' => 0,
                         'upmenu_link' => 0
                         ] ;

                     // Images -> Create
                     $this->image = $this->pictureLoad( [
                         'name' => $this -> link,
                         'file' => $_FILES['image'],
                         'picture' => self::pictureConfig
                     ] );
                     // Images -> Create

                 $this -> view( 'add' , $this -> model -> createBring( $data = $this ) , self::$viewFolder );

             } else
                 $this -> view( 'add' , $this -> model -> readBring( ) , self::$viewFolder );
     }


     public function read(  ){

            $this -> view( 'read' , $this -> model -> readBring( ) , self::$viewFolder );
     }

     public function delete(  ){

            echo 'KATEGORİ -> Sil';
     }

     public function update( $data ){

            echo 'kategori -> Düzenle';
     }







}
