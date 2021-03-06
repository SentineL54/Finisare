<?php

class slider extends Controller {

        private static $viewFolder = 'slider';
        private static $modelName = 'sliderr';

        // Picture - Create info
        const pictureConfig = [
          'path' => 'slider',
          'type' => 'jpg', // png - webp - jpeg
          'ratio_fill' => FALSE, // TRUE - FALSE
          'width' => 780,
          'height' => 320,
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
                      $this -> description = $this->strReplace( $_POST['description'] );
                      // $this->strReplace( $_POST['description'] )

                      // Images -> Create
                      $this->image = $this->pictureLoad( [
                          'name' => $this->random( 10 ),
                          'file' => $_FILES['image'],
                          'picture' => self::pictureConfig
                      ] );


                      $this -> view ( 'creat' , $this -> token() -> tokenCheck( $_POST['_token'] ) ? $this -> model -> createBring( $data = $this ) : FALSE , self::$viewFolder );

               }  else
                  $this -> view( 'creat' , NULL , self::$viewFolder );
        }

        public function read(){

               echo '<script src="'.domain.dirnameProject.'/'.'assets/js/lightbox-plus-jquery.min.js"></script>';
               $this -> view( 'read' , $this -> model -> readBring() , self::$viewFolder );
        }

        public function delete( $data = NULL ){

               if( isset( $_POST['sliderDelete'] ) ):

                    // Picture - Unlink
                    if( $_POST['oldData']['image'] ) $this -> pictureUnlink = $this->pictureUnlink( $_POST['oldData']['image'] );


                    $this -> view( 'delete' , $this -> token() -> tokenCheck( $_POST['_token'] ) ? $this -> model -> deleteBring( $data , $this ) : FALSE , self::$viewFolder );
               else:
                    $this -> view( 'delete' , $this -> model -> readBring( $data ) == TRUE ? $this -> model -> readBring( $data ) : NULL , self::$viewFolder ); // $this -> model -> readBring( $data ) == TRUE ? $this -> model -> readBring( $data ) : FALSE
               endif;
        }

        public function update( $data ){

               if( isset( $_POST['sliderUpdate'] ) ):

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
                       $this->pictureData ? $this->pictureData = $this->pictureData : $this->pictureData = $_POST['oldData']['image'];

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

                     if( is_null( $this->dataInput ) )
                        $this -> update = NULL;
                     else
                        $this -> update = $this -> model -> editBring( $data , $this );

                     $this -> view( 'update' , $this -> token() -> tokenCheck( $_POST['_token'] ) ? $this -> update : FALSE , self::$viewFolder );


               else:
                    $this -> view( 'update' , $this -> model -> readBring( $data ) , self::$viewFolder );
               endif;
        }

        public function config(){
               echo 'Slider -> AYAR FONKSİYONU';
        }
  }
