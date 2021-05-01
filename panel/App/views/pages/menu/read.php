
<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Menü' , 'Listele' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
            <div class="items">

                  <?php if( $data != NULL ){
                  echo '<div id="sortable" class="boyutla sifirla" >';
                             foreach( $data as $items ): ?>
                                   <div class="boyutla col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 " id="ui-state-default">
                                        <div class="card boyutla Chakra">

                                              <div class="card-header sifirla">

                                                   <span class="card-title yazi_600 sifirla text-transform-none" id="Chakra" style="font-size:22px;">
                                                         <!-- <a href="javascript:void(0);"><i class="material-icons">open_with</i></a> -->
                                                         <?=space.space.$items['title'];?>
                                                   </span>
                                                   <h5 class="card-subtitle mb-2 mt-4 Chakra text-muted hidden-sm hidden-xs" id="kisalt">
                                                        <?=$this->shortenText( $items['content'] );?>
                                                   </h5>

                                              </div>
                                              <div class="card-body boyutla">
                                                    <a href="<?=homeRoot?>/menu/update/<?=$items['random']?>" class="btn btn-warning" >
                                                       <i class="material-icons" style="color:black; font-size:24px;">create</i>
                                                    </a>
                                                    <?=space.space?>
                                                    <a href="<?=homeRoot?>/menu/delete/<?=$items['random']?>" class="btn btn-danger" >
                                                       <i class="material-icons" style="color:black; font-size:24px;">delete_sweep</i>
                                                    </a>
                                                    <?=space.space?>
                                                    <a href="<?=homeRoot?>/menu/submenu/<?=$items['random']?>" class="btn btn-info" >
                                                       <i class="material-icons" style="color:black; font-size:24px;">search</i>
                                                    </a>
                                              </div>
                                              <div class="card-footer">
                                                    <div class="boyutla ">
                                                         <i class="fa fa-user" aria-hidden="true"></i> <?=space.$items['user'];?>
                                                         <?=space.space.space;?>
                                                         <i class="fa fa-envelope" aria-hidden="true"></i> <?=space.explode( '-' , $items['datee'] )[0];?>
                                                         <?=space.space.space;?>
                                                         <i class="fa fa-link" aria-hidden="true"></i> <?=space.$items['ip_addres'];?>
                                                    </div>
                                              </div>

                                        </div>
                                   </div>
                             <?php endforeach; echo '
                        </div>';
                   } else
                   $this -> components( 'alert' , [ 'value' => 'danger' , 'message' => 'İçerik Yok' , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message ?>

            </div>
      </div>
</div>
