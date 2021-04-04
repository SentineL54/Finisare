<style>
/** DARK THEME - CSS **/
.dark-theme #formLabel{
 color:#5fd0a5;
}

.dark-theme input::placeholder, .dark-theme input:valid, .dark-theme input:focus{
  font-family: 'Chakra Petch', sans-serif;
  font-weight: 500;
  font-style: normal;
  font-size:16px;
  color:gray;
}


.dark-theme textarea::placeholder{
    font-family: 'Chakra Petch', sans-serif;
    font-weight: bold;
    font-style: normal;
    color: gray;
}

.dark-theme select:option{
    font-family: 'Chakra Petch', sans-serif;
    font-weight: bold;
    font-style: normal;
    color: gray;
    padding:10px;
    margin: 10px;
    font-size:10px;
}

.dark-theme input:focus, .dark-theme textarea:focus{
  color:gray;
}
/** DARK THEME - CSS **/
</style>
<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Menu' , 'Ekle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">

            <div class="row">
                  <div class="col-md-12">
                        <div class="page-title">
                             <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                        </div>
                  </div>
            </div>
            <?php
              if( $data != NULL and isset( $_POST['menuCreate'] ) ){

                  if( $data ){
                     self:: components( 'alert' , [ 'value' => 'success' , 'message' => 'İşlem Başarılı - Yönlendiriliyorsunuz.' , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'menu/read' ); // Page -> Redirection
                  } else {
                     self:: components( 'alert' , [ 'value' => 'danger' , 'message' => 'Bir Sorun Oluştu' , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'menu/creat' ); // Page -> Redirection
                  }

              } else { ?>

                   <form method="post" id="grayColor">
                         <div class="card">

                              <div class="card-body">

                                    <div class="row">
                                          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
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
                                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                 <div class="form-group sifirla">
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
                                    <div class="row margin-top-20"></div>
                                    <div class="row">
                                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                      <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">* Menü Description :</label>
                                                      <textarea class="form-control" name="description" maxlength="165" minlength="165" placeholder="Description :" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                </div>
                                          </div>
                                     </div>
                                     <div class="row margin-top-20"></div>
                                     <div class="row">
                                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                 <div class="form-group">
                                                       <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü İçerik :</label>
                                                       <!-- <textarea class="ckeditor" name="menu_icerik" autocomplete="on"></textarea> -->
                                                       <textarea name="content" id="editor" autocomplete="on" placeholder="İçerik :"></textarea>
                                                 </div>
                                           </div>
                                     </div>
                                     <div class="row">
                                           <div class="boyutla text-right hidden-sm hidden-xs">
                                                <button type="submit" name="menuCreate" class="margin-top-30 ceyrek btn btn-primary Chakra yazi_500" style="font-size:20px;">
                                                       EKLE
                                                </button>
                                           </div>
                                           <div class="boyutla text-right hidden-xl hidden-lg hidden-md">
                                                <button type="submit" name="menuCreate" class="margin-top-30 boyutla btn btn-primary Chakra yazi_500" style="font-size:20px;">
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
