<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Slider' , 'Ekle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
            <div class="row">
                  <div class="col-md-12">
                       <div class="page-title">
                            <p class="page-desc">
                               Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p>
                       </div>
                  </div>
            </div>
            <?php
            if( $data != NULL ){

                 if( $data == TRUE ){
                    self:: components( 'alert' , [ 'value' => 'success' , 'message' => success , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                    self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                 } else {
                    self:: components( 'alert' , [ 'value' => 'danger' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                    self:: headerLocation( 3 , 'slider/creat' ); // Page -> Redirection
                 }

            } else { ?>
                    <form method="post" id="grayColor" enctype="multipart/form-data">
                           <div class="row">
                                 <div class="col-xl-12 col-sm-12 col-xs-12">
                                      <div class="card">
                                            <div class="card-body">
                                                  <div class="form-group">
                                                        <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Slider Başlık :</label>
                                                        <input
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
                                                        <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Slider Açıklama :</label>
                                                        <input
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
                                                        <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Slider Resim :</label>
                                                        <input
                                                        type="file"
                                                        name="image"
                                                        class="form-control"
                                                        id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" />
                                                  </div>
                                            </div>
                                            <div class="card-footer">
                                                  <div class="row sifirla">
                                                        <div class="col-xl-6 hidden-sm hidden-xs"></div>
                                                        <div class="col-xl-6 col-sm-12 col-xs-12 sifirla">
                                                              <button type="submit" name="sliderCreate" class="boyutla btn btn-primary Chakra yazi_500" style="font-size:20px;">
                                                                      EKLE
                                                              </button>
                                                        </div>
                                                  </div>
                                            </div>
                                      </div>
                                </div>
                           </div>
                    </form>
            <?php } ?>

      </div>
</div>
