<?php


// error_reporting( 0 );

class App {

      protected $controller;

      public $method;

      protected $param;


      private $header = documentRoot.homeDirectory.'views/header.php';
      private $footer = documentRoot.homeDirectory.'views/footer.php';


      public function __construct(){

             // Parse URL -> İmport Data URL
             $this->parseUrll = self::parseUrl();

             // Css -> lib -> Loading Page
             \App\Libs\LibbFile::cssLib();


             if( $this->parseUrll ){

                  $this -> parseUrll = explode( '/' , $this->parseUrll ); // Parse URL -> Create

                  if( $this -> controllerFile = self::controllerFileRequire( $this->parseUrll[0] , 'pages' ) ) {

                        require_once $this -> header; // HEADER -> Loading

                              self::Route( $this -> parseUrll , $this -> controllerFile );

                        require_once $this -> footer; // FOOTER -> Loading

                  } else
                      self::Route( [ $this->parseUrll[0] , NULL , NULL ] , self::controllerFileRequire( $this->parseUrll[0] ) );

             }
             else
                self::Route( [ 'login' , NULL , ['we3r3t34t',222] ] , self::controllerFileRequire( 'login' ) );


             // JS -> lib
             \App\Libs\LibbFile::jsLib();
      }

      private function Route( $parseUrll , $controllerFile ){

              $this -> controller = $parseUrll[0]; // Controller -> Create
              unset( $parseUrll[0] );  // Controller -> ParseURL[0] -> UNSET -> RAM Trashing

              @require_once $controllerFile; // Controller -> require
              $this -> controller = new $this -> controller; // New Class Controller start

              @$this -> method = self::methodFileRequire( [ $this -> controller , $parseUrll[1] ] ); // Controller -> Create
              unset( $parseUrll[1] ); // Method -> ParseURL[0] -> UNSET -> RAM Trashing

              $this->param = $parseUrll ? array_values( $parseUrll ) : [] ; // Param -> Create

              // CallBack -> Start
              self::callBack( [ $this -> controller, $this -> method ] , count( $parseUrll ) > 1 ? [ $this -> param ] : $this -> param );
      }


      private static function callBack( $callBack = [] , $par = NULL ){
              @call_user_func_array( $callBack , $par != NULL ? $par : [] );
      }

      private static function controllerFileRequire( $data = NULL , $filePathUrl = NULL ){

              $filePathUrl !== NULL ? $filePathUrl = $filePathUrl.'/' : $filePathUrl ;

              $controllerFile = documentRoot.homeDirectory.'controllers/'.$filePathUrl.strtolower( $data ) .'.php';

              if( file_exists( $controllerFile ) )
                 return $controllerFile;
              else
                 return FALSE;

              unset( $data , $filePathUrl , $controllerFile );
      }

      private static function methodFileRequire( $data ){

                if( !empty( $data[1] ) )
                    if( method_exists( $data[0], $data[1] ) )
                       return $data[1];
                    else
                       return 'start'; // read
                else
                    return 'start';


              unset( $data );
      }

      public function parseUrl(){

            $dirBasName = [ 'dirname'=>dirname($_SERVER["SCRIPT_NAME"] ), 'basename'=>basename($_SERVER["SCRIPT_NAME"]) ];

            return ltrim( filter_var( str_replace( [$dirBasName["dirname"],$dirBasName["basename"]], NULL, $_SERVER["REQUEST_URI"]), FILTER_SANITIZE_URL ), '/' );
      }
}
