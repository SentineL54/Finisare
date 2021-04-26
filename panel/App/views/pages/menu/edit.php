<style>
.dark-theme input[type=text]{
   text-transform: uppercase;
   color:white;
}

input[type=text]{
   text-transform: uppercase;
}
</style>
<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Menü' , 'Düzenle' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">

          <div class="row">
              <div class="col-md-12">
                  <div class="page-title">
                       <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                  </div>
              </div>
          </div>
          <?php
              if( isset( $_POST['menuEdit'] ) ){

                    if( $data == FALSE ) {
                          $this -> components( 'alert' , [ 'value' => 'info' , 'message' => info , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                          self:: headerLocation( 3 , 'menu/edit/'.$_POST['oldData']['random'] ); // Page -> Redirection
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


                      foreach ($data['data'] as $row): ?>
                      <form method="post" id="grayColor">
                            <div class="card col-12 padding-top-30 padding-bottom-30">

                                 <div class="card-header">
                                       <div class="row">
                                              <div class="col-xl-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                          <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü Başlık :</label>
                                                          <input
                                                          value="<?=$row['title'];?>"
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
                                                          <select class="js-states form-control" name="upmenu" tabindex="-1" style="display: none; width: 100%;">
                                                                   <?php
                                                                       if( $row['upmenu_id'] == 0 )
                                                                          echo '<optgroup><option value="0@0@0@0" selected>ANA MENÜ</option></optgroup>';
                                                                       else
                                                                          echo '<optgroup><option value="'.$row['upmenu'].'@'.$row['upmenu_random'].'@'.$row['upmenu_id'].'@'.$row['upmenu_link'].'" selected>'.$row['upmenu'].'</option><optgroup><option value="0@0@0@0">ANA MENÜ</option>';

                                                                       foreach( $data['menu'] as $dataMenu ):

                                                                              if( $dataMenu['random'] != $row['random'] and $dataMenu['random'] != $row['upmenu_random'] ): ?>
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
                                                          <textarea class="form-control" name="description" maxlength="165" minlength="165" id="exampleFormControlTextarea1" rows="2"><?=$row['description'];?></textarea>
                                                    </div>
                                              </div>
                                       </div>
                                       <div class="row">
                                              <div class="col-xl-12 col-sm-12 col-xs-12 margin-top-20">
                                                    <div class="form-group">
                                                          <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü İçerik :</label>
                                                          <textarea name="content" id="editor" autocomplete="on"><?=$row['content'];?></textarea>
                                                    </div>
                                              </div>
                                       </div>
                                 </div>
                                 <div class="card-body Chakra">
                                       <div class="boyutla text-right">
                                            <i class="fa fa-user" aria-hidden="true"></i> <?=space.$row['user'];?>
                                            <?=space.space.'-'.space.space;?>
                                            <i class="fa fa-link" aria-hidden="true"></i> <?=space.$row['ip_addres'];?>
                                            <?=space.space.'-'.space.space;?>
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <?=space.$row['datee'];?>
                                       </div>
                                 </div>
                                 <div class="card-footer sifirla">
                                       <div class="row boyutla padding-top-10 sifirla">
                                            <div class="col-6"></div>
                                            <div class="col-xl-6 col-sm-12 col-xs-12 sifirla">
                                                 <button type="submit" name="menuEdit" class="boyutla btn btn-warning Chakra yazi_700" style="font-size:20px; color:black;">
                                                         DÜZENLE
                                                 </button>
                                            </div>
                                       </div>
                                 </div>

                             </div>



                             <input type="hidden" name="oldData[random]" value="<?=$row['random'];?>" />
                             <input type="hidden" name="oldData[title]" value="<?=$row['title'];?>" />
                             <input type="hidden" name="oldData[link]" value="<?=$row['link'];?>" />

                             <input type="hidden" name="oldData[upmenu]" value="<?=$row['upmenu'];?>" />
                             <input type="hidden" name="oldData[upmenu_random]" value="<?=$row['upmenu_random'];?>" />
                             <input type="hidden" name="oldData[upmenu_id]" value="<?=$row['upmenu_id'];?>" />
                             <input type="hidden" name="oldData[upmenu_link]" value="<?=$row['upmenu_link'];?>" />

                             <!-- <input type="hidden" name="oldData[upmenu]" value="<?= $row['upmenu']; ?>@<?= $row['upmenu_random']; ?>@<?= $row['upmenu_id']; ?>@<?= $row['upmenu_link']; ?>" /> -->

                             <input type="hidden" name="oldData[description]" value="<?= $row['description']; ?>" />
                             <input type="hidden" name="oldData[keywords]" value="<?= $row['keywords']; ?>" />
                             <input type="hidden" name="oldData[content]" value="<?= $row['content']; ?>" />
                      </form>

                      <? endforeach;
                 }
              }
          ?>

      </div>
</div>
