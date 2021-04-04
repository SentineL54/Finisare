<?php


class slider extends Controller {

        private static $viewFolder = 'slider';
        private static $modelName = 'sliderr';

        const pictureConfig = [
          'path' => 'slider',
          'type' => 'jpeg', // png - webp - jpeg
          'ratio_fill' => FALSE, // TRUE - FALSE
          'width' => 721,
          'height' => 1180,
        ];

        public function __construct(){
               $this -> model = $this -> model( self::$modelName , 'pages/' );
        }

        public function start(){
             echo 'Başlangıç';
        }

        public function creat( ){

               if( isset ( $_POST['sliderCreate'] ) ){

                      $this->pictureData = $this->pictureLoad( [
                          'name' => $this->random( 10 ),
                          'file' => $_FILES['image'],
                          'picture' => self::pictureConfig
                      ] );

                      $this -> view ( 'add' , $this->model->createBring( $data = $this ) , 'pages/' . self::$viewFolder );

               }  else
                  $this -> view( 'add' , NULL , 'pages/' . self::$viewFolder );

        }

        public function read(){

               echo '<script src="'.domain.dirnameProject.'/'.'assets/js/lightbox-plus-jquery.min.js"></script>';
               $this -> view( 'list' , $this -> model -> readBring() , 'pages/' . self::$viewFolder );
        }

        public function delete( $data = NULL ){

               if( isset( $_POST['sliderDelete'] ) )
                   $this -> view( 'delete' , $this -> model -> deleteBring( $data , $this ) , 'pages/' . self::$viewFolder );
               else
                   $this -> view( 'delete' , $this -> model -> readBring( $data ) == TRUE ? $this -> model -> readBring( $data ) : NULL , 'pages/' . self::$viewFolder ); // $this -> model -> readBring( $data ) == TRUE ? $this -> model -> readBring( $data ) : FALSE
        }

        public function edit( $data ){

               if( isset( $_POST['sliderEdit'] ) ){

                        // PİCTURE - CREATE
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
                               'baslik'  => $_POST['title'] ,
                               'aciklama' => $_POST['description'],
                               'resim_yol' => $this->pictureData
                             ] ,
                             [
                               $_POST['oldData']['title'] ,
                               $_POST['oldData']['description'],
                               $_POST['oldData']['image'],
                             ]
                         ] );

                      $this -> view( 'edit' , $this->dataInput ? $this -> model -> editBring( $data , $this ) : FALSE , 'pages/' . self::$viewFolder );

               } else
               $this -> view( 'edit' , $this -> model -> readBring( $data ) , 'pages/' . self::$viewFolder );
        }

        public function config(){
               echo 'Slider -> AYAR FONKSİYONU';
        }
  }
