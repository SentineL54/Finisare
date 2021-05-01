<div class="page-info">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb Breadcrumb_Com" >
              <li class="breadcrumb-item" ><a href="<?=domain.dirnameProject.'/'.dirnameProjectHome?> ">Anasayfa</a></li>
              <?php for($sayi = 0; $sayi < count( explode( '/' , @App::parseUrl() ) ); $sayi++)
                     echo '<li class="breadcrumb-item active" aria-current="page"><span>'.@$data["{$sayi}"].'</li></span>';  ?>
          </ol>
      </nav>
</div>
