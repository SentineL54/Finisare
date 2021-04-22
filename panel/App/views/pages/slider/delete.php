<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Slider' , 'Sil' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
          <div class="row">
              <div class="col-md-12">
                  <div class="page-title">
                      <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                  </div>
              </div>
          </div>
          <?php

             if( $data === NULL ) {

                  $this -> components( 'alert' , [ 'value' => 'warning' , 'message' => secondary , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                  self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection

             } else{
               if( isset( $_POST['sliderDelete'] ) ){

                   if( $data == TRUE  ){
                       $this -> components( 'alert' , [ 'value' => 'success' , 'message' => success , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                       self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                   } else {
                       $this -> components( 'alert' , [ 'value' => 'danger' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                       self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirectio
                   }

               } else {
                   foreach ($data as $item) { ?>
                           <form method="post" id="grayColor" >

                                   <div class="row">
                                        <? if( $item['image'] ): ?>
                                              <div class="col-xl-6 col-sm-12 col-xs-12">
                                                   <img src="<?=$item['image']?>" class="card-img-top" alt="<?=$item['title']?>" title="<?=$item['title']?>" style="width:100%; height:100vh;">
                                              </div>
                                              <div class="col-xl-6 col-sm-12 col-xs-12">
                                        <? else: ?>
                                              <div class="col-xl-12 col-sm-12 col-xs-12">
                                        <? endif; ?>
                                                    <div class="card">
                                                          <div class="card-header text-transform-noe">
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
                                                                    <button type="submit" name="sliderDelete" class="boyutla btn btn-danger Chakra yazi_700" style="font-size:20px; color:black;">
                                                                            SİL
                                                                    </button>
                                                               </div>
                                                          </div>
                                                    </div>
                                              </div>
                                   </div>

                                  <input type="hidden" name="image" value="<?=$item['image']?>" />
                          </form><? }
                 }
             }
          ?>
      </div>

</div>
