<?

class category extends Controller {

     private static $modelName = 'category';
     private static $viewFolder = 'categoryy';


     public function __construct(){
            $this -> model = $this -> model( self::$modelName , 'pages/' );
     }

     public function start(){
        echo 'wefwfwf';
     }

     public function creat(  ){
           echo 'BURASI';
     }


}
