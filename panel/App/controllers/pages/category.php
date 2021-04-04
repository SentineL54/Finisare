<?

class category extends Controller {

     private static $modelName = 'categoryy';
     private static $viewFolder = 'category';


     public function __construct(){
            $this -> model = $this -> model( self::$modelName , 'pages/' );
     }

     public function start(){
        echo 'wefwfwf';
     }

     public function creat(  ){

             if( isset( $_POST['categoryCreate'] ) ) {
                 echo 'POST EDİLdi';
             } else
               $this -> view( 'add' , NULL , self::$viewFolder );
     }


}
