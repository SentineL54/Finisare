<style>
select option optgroup{
  text-transform: none;
}
</style>
<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Menü' , 'Düzenle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">

          <div class="items">
              <div class="col-md-12">
                  <div class="page-title">
                       <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                  </div>
              </div>
          </div>
          <?php
              if( isset( $_POST['menuUpdate'] ) ){

                    if( $data == FALSE ) {
                          $this -> components( 'alert' , [ 'value' => 'info' , 'message' => info , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                          self:: headerLocation( 3 , 'menu/update/'.$_POST['oldData']['random'] ); // Page -> Redirection
                    } else {
                         if( $data != NULL ) {
                             $this -> components( 'alert' , [ 'value' => 'success' , 'message' => success, 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                             self:: headerLocation( 3 , 'menu/read' ); // Page -> Redirection
                         } else {
                             $this -> components( 'alert' , [ 'value' => 'warning' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                             self:: headerLocation( 3 , 'menu/edit/'.$_POST['oldData']['random'] ); // Page -> Redirection
                         }
                    }

              } else {

                 if( $data == FALSE ) {

                     $this -> components( 'alert' , [ 'value' => "warning" , 'message' => secondary , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                     self:: headerLocation( 3 , 'menu/read' ); // Page -> Redirection

                 } else {


                      foreach ($data['data'] as $items): ?>
                      <form method="post" id="grayColor">
                            <div class="card col-12 padding-top-30 padding-bottom-30">

                                 <div class="card-header">
                                       <div class="row">
                                              <div class="col-xl-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                          <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü Başlık :</label>
                                                          <input
                                                          value="<?=$items['title'];?>"
                                                          required
                                                          type="text"
                                                          name="title"
                                                          class="form-control"
                                                          id="exampleInputEmail1"
                                                          aria-describedby="emailHelp" />
                                                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                    </div>
                                              </div>
                                              <div class="hidden-sm hidden-xs margin-top-30"></div>
                                              <div class="col-xl-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">

                                                          <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Üst Menü :</label>
                                                          <select class="js-states form-control" name="upmenu" tabindex="-1" style="display: none; width: 100%; text-transform:none;">
                                                                   <?php
                                                                       if( $items['upmenu_id'] == 0 )
                                                                          echo '<optgroup><option value="0@0@0@0" selected>ANA MENÜ</option></optgroup>';
                                                                       else
                                                                          echo '<optgroup><option value="'.$items['upmenu'].'@'.$items['upmenu_random'].'@'.$items['upmenu_id'].'@'.$items['upmenu_link'].'" selected>'.$items['upmenu'].'</option><optgroup><option value="0@0@0@0">ANA MENÜ</option>';

                                                                       foreach( $data['menu'] as $dataMenu ):

                                                                              if( $dataMenu['random'] != $items['random'] and $dataMenu['random'] != $items['upmenu_random'] ): ?>
                                                                                     <option value="<?=$dataMenu['title'];?>@<?=$dataMenu['random'];?>@<?=$dataMenu['id'];?>@<?=$dataMenu['link'];?> ">
                                                                                             <?=$dataMenu['title'];?>
                                                                                     </option><?php
                                                                              endif;

                                                                       endforeach; ?>
                                                          </select>
                                                    </div>
                                              </div>
                                       </div>
                                       <div class="row">
                                              <div class="col-xl-12 col-sm-12 col-xs-12 margin-top-20">
                                                    <div class="form-group">
                                                          <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">* Menü Description :</label>
                                                          <textarea class="form-control" name="description" maxlength="165" minlength="165" id="exampleFormControlTextarea1" itemss="2"><?=$items['description'];?></textarea>
                                                    </div>
                                              </div>
                                       </div>
                                       <div class="row">
                                              <div class="col-xl-12 col-sm-12 col-xs-12 margin-top-20">
                                                    <div class="form-group">
                                                          <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü İçerik :</label>
                                                          <textarea name="content" style="width:80vh;" id="editor" autocomplete="on"><?=$items['content'];?></textarea>
                                                          <!-- <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                                                    </div>
                                              </div>
                                       </div>
                                 </div>
                                 <div class="card-body Chakra">
                                       <div class="boyutla text-left">
                                            <i class="fa fa-user" aria-hidden="true"></i> <?=space.$items['user'];?>
                                            <?=space.space.'-'.space.space;?>
                                            <i class="fa fa-link" aria-hidden="true"></i> <?=space.$items['ip_addres'];?>
                                            <?=space.space.'-'.space.space;?>
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <?=space.$items['datee'];?>
                                       </div>
                                 </div>
                                 <div class="card-footer sifirla">
                                       <div class="row boyutla padding-top-10 sifirla">
                                            <div class="col-6"></div>
                                            <div class="col-xl-6 col-sm-12 col-xs-12 sifirla">
                                                 <button type="submit" name="menuUpdate" class="boyutla btn btn-warning Chakra yazi_700" style="font-size:20px; color:black;">
                                                         DÜZENLE
                                                 </button>
                                            </div>
                                       </div>
                                 </div>

                             </div>



                             <input type="hidden" name="oldData[random]" value="<?=$items['random'];?>" />
                             <input type="hidden" name="oldData[title]" value="<?=$items['title'];?>" />
                             <input type="hidden" name="oldData[link]" value="<?=$items['link'];?>" />

                             <input type="hidden" name="oldData[upmenu]" value="<?=$items['upmenu'];?>" />
                             <input type="hidden" name="oldData[upmenu_random]" value="<?=$items['upmenu_random'];?>" />
                             <input type="hidden" name="oldData[upmenu_id]" value="<?=$items['upmenu_id'];?>" />
                             <input type="hidden" name="oldData[upmenu_link]" value="<?=$items['upmenu_link'];?>" />

                             <!-- <input type="hidden" name="oldData[upmenu]" value="<?= $items['upmenu']; ?>@<?= $items['upmenu_random']; ?>@<?= $items['upmenu_id']; ?>@<?= $items['upmenu_link']; ?>" /> -->

                             <input type="hidden" name="oldData[description]" value="<?= $items['description']; ?>" />
                             <input type="hidden" name="oldData[keywords]" value="<?= $items['keywords']; ?>" />
                             <input type="hidden" name="oldData[content]" value="<?= $items['content']; ?>" />
                      </form>

                      <? endforeach;
                 }
              }
          ?>

      </div>
</div>
