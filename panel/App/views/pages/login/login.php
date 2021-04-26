<body class="auth-page sign-in">
      <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 d-none d-lg-block d-xl-block">
                         <div class="auth-image"></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="auth-form">
                            <div class="row">

                                <div class="col">
                                        <div class="logo-box">
                                             <img src="<?=domain?>/images/logo.svg" class="logo" />
                                        </div>
                                        <?
                                          if( isset( $_POST['login'] ) ){
                                               if( $data != NULL ){
                                                 self:: components( 'alert' , [ 'value' => 'success' , 'message' => 'Başarılı' , 'style' => 'color:black;' ] ) ;
                                                 self:: headerLocation( 3 , 'dashboard' );
                                               }
                                               else{
                                                 self:: components( 'alert' , [ 'value' => 'danger' , 'message' => 'Bir Sorun Oluştu' , 'style' => 'color:black;' ] );
                                                 self:: headerLocation( 3 );
                                               }
                                          } else { ?>
                                             <form method="post" name="[]">
                                                   <div class="form-group">
                                                       <input type="text" class="form-control" id="email" name="username" aria-describedby="emailHelp" placeholder="Kullanıcı Adı :">
                                                   </div>
                                                   <div class="form-group">
                                                       <input type="text" class="form-control" id="password" name="password" placeholder="Kullanıcı Şifre :">
                                                   </div>
                                                   <button type="submit" name="login" class="btn Chakra yazi_700 btn-primary btn-block btn-submit">
                                                           <i class="fas fa-lock"></i> &nbsp;
                                                           GİRİŞ
                                                   </button>
                                                   <div class="auth-options" >
                                                       <div class="custom-control custom-checkbox form-group">
                                                           <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                           <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                                       </div>
                                                       <a href="<?domain;?>password" class="forgot-link Chakra yazi_500">
                                                          <i class="fas fa-fish"></i> &nbsp;
                                                          Şifremi Unuttum
                                                       </a>
                                                   </div>
                                                   <input type="hidden" valeu="wefwefwe" name="gizli" />
                                              </form><? } ?>


                                        <div class="auth-options text-center" id="sifirla">
                                              <div class="boyutla">
                                                  <a href="<?=link?>" target="_blank">
                                                     <img src="<?=favicon?>" id="favicon" title="Ali NEDİM" alt="Sakarya Web Tasarım, Mobil Uygulama yazılımcısı, Web Projeleri, Firma Tanıtım Web Sitesi, Özel Web Arayüz, Dijital Medya Reklamları" />
                                                  </a>
                                              </div>
                                              <div class="boyutla">
                                                   <span class="Chakra yazi_300">
                                                         © Tüm Hakları Saklıdır. <br/>
                                                         <strong class="yazi_700">
                                                                 2016 - <?=date('Y')?>
                                                         </strong> <br/>
                                                         Sürüm v.1
                                                   </span>

                                              </div>
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
    </html>
