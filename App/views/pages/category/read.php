<div class="page-content">
      <? self::components( 'breadcrumb' , [ 'Kategori' , 'Listele' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
           <div class="row">

                   <?php if( $data != NULL ){
                              foreach( $data as $item ): ?>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                      <div class="card" id="Chakra">

                                            <div class="card-header">
                                                 <div class="boyutla margin-top-20">
                                                      <h3 class="card-title Chakra kisalt" id="contentTitle"><?=$item['title'];?>erergtth</h3>
                                                 </div>
                                            </div>
                                            <div class="card-body">
                                                <a href="<?=homeRoot;?>/category/update/<?=$item['random'];?>" class="btn btn-warning" >
                                                   <i class="material-icons" style="color:black;">create</i>
                                                </a>
                                                <?=space.space?>
                                                <a href="<?=homeRoot;?>/category/delete/<?=$item['random'];?>" class="btn btn-danger" >
                                                   <i class="material-icons" style="color:black;">restore_from_trash</i>
                                                </a>
                                            </div>
                                            <div class="card-footer">
                                                  <div class="boyutla ">
                                                       <i class="fa fa-user" aria-hidden="true"></i> <?=space.$item['user'];?>
                                                       <?=space.space.space;?>
                                                       <i class="fa fa-envelope" aria-hidden="true"></i> <?=space.explode( '-' , $item['datee'] )[0];?>
                                                       <?=space.space.space;?>
                                                       <i class="fa fa-link" aria-hidden="true"></i> <?=space.$item['ip_addres'];?>
                                                       <?=space.space.space;?>
                                                       <i class="fa fa-link" aria-hidden="true"></i> <?=space.$item['ip_addres'];?>
                                                  </div>
                                            </div>
                                      </div>
                                </div>

                              <?php endforeach;
                    } else
                    self:: components( 'alert' , [ 'value' => 'danger' , 'message' => 'İçerik Yok' , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message ?>


            </div>
      </div>
</div>
