<?php



class login extends Controller
{
     private static $viewName = 'login';
     private static $modelName = 'loginn';

     public function __construct(){

             $this -> model = $this -> model( self::$modelName );
     }

     public function start( ){

           /*
           file_exists( documentRoot.dirnameProject.'/finisare.txt' ) ?
               isset ( $_POST['login'] ) ? $this -> view( 'pages/'.self::$viewName.'/'.self::$viewName , $this -> model -> login( $_POST , $this ) ) : $this -> view( 'pages/'.self::$viewName.'/'.self::$viewName , NULL ) :
               $this -> view( 'pages/'.self::$viewName.'/'.'sign-up' , NULL) ;
            */

            if( file_exists( documentRoot.dirnameProject.'/finisare.txt' ) )
                echo 'DOSYA var';
            else {

                  if( isset( $_POST['kayitOl'] ) ) {



                         /*
                          $this->pictureData = $this->pictureLoad( [
                              'name' => 'logoo',
                              'file' => $_FILES['logo'],
                              'picture' => [
                                'type' => 'png', // png - webp - jpeg
                                'width' => 586,
                                'height' => 265,
                              ]
                          ] ); */

                  } else
                      $this -> view( 'pages/'.self::$viewName.'/'.'sign-up' , NULL);
            }


            exit;

     }

}
