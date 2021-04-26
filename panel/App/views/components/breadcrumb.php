<div class="page-info">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb Breadcrumb_Com" >
              <li class="breadcrumb-item" ><a href="<?=domain.dirnameProject.'/'.dirnameProjectHome?> ">Anasayfa</a></li>
              <? $say = 1; for($sayi = 0; $sayi < count( explode( '/', @App::parseUrl() ) ); $sayi++): $say=$say+1; ?>


                    <li class="breadcrumb-item" aria-current="page"><?=$sayi;?>.<?=$say;?></li>


              <? endfor; ?>
          </ol>
      </nav>
</div>
