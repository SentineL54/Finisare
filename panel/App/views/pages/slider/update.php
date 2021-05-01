<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Slider' , 'Düzenle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
          <div class="row">
              <div class="col-md-12">
                  <div class="page-title">
                      <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                  </div>
              </div>
          </div>
          <?php
              if( isset( $_POST['sliderUpdate'] ) ){

                    if( $data == FALSE ) {
                          $this -> components( 'alert' , [ 'value' => 'info' , 'message' => info , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                          self:: headerLocation( 3 , 'slider/update/'.$_POST['oldData']['random'] ); // Page -> Redirection
                    } else {
                         if( $data != NULL ) {
                             $this -> components( 'alert' , [ 'value' => 'success' , 'message' => success, 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                             self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                         } else {
                             $this -> components( 'alert' , [ 'value' => 'warning' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                             self:: headerLocation( 3 , 'slider/update/'.$_POST['oldData']['random'] ); // Page -> Redirection
                         }
                    }

              } else {
                 if( $data == FALSE ) {
                     $this -> components( 'alert' , [ 'value' => "warning" , 'message' => secondary , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                 } else {
                     foreach ($data as $item) { ?>
                         <form method="post" id="grayColor" enctype="multipart/form-data">

                           <div class="row">
                                    <? if( $item['image'] ): ?>
                                          <div class="col-xl-6 col-sm-12 col-xs-12">
                                               <img src="<?=$item['image'];?>" class="card-img-top" alt="<?=$item['title'];?>" title="<?=$item['title'];?>" style="width:100%; height:100vh;">
                                          </div>
                                          <div class="col-xl-6 col-sm-12 col-xs-12">
                                    <? else: ?>
                                          <div class="col-xl-12 col-sm-12 col-xs-12">
                                    <? endif; ?>
                                                <div class="card">
                                                      <div class="card-header text-transform-none">
                                                            <div class="hidden-xl hidden-lg hidden-md margin-top-20"></div>
                                                            <div class="form-group">
                                                                  <label for="exampleInputEmail3" class="Chakra yazi_700 text-transform-none" id="formLabel">Slider Başlık :</label>
                                                                  <input
                                                                  value="<?=$item['title'];?>"
                                                                  required
                                                                  type="text"
                                                                  name="title"
                                                                  class="form-control"
                                                                  id="exampleInputEmail1"
                                                                  aria-describedby="emailHelp"
                                                                  placeholder="Slider Başlık :" />
                                                                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                            </div>
                                                            <div class="hidden-sm hidden-xs margin-top-30"></div>
                                                            <div class="form-group">
                                                                  <label for="exampleInputEmail3" class="Chakra yazi_700 text-transform-none" id="formLabel">Slider Açıklama :</label>
                                                                  <input
                                                                  value="<?=$item['description'];?>"
                                                                  required
                                                                  type="text"
                                                                  name="description"
                                                                  class="form-control"
                                                                  id="exampleInputEmail1"
                                                                  aria-describedby="emailHelp"
                                                                  placeholder="Slider Açıklama :" />
                                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                            </div>
                                                            <div class="hidden-sm hidden-xs margin-top-30"></div>
                                                            <div class="form-group">
                                                                  <label for="exampleInputEmail3" class="text-transform-none Chakra yazi_700" id="formLabel">Slider Resim :</label>
                                                                  <input
                                                                  type="file"
                                                                  name="image"
                                                                  class="form-control"
                                                                  id="exampleInputEmail1"
                                                                  aria-describedby="emailHelp" />
                                                            </div>
                                                      </div>
                                                      <div class="card-body">
                                                            <div class="boyutla Chakra">
                                                                 <i class="fa fa-user" aria-hidden="true"></i> <?=space.$item['user'];?>
                                                                 <?=space.space.space;?>
                                                                 <i class="fa fa-envelope" aria-hidden="true"></i> <?=space.explode( '-' , $item['datee'] )[0];?>
                                                                 <?=space.space.space;?>
                                                                 <i class="fa fa-link" aria-hidden="true"></i> <?=space.$item['ip_addres'];?>
                                                            </div>
                                                      </div>
                                                      <div class="card-footer">
                                                           <div class="boyutla">
                                                                <button type="submit" name="sliderUpdate" class="boyutla btn btn-warning Chakra yazi_700" style="font-size:20px; color:black;">
                                                                        DÜZENLE
                                                                </button>
                                                           </div>
                                                      </div>
                                                </div>
                                          </div>
                               </div>

                               <input type="hidden" name="oldData[random]" value="<?=$item['random'];?>" />
                               <input type="hidden" name="oldData[title]" value="<?=$item['title'];?>" />
                               <input type="hidden" name="oldData[description]" value="<?=$item['description'];?>" />
                               <input type="hidden" name="oldData[image]" value="<?=$item['image'];?>" />
                         </form><? }
                 }

              }
          ?>


      </div>
</div>
