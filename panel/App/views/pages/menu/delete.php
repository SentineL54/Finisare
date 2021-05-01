<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Menü' , 'Sil' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
          <div class="row">
                <div class="col-md-12">
                      <div class="page-title">
                           <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                      </div>
                </div>
          </div>
          <?php

             if( $data == FALSE ) {

                   $this -> components( 'alert' , [ 'value' => 'warning' , 'message' => secondary , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                   self:: headerLocation( 3 , 'menu/read' ); // Page -> Redirection

             } else {
               if( isset( $_POST['menuDelete'] ) ) {

                     if( $data == TRUE  ){

                         $this -> components( 'alert' , [ 'value' => 'success' , 'message' => success , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                         self:: headerLocation( 3 , 'menu/read' ); // Page -> Redirection

                     } else {

                         $this -> components( 'alert' , [ 'value' => 'danger' , 'message' => danger , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message
                         self:: headerLocation( 3 , 'menu/read' ); // Page -> Redirectio

                     }

               } else {
                    foreach ($data as $items):  ?>
                         <form method="post" id="grayColor" >

                               <div class="card col-12 padding-top-30 padding-bottom-30">

                                    <div class="card-header">
                                          <div class="row">
                                                 <div class="col-xl-6 col-sm-12 col-xs-12">
                                                       <div class="form-group">
                                                             <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü Başlık :</label>
                                                             <input
                                                             value="<?=$items['title'];?>"
                                                             required
                                                             readonly
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
                                                             <select class="js-states form-control"  name="upmenu" tabindex="-1" style="display: none; width: 100%;">
                                                                     <?php
                                                                         if( $items['upmenu_id'] == 0 )
                                                                            echo '<optgroup><option value="0@0@0@0" selected>ANA MENÜ</option></optgroup>';
                                                                         else
                                                                            echo '<option value="'.$items['upmenu'].'@'.$items['upmenu_random'].'@'.$items['upmenu_id'].'@'.$items['upmenu_link'].'@'.$items['const_random'].'" selected>'.$items['upmenu'].'</option>';

                                                                          /*
                                                                         foreach( $data['menu'] as $dataMenu ):

                                                                                if( $dataMenu['random'] != $items['random'] and $dataMenu['random'] != $items['upmenu_random'] ): ?>
                                                                                       <option value="<?=$dataMenu['title']?>@<?=$dataMenu['random']?>@<?=$dataMenu['id']?>@<?=$dataMenu['link']?> ">
                                                                                               <?=$dataMenu['title'];?>
                                                                                       </option><?php
                                                                                endif;

                                                                          endforeach; */
                                                                      ?>
                                                             </select>
                                                       </div>
                                                 </div>
                                          </div>
                                          <div class="row">
                                                 <div class="col-xl-12 col-sm-12 col-xs-12 margin-top-20">
                                                       <div class="form-group">
                                                             <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">* Menü Description :</label>
                                                             <textarea class="form-control" readonly name="description" maxlength="165" minlength="165" id="exampleFormControlTextarea1" rows="2"><?=$items['description'];?></textarea>
                                                       </div>
                                                 </div>
                                          </div>

                                          <div class="row">
                                                 <div class="col-xl-12 col-sm-12 col-xs-12 margin-top-20">
                                                       <div class="form-group">
                                                             <label for="exampleInputEmail3" class="Chakra yazi_700" id="formLabel">Menü İçerik :</label>
                                                             <textarea name="content" id="editor" readonly autocomplete="on"><?=$items['content'];?></textarea>
                                                             <!-- <textarea class="form-control" readonly name="description" id="exampleFormControlTextarea1" rows="8"><?=$items['content'];?></textarea> -->
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
                                                    <button type="submit" name="menuDelete" class="boyutla btn btn-danger Chakra yazi_700" style="font-size:20px; color:black;">
                                                            SİL
                                                    </button>
                                               </div>
                                          </div>
                                    </div>

                          </form>
                    <? endforeach;
                 }
             }
          ?>
      </div>

</div>
