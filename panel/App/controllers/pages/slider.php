<?php
echo 'buradayımm';

class slider extends Controller {

        private static $viewFolder = 'slider';
        private static $modelName = 'sliderr';

        // Picture - Create info
        const pictureConfig = [
          'path' => 'slider',
          'type' => 'jpg', // png - webp - jpeg
          'ratio_fill' => FALSE, // TRUE - FALSE
          'width' => 1280,
          'height' => 720,
        ];
        // Picture - Create info

        public function __construct(){
               $this -> model = $this -> model( self::$modelName , 'pages/' );
        }

        public function start(){
             echo 'Başlangıç';
        }

        public function creat( ){

               if( isset ( $_POST['sliderCreate'] ) ){

                      // Random - Number -> Create
                      $this -> random = $this->random( 7 );

                      // Title - Create
                      $this -> title = $this->strReplace( $_POST['title'] );

                      // Seflink - Create
                      $this -> link = $this->sefLink( $_POST['title'] );

                      // Description - Create
                      $this -> description = $this->strReplace( $_POST['title'] );
                      // $this->strReplace( $_POST['description'] )

                      // Images -> Create
                      $this->image = $this->pictureLoad( [
                          'name' => $this->random( 10 ),
                          'file' => $_FILES['image'],
                          'picture' => self::pictureConfig
                      ] );

                      $this -> view ( 'add' , $this->model->createBring( $data = $this ) , self::$viewFolder );

               }  else
                  $this -> view( 'add' , NULL , self::$viewFolder );
        }

        public function read(){

               echo '<script src="'.domain.dirnameProject.'/'.'assets/js/lightbox-plus-jquery.min.js"></script>';
               $this -> view( 'read' , $this -> model -> readBring() , self::$viewFolder );
        }

        public function delete( $data = NULL ){

               if( isset( $_POST['sliderDelete'] ) ) {
                    // Picture - Unlink
                    if( $_POST['image'] ) $this -> pictureUnlink = $this->pictureUnlink( $_POST['image'] );

                    $this -> view( 'delete' , $this -> model -> deleteBring( $data , $this ) , self::$viewFolder );
              } else
                   $this -> view( 'delete' , $this -> model -> readBring( $data ) == TRUE ? $this -> model -> readBring( $data ) : NULL , self::$viewFolder ); // $this -> model -> readBring( $data ) == TRUE ? $this -> model -> readBring( $data ) : FALSE
        }

        public function update( $data ){

               if( isset( $_POST['sliderUpdate'] ) ){

                        // RANDOM -> Create
                        $this -> random = $this->random();


                        // Picture - Create
                        $this->pictureData = $this->pictureLoad(
                         [
                             'name' => $this->random( 10 ),
                             'file' => $_FILES['image'],
                             'picture' => self::pictureConfig
                         ] );

                       // Picture Control
                       $this->pictureData == TRUE ? $this->pictureData = $this->pictureData : $this->pictureData = $_POST['oldData']['image'];

                       // Data Control
                       $this->dataInput = $this->dataInputCheck( [
                             [
                               'title'  => $this->strReplace( $_POST['title'] ),
                               'description' => $this->strReplace( $_POST['description'] ),
                               'image' => $this->pictureData
                             ] ,
                             [
                               $this->strReplace( $_POST['oldData']['title'] ),
                               $this->strReplace( $_POST['oldData']['description'] ),
                               $_POST['oldData']['image'],
                             ]
                         ] );

                    $this -> view( 'update' , $this->dataInput ? $this -> model -> editBring( $data , $this ) : FALSE , self::$viewFolder );


               } else
               $this -> view( 'update' , $this -> model -> readBring( $data ) , self::$viewFolder );
        }

        public function config(){
               echo 'Slider -> AYAR FONKSİYONU';
        }
  }
