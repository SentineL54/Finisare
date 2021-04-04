<body class="auth-page sign-in">

      <script src="<?=domain.dirnameProject;?>/assets/js/sign-up/sign-up.js"></script>
      <script src="<?=domain.dirnameProject;?>/assets/js/sign-up/sign-up-boot.js"></script>
      <script src="<?=domain.dirnameProject;?>/assets/js/sign-up/index.js"></script>

      <link href="<?=domain.dirnameProject;?>/assets/css/sign-up/index.css" rel="stylesheet" />
      <style>
          #signup-image {
              background-image: url('<?=domain.dirnameProject;?>/assets/images/sign_up.svg');
              background-position: center center;

              background-repeat: no-repeat;
              background-size: 87% 70%;

              margin-left: 8vh;
              height: 80vh;
              width: auto;
              text-align: center;
          }
      </style>

      <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 d-none d-lg-block d-xl-block">
                         <div id="signup-image" class="margin-top-30"></div> <!-- class="auth-image" -->
                    </div>
                    <div class="col-lg-6">
                        <div class="auth-form">
                            <div class="row">

                                  <div class="col">
                                          <div class="logo-box">
                                               <img src="<?=domain?>/images/logo.svg" class="logo" />
                                          </div>


                                          <div class="stepwizard">
                                               <div class="stepwizard-row setup-panel">
                                                   <div class="stepwizard-step col-xs-3">
                                                       <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                                       <p><small class="Chakra yazi_700">Web Site Bilgileri</small></p>
                                                   </div>
                                                   <div class="stepwizard-step col-xs-3">
                                                       <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                                       <p><small class="Chakra yazi_700">VeriTabanı Bilgileri</small></p>
                                                   </div>
                                                   <div class="stepwizard-step col-xs-3">
                                                       <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                                       <p><small class="Chakra yazi_700">Firma Bilgileri</small></p>
                                                   </div>
                                                   <div class="stepwizard-step col-xs-3">
                                                       <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                                       <p><small class="Chakra yazi_700">İletişim Seçenekleri</small></p>
                                                   </div>
                                               </div>
                                           </div>
                                           <script>
                                                 function ipAdres(myfield, e, dec) {
                                                  var key;
                                                  var keychar;
                                                  if (window.event)
                                                      key = window.event.keyCode;
                                                  else if (e)
                                                      key = e.which;
                                                  else
                                                      return true;
                                                  keychar = String.fromCharCode(key);
                                                  if ((key == null) || (key == 0) || (key == 8) ||
                                                (key == 9) || (key == 13) || (key == 27))
                                                      return true;
                                                  else if ((("0123456789.").indexOf(keychar) > -1))
                                                      return true;
                                                  else if (dec && (keychar == ".")) {
                                                      myfield.form.elements[dec].focus();
                                                      return false;
                                                  }
                                                  else
                                                      return false;
                                                }



                                                function GsmTel(myfield, e, dec) {
                                                 var key;
                                                 var keychar;
                                                 if (window.event)
                                                     key = window.event.keyCode;
                                                 else if (e)
                                                     key = e.which;
                                                 else
                                                     return true;
                                                 keychar = String.fromCharCode(key);
                                                 if ((key == null) || (key == 0) || (key == 8) ||
                                               (key == 9) || (key == 13) || (key == 27))
                                                     return true;
                                                 else if ((("0123456789 ()").indexOf(keychar) > -1))
                                                     return true;
                                                 else if (dec && (keychar == ".")) {
                                                     myfield.form.elements[dec].focus();
                                                     return false;
                                                 }
                                                 else
                                                     return false;
                                               }
                                           </script>
                                           <form role="form" name="[]" method="post" enctype="multipart/form-data">
                                                 <div class="row margin-top-20">

                                                       <div class="panel-primary setup-content col-12 sifirla" id="step-1">
                                                             <div class="panel-body sifirla" >
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" id="email" name="title" aria-describedby="emailHelp" placeholder="Web Site Başlık :">
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-7 col-md-7 col-lg-7 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="file" required="required" class="form-control" id="email" name="logo" aria-describedby="emailHelp" placeholder="Web Site Başlık :">
                                                                                   </div>
                                                                             </div>
                                                                             <div class="col-xl-5 col-md-5 col-lg-5 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group">
                                                                                       <input type="text" required readonly class="form-control" id="email" name="domain" aria-describedby="emailHelp" value="<?=domain;?>" />
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 hidden-sm hidden-xs sifirla"></div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 sifirla">
                                                                                   <div class="form-group text-right">
                                                                                         <button type="button" onclick="bastim()" class="nextBtn btn Chakra yazi_700 btn-primary btn-block btn-submit">
                                                                                                 DEVAM ET &nbsp;
                                                                                                 <i class="fas fa-angle-double-right"></i>
                                                                                         </button>
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                             </div>
                                                       </div>

                                                       <div class="panel-primary setup-content col-12 sifirla" id="step-2">
                                                             <div class="panel-body sifirla" >

                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" id="email" name="veriTabaniKullaniciAdi" aria-describedby="emailHelp" placeholder="Veritabanı Kullanıcı Adı :">
                                                                                   </div>
                                                                             </div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" maxlength="15" minlength="11" onkeypress="return ipAdres(this, event)" id="email" name="veriTabaniIpAdres" aria-describedby="emailHelp" placeholder="Veritabanı Ip Adres :">
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" id="email" name="veriTabaniAdi" aria-describedby="emailHelp" placeholder="Veritabanı Adı :">
                                                                                   </div>
                                                                             </div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" id="email" name="veriTabaniSifre" aria-describedby="emailHelp" placeholder="Veritabanı Şifre :">
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 hidden-sm hidden-xs sifirla"></div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 sifirla">
                                                                                   <div class="form-group text-right">
                                                                                         <button type="button" class="nextBtn btn Chakra yazi_700 btn-primary btn-block btn-submit">
                                                                                                 DEVAM ET &nbsp;
                                                                                                 <i class="fas fa-angle-double-right"></i>
                                                                                         </button>
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>

                                                             </div>
                                                       </div>
                                                       <div class="panel-primary setup-content col-12 sifirla" id="step-3">
                                                             <div class="panel-body sifirla" >

                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" id="email" name="firmaAdi" aria-describedby="emailHelp" placeholder="Şirket / Kuruluş Adı :">
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-12 ">
                                                                                   <div class="form-group ">
                                                                                        <select required class="js-states form-control" name="firmaSektör" tabindex="-1" style="display: none; width: 100%;">
                                                                                                <option value="0">HANGİ SEKTÖRDESİNİZ?</option><option value="Turizm, Konaklama, Yiyecek-İçecek Hizmetleri_turizm-konaklama-yiyecek-icecek-hizmetleri" style="font-weight:bold; text-decoration:underline;">Turizm, Konaklama, Yiyecek-İçecek Hizmetleri</option><option value="Toplumsal ve Kişisel Hizmetler_toplumsal-ve-kisisel-hizmetler" style="font-weight:bold; text-decoration:underline;">Toplumsal ve Kişisel Hizmetler</option><option value="Tarım, Avcılık ve Balıkçılık_tarim-avcilik-ve-balikcilik" style="font-weight:bold; text-decoration:underline;">Tarım, Avcılık ve Balıkçılık</option><option value="Tekstil, Hazır Giyim, Deri_tekstil-hazir-giyim-deri" style="font-weight:bold; text-decoration:underline;">Tekstil, Hazır Giyim, Deri</option><option value="Ticaret (Satış ve Pazarlama)_ticaret-satis-ve-pazarlama" style="font-weight:bold; text-decoration:underline;">Ticaret (Satış ve Pazarlama)</option><option value="Spor ve Rekreasyon_spor-ve-rekreasyon" style="font-weight:bold; text-decoration:underline;">Spor ve Rekreasyon</option><option value="Sağlık ve Sosyal Hizmetler_saglik-ve-sosyal-hizmetler" style="font-weight:bold; text-decoration:underline;">Sağlık ve Sosyal Hizmetler</option><option value="Metal_metal" style="font-weight:bold; text-decoration:underline;">Metal</option><option value="Medya, İletişim ve Yayıncılık_medya-iletisim-ve-yayincilik" style="font-weight:bold; text-decoration:underline;">Medya, İletişim ve Yayıncılık</option><option value="Maden_maden" style="font-weight:bold; text-decoration:underline;">Maden</option><option value="Kültür, Sanat ve Tasarım_kultur-sanat-ve-tasarim" style="font-weight:bold; text-decoration:underline;">Kültür, Sanat ve Tasarım</option><option value="Kimya, Petrol, Lastik ve Plastik_kimya-petrol-lastik-ve-plastik" style="font-weight:bold; text-decoration:underline;">Kimya, Petrol, Lastik ve Plastik</option><option value="İş ve Yönetim_is-ve-yonetim" style="font-weight:bold; text-decoration:underline;">İş ve Yönetim</option><option value="İnşaat, İnşaat Malzemeleri_insaat-insaat-malzemeleri" style="font-weight:bold; text-decoration:underline;">İnşaat, İnşaat Malzemeleri</option><option value="Gıda, Restoran, Cafe_gida-restoran-cafe" style="font-weight:bold; text-decoration:underline;">Gıda, Restoran, Cafe</option><option value="Finans_finans" style="font-weight:bold; text-decoration:underline;">Finans</option><option value="Enerji_enerji" style="font-weight:bold; text-decoration:underline;">Enerji</option><option value="Elektrik ve Elektronik_elektrik-ve-elektronik" style="font-weight:bold; text-decoration:underline;">Elektrik ve Elektronik</option><option value="Eğitim_egitim" style="font-weight:bold; text-decoration:underline;">Eğitim</option><option value="Peyzaj, Çevre_peyzaj-cevre" style="font-weight:bold; text-decoration:underline;">Peyzaj, Çevre</option><option value="Cam, Çimento ve Toprak_cam-cimento-ve-toprak" style="font-weight:bold; text-decoration:underline;">Cam, Çimento ve Toprak</option><option value="Bilişim Teknolojileri_bilisim-teknolojileri" style="font-weight:bold; text-decoration:underline;">Bilişim Teknolojileri</option><option value="Ağaç İşleri, Kağıt ve Kağıt Ürünleri_agac-isleri-kagit-ve-kagit-urunleri" style="font-weight:bold; text-decoration:underline;">Ağaç İşleri, Kağıt ve Kağıt Ürünleri</option><option value="Adalet ve Güvenlik_adalet-ve-guvenlik" style="font-weight:bold; text-decoration:underline;">Adalet ve Güvenlik</option><option value="Rent-a Car, Otomotiv_rent-a-car-otomotiv" style="font-weight:bold; text-decoration:underline;">Rent-a Car, Otomotiv</option><option value="Ulaştırma, Lojistik ve Haberleşme_ulastirma-lojistik-ve-haberlesme" style="font-weight:bold; text-decoration:underline;">Ulaştırma, Lojistik ve Haberleşme</option><option value="Mimarlık & Proje_mimarlik-proje" style="font-weight:bold; text-decoration:underline;">Mimarlık & Proje</option><option value="Mobilya_mobilya" style="font-weight:bold; text-decoration:underline;">Mobilya</option><option value="Fotoğraf_fotograf" style="font-weight:bold; text-decoration:underline;">Fotoğraf</option><option value="Temizlik (Koltuk & Halı Yıkama)_temizlik-koltuk-hali-yikama" style="font-weight:bold; text-decoration:underline;">Temizlik (Koltuk & Halı Yıkama)</option><option value="E-Ticaret_e-ticaret" style="font-weight:bold; text-decoration:underline;">E-Ticaret</option><option value="Gayrimenkul_gayrimenkul" style="font-weight:bold; text-decoration:underline;">Gayrimenkul</option><option value="Özel (Kişisel Web Sitesi)_ozel-kisisel-web-sitesi" style="font-weight:bold; text-decoration:underline;">Özel (Kişisel Web Sitesi)</option><option value="Blog, Haber_blog-haber" style="font-weight:bold; text-decoration:underline;">Blog, Haber</option>
                                                                                        </select>
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="email" class="form-control" minlength="9" id="email" name="firmaVergiDaire" aria-describedby="emailHelp" placeholder="( İsteğe Bağlı ) - Vergi Daire :">
                                                                                  </div>
                                                                             </div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" class="form-control" minlength="10" maxlength="11" onkeypress="return GsmTel(this, event)" name="firmaVergiNumara" aria-describedby="emailHelp" placeholder="( İsteğe Bağlı ) - Vergi Numara :" />
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 hidden-sm hidden-xs sifirla"></div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 sifirla">
                                                                                   <div class="form-group text-right">
                                                                                         <button type="button" class="nextBtn btn Chakra yazi_700 btn-primary btn-block btn-submit">
                                                                                                 DEVAM ET &nbsp;
                                                                                                 <i class="fas fa-angle-double-right"></i>
                                                                                         </button>
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>

                                                             </div>
                                                       </div>



                                                       <div class="panel-primary setup-content col-12 sifirla" id="step-4">
                                                             <div class="panel-body sifirla" >

                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="email" required class="form-control" name="firmaEmail" aria-describedby="emailHelp" placeholder="E-Mail :" />
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-12 ">
                                                                                   <div class="form-group ">
                                                                                        <input type="text" required class="form-control" maxlength="16" minlength="16" onkeypress="return GsmTel(this, event)" name="firmaGsm" aria-describedby="emailHelp" placeholder="GSM - TEL :" />
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-12">
                                                                                   <div class="form-group ">
                                                                                        <textarea class="form-control" required name="firmaAdres" minlength="10" placeholder="Adres :" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                                                   </div>
                                                                             </div>
                                                                        </div>
                                                                   </div>
                                                                   <div class="form-group sifirla">
                                                                        <div class="row">
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 hidden-sm hidden-xs sifirla"></div>
                                                                             <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 sifirla">
                                                                                   <div class="form-group text-right">
                                                                                         <button type="submit" name="kayitOl" class="pull-right nextBtn btn Chakra yazi_700 btn-primary btn-block btn-submit">
                                                                                                 BİTİR &nbsp;
                                                                                                 <i class="fas fa-angle-double-right"></i>
                                                                                         </button>
                                                                                   </div>
                                                                             </div>
                                                                         </div>
                                                                   </div>

                                                             </div>
                                                       </div>

                                                  </div>
                                           </form>

                                          <div class="auth-options text-center margin-top-40" >
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
        <link href="<?=domain.dirnameProject;?>/assets/plugins/select2/css/select2.min.css" rel="stylesheet">
        <script src="<?=domain.dirnameProject;?>/assets/plugins/select2/js/select2.full.min.js"></script>
        <script src="<?=domain.dirnameProject;?>/assets/js/pages/select2.js"></script>
</body>
