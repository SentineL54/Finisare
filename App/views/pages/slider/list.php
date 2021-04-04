<div class="page-content">
      <? $this->components( 'breadcrumb' , [ 'Slider' , 'Listele' , 'style' => 'color:purple;' ]  ); ?>
      <div class="main-wrapper">
          <!--
          <div class="row">
              <div class="col-md-12">
                  <div class="page-title">
                      <p class="page-desc">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                  </div>
              </div>
          </div>
          --->

          <div class="row" id="list">
                <?php if( $data != NULL ) {
                        foreach( $data as $row ): ?>
                               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                     <div class="card" id="Chakra">

                                           <div class="boyutla" style="padding:25px;">
                                                <a class="img example-image-link" href="<?=$row['resim_yol'];?>" data-lightbox="example-1">
                                                   <img src="<?=$row['resim_yol']?>" class="card-img-top" alt="<?=$row['baslik'];?>" title="<?=$row['baslik']?>" style="width:100%; height:45vh;" >
                                                </a>
                                           </div>
                                           <div class="card-header" id="listele">
                                                <div class="boyutla sifirla">
                                                     <h3 class="card-title kisalt" id="Chakra" style="font-size:20px;"><?=$row['baslik'];?>wefwefwefwefewfewfwefwefwefegerheherh</h3>
                                                </div>
                                                <div class="boyutla sifirla">
                                                      <p class="card-text margin-bottom-30 Chakra">
                                                         <?=$row['aciklama'];?>
                                                      </p>
                                                </div>
                                           </div>
                                           <div class="card-body">
                                               <a href="<?=homeRoot;?>/slider/edit/<?=$row['random'];?>" class="btn btn-warning" >
                                                  <i class="material-icons" style="color:black;">create</i>
                                               </a>
                                               <?=space.space?>
                                               <a href="<?=homeRoot;?>/slider/delete/<?=$row['random'];?>" class="btn btn-danger" >
                                                  <i class="material-icons" style="color:black;">restore_from_trash</i>
                                               </a>
                                           </div>
                                           <div class="card-footer">
                                                 <div class="boyutla ">
                                                      <i class="fa fa-user" aria-hidden="true"></i> <?=space.$row['user'];?>
                                                      <?=space.space.space;?>
                                                      <i class="fa fa-envelope" aria-hidden="true"></i> <?=space.explode( '-' , $row['datee'] )[0];?>
                                                      <?=space.space.space;?>
                                                      <i class="fa fa-link" aria-hidden="true"></i> <?=space.$row['ip_addres'];?>
                                                 </div>
                                           </div>
                                     </div>
                                </div>
                      <?php endforeach;
               } else
                    $this -> components( 'alert' , [ 'value' => 'danger' , 'message' => 'İçerik Yok' , 'style' => 'color:black; font-size:18px;' ] ); // Notification -> Message ?>
          </div>
      </div>
</div>
