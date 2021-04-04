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
                    self:: components( 'alert' , [ 'value' => 'danger' , 'message' => success , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                    self:: headerLocation( 3 , 'slider/read' ); // Page -> Redirection
                 } else {
                    self:: components( 'alert' , [ 'value' => 'danger' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                    self:: headerLocation( 3 , 'slider/creat' ); // Page -> Redirection
                 }

            } else { ?>
            <div class="row">
                  <div class="col-xl">
                      <div class="card">
                          <div class="card-body">

                                <h5 class="card-title">Basic Example</h5>
                                <!-- <p>Here’s a quick example to demonstrate Bootstrap’s form styles. </p> -->

                                  <form method="post" enctype="multipart/form-data">
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
                                        <div class="form-group">
                                              <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Slider Açıklama :</label>
                                              <input
                                              required
                                              type="text"
                                              name="description"
                                              class="form-control"
                                              id="exampleInputEmai3"
                                              aria-describedby="emailHelp"
                                              placeholder="Slider Açıklama :" />
                                        </div>
                                        <div class="form-group">
                                              <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Slider Resim :</label>
                                              <input
                                              type="file"
                                              name="image"
                                              class="form-control"
                                              id="exampleInputEmail1"
                                              aria-describedby="emailHelp"
                                              placeholder="Slider Başlık :" />
                                        </div>
                                        <!--
                                          <div class="custom-control custom-checkbox form-group">
                                              <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                              <label class="custom-control-label" for="exampleCheck1">Check me out</label>
                                          </div>
                                        -->
                                        <div class="boyutla text-right hidden-sm hidden-xs">
                                             <button type="submit" name="sliderCreate" class="margin-top-30 ceyrek btn btn-primary Chakra yazi_500" style="font-size:20px;">
                                                     EKLE
                                             </button>
                                        </div>
                                        <div class="boyutla text-right hidden-xl hidden-lg hidden-md">
                                             <button type="submit" name="sliderCreate" class="margin-top-30 boyutla btn btn-primary Chakra yazi_500" style="font-size:20px;">
                                                     EKLE
                                             </button>
                                        </div>
                                  </form>

                          </div>
                      </div>
                  </div>
           </div>
            <?php } ?>

      </div>
</div>
