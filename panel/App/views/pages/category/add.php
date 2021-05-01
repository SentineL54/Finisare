<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Kategori' , 'Ekle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">

            <div class="row">
                  <div class="col-md-12">
                        <div class="page-title">
                             <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                        </div>
                  </div>
            </div>
            <?php
              if( $data != NULL and isset( $_POST['categoryCreate'] ) ){

                  if( $data ){
                     self:: components( 'alert' , [ 'value' => 'success' , 'message' => success , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'category/read' ); // Page -> Redirection
                  } else {
                     self:: components( 'alert' , [ 'value' => 'danger' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'category/creat' ); // Page -> Redirection
                  }

              } else { ?>

                   <form method="post" id="grayColor" enctype="multipart/form-data">
                           <div class="card">
                                <div class="card-body">
                                      <div class="flex flex-direction-row">
                                            <div class="flex-7">
                                                  <div class="form-group">
                                                        <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">* Menü Başlık :</label>
                                                        <input
                                                        required
                                                        type="text"
                                                        name="title"
                                                        class="form-control"
                                                        id="exampleInputEmail1"
                                                        minlength="3"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Başlık :" />
                                                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                  </div>
                                             </div>
                                             <div class="flex-5">
                                                   <div class="form-group">
                                                         <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Üst Menü :</label>
                                                         <select class="js-states form-control" name="upmenu" tabindex="-1" style="display: none; width: 100%;">
                                                                 <option value="0">ANAMENÜ</option>
                                                                 <?php foreach( $data as $upmenu ): ?>
                                                                 <!-- <optgroup label="wefwfwef">
                                                                           <option value="AK">Alaska</option>
                                                                           <option value="HI">Hawaii</option>
                                                                 </optgroup> -->
                                                                 <option value="<?=$upmenu['title'].'@'.$upmenu['random'].'@'.$upmenu['id'].'@'.$upmenu['link'].'@'.$upmenu['const_random']?>">
                                                                         <?=$upmenu['title']?>
                                                                 </option>
                                                                 <?php endforeach; ?>
                                                         </select>
                                                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                   </div>
                                              </div>
                                      </div>
                                      <div class="flex">
                                           <div class="flex-1 sifirla">
                                                 <div class="form-group">
                                                       <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Kategori Resim :</label>
                                                       <input
                                                       type="file"
                                                       name="image"
                                                       class="form-control"
                                                       id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" />
                                                 </div>
                                           </div>
                                      </div>
                                      <div class="flex margin-top-10">
                                            <div class="flex-1 sifirla">
                                                  <div class="form-group">
                                                        <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü Description :</label>
                                                        <textarea class="form-control" name="description" maxlength="165" minlength="165" placeholder="Description :" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                  </div>
                                            </div>
                                       </div>
                                </div>
                                <div class="card-footer">
                                     <div class="flex">
                                          <div class="flex-7"></div>
                                          <div class="flex-5">
                                                <button type="submit" name="categoryCreate" class="boyutla btn btn-primary Chakra yazi_500" style="font-size:20px;">
                                                        EKLE
                                                </button>
                                          </div>
                                     </div>
                                </div>

                          </div>
                   </form>
                   <!--
                   <form method="post">
                         <textarea class="ckeditor" name="menu_icerik" autocomplete="on"></textarea>
                         <p><input type="submit" value="Submit"></p>
                   </form>
                   -->


            <? } ?>

      </div>
</div>
