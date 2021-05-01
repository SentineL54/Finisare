<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Kategori' , 'Düzenle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
          <div class="row">
              <div class="col-md-12">
                  <div class="page-title">
                      <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                  </div>
              </div>
          </div>
          <?php
              if( isset( $_POST['categoryUpdate'] ) ){

                    if( $data == FALSE ) {
                          /*
                          $this -> components( 'alert' , [ 'value' => 'info' , 'message' => info , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                          self:: headerLocation( 3 , 'slider/update/'.$_POST['oldData']['random'] ); // Page -> Redirection
                          */
                    } else {
                         if( $data != NULL ) {
                             /*
                             $this -> components( 'alert' , [ 'value' => 'success' , 'message' => success, 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                             self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                             */
                         } else {
                             /*
                             $this -> components( 'alert' , [ 'value' => 'warning' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                             self:: headerLocation( 3 , 'slider/update/'.$_POST['oldData']['random'] ); // Page -> Redirection
                             */
                         }
                    }

              } else {
                 if( $data == FALSE ) {
                     /*
                     $this -> components( 'alert' , [ 'value' => "warning" , 'message' => secondary , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                     */
                 } else {
                     foreach ($data as $item): ?>

                        BURASI

                     <? endforeach;
                 }

              }
          ?>



</div>
