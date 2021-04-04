<?php


class menu extends Controller {

      private static $viewFolder = 'menu';
      private static $modelName = 'menuu';


      public function __construct(){
             $this -> model = $this -> model( self::$modelName , 'pages/' );
      }

      public function start( ){ self::read(); }

      public function creat( ){

              if( isset( $_POST['menuCreate'] ) ) {

                    // Random - Number -> Create
                    $this -> random = $this->random( 7 );

                    // Title -> Create
                    $this -> title = $this->strReplace( $_POST['title'] );

                    // SefLink -> Create
                    $this -> link = $this->sefLink( $_POST['title'] );

                    // Keywords -> Create
                    $this -> keywords = $this -> createTag( $_POST['description'] ? $_POST['description'] : $this->title );

                    // Description -> Create
                    $this -> description = $this->strReplace( $_POST['description'] ? $_POST['description'] : $this->title );

                    // $this -> upMenuData -> True / False --> Control
                    count( $this -> upMenuData = explode( '@' , $_POST['upmenu'] ) ) > 1 ?
                    $this -> upMenuData = [
                        'upmenu' => $this->upMenuData[0],
                        'upmenu_random' => $this->upMenuData[1],
                        'upmenu_id' => $this->upMenuData[2],
                        'upmenu_link' => $this->upMenuData[3]
                       ] : $this -> upMenuData = [
                        'upmenu' => 0,
                        'upmenu_random' => 0,
                        'upmenu_id' => 0,
                        'upmenu_link' => 0
                        ] ;

                    $this -> view( 'add' , $this -> model -> createBring( $data = $this ) , 'pages/' . self::$viewFolder );
              } else
              $this -> view( 'add' , $this -> model -> readBringMen() , 'pages/' . self::$viewFolder );
      }

      public function read( ) {

             $this -> view( 'list' , $this -> model -> readBring( ), 'pages/' . self::$viewFolder );
      }

      public function delete( $data ){

             if( isset( $_POST['menuDelete'] ) ) {

                   $this -> view( 'delete' , $this -> model -> deleteBring( $data ) , 'pages/' . self::$viewFolder );

             } else
                  $this -> view( 'delete' , $this -> model -> readBring( $data ) , 'pages/' . self::$viewFolder );
      }

      public function edit( $data ){

             if( isset( $_POST['menuEdit'] ) ){

                   $this -> upmenu = explode( '@' , $_POST['upmenu'] );

                   // Data Control
                   @$this->dataInput = $this->dataInputCheck( [
                         [
                           'title' => $this->strReplace( $_POST['title'] ),
                           'link' => $this->sefLink( $_POST['title'] ),
                           'upmenu' => $this -> upmenu[0],
                           'upmenu_random' => $this -> upmenu[1],
                           'upmenu_id' => $this -> upmenu[2],
                           'upmenu_link' => $this -> upmenu[3],
                           'keywords' => $this -> createTag( $_POST['description'] ? $_POST['description'] : $_POST['title'] ),
                           'description' => $this->strReplace( $_POST['description'] ? $_POST['description'] : $_POST['title'] ),
                           'content' => $_POST['content'],
                         ] ,
                         [
                           $_POST['oldData']['title'],
                           $_POST['oldData']['link'],
                           $_POST['oldData']['upmenu'],
                           $_POST['oldData']['upmenu_random'],
                           $_POST['oldData']['upmenu_id'],
                           $_POST['oldData']['upmenu_link'],
                           $_POST['oldData']['keywords'],
                           $_POST['oldData']['description'],
                           $_POST['oldData']['content'],
                         ]
                     ] );
                  // Data Control


                  $this -> view(
                    'edit' ,
                    $this->dataInput ? $this -> model -> editBring( $data , $this ) : FALSE ,
                    'pages/' . self::$viewFolder
                  );



             } else {

                   $this -> view( 'edit' ,
                      $this -> model -> readBring( $data ) ?
                      [ 'data' => $this -> model -> readBring( $data ) , 'menu' => $this -> model -> readBringMen( ) ] :
                      FALSE ,
                      'pages/' . self::$viewFolder
                   );
             }
      }

      public function altmenu( $data ){

             $this -> view( 'list' , $this -> model -> subMenuSearch( $data ), 'pages/' . self::$viewFolder );
      }
}
