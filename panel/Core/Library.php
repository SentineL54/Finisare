<?php

namespace App\Libs;

class LibbFile {

      public static function cssLib(){

             ob_start();
             session_start();

             echo '<!DOCTYPE html>
             <html lang="en">
                   <head>
                         <meta charset="utf-8">
                         <meta http-equiv="X-UA-Compatible" content="IE=edge">
                         <meta name="viewport" content="width=device-width, initial-scale=1">
                         <meta name="author" content="stacks">


                         <script type="text/javascript" nonce="079e53d36da943d7939be854f02" src="//local.adguard.org?ts=1595273766866&amp;type=content-script&amp;dmn=phantom-themes.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
                         <script type="text/javascript" nonce="079e53d36da943d7939be854f02" src="//local.adguard.org?ts=1595273766866&amp;name=AdGuard%20Extra%20Beta&amp;type=user-script"></script><link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
                         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
                         <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
                         <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
                         <link href="'.domain.dirnameProject.'/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                         <link href="'.domain.dirnameProject.'/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">


                         <!-- Theme Styles -->
                         <link href="'.domain.dirnameProject.'/assets/css/connect.min.css" rel="stylesheet" />
                         <link href="'.domain.dirnameProject.'/assets/css/dark_theme.css" rel="stylesheet" />
                         <link href="'.domain.dirnameProject.'/assets/css/special.css" rel="stylesheet" />
                         <link href="'.domain.dirnameProject.'/assets/css/lightbox.min.css" rel="stylesheet" media="screen" />
                         <link href="'.domain.dirnameProject.'/assets/css/custom.css" rel="stylesheet" />
                         <link href="'.domain.dirnameProject.'/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

                         <!-- JQUERY / LİBRARY -->
                         <script src="'.domain.dirnameProject.'/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
                         <script src="'.domain.dirnameProject.'/assets/plugins/jquery/jquery-1.12.4.js"></script>
                         <script src="'.domain.dirnameProject.'/assets/plugins/jquery/ui/1.12.1-jquery-ui.js"></script>
                         <!-- JQUERY / LİBRARY -->


                         <!-- <script language="javascript" type="text/javascript" src="'.domain.dirnameProject.'/assets/js/ckeditor/ckeditor.js"></script> -->

                         <!-- SORTABLE -->
                         <script src="'.domain.dirnameProject.'/assets/js/sortable.js"></script>

                         <!-- SELECT -->
                         <script src="'.domain.dirnameProject.'/assets/plugins/select2/js/select2.full.min.js"></script>
                         <script src="'.domain.dirnameProject.'/assets/js/pages/select2.js"></script>

                         <!-- VUE -->
                         <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
                         <script src="'.domain.dirnameProject.'/assets/js/vue/app.js"></script>
                         <!-- VUE -->


                  </head>';
      }

      public static function jsLib(){

                       // <script src="'.domain.dirnameProject.'/'.'assets/js/lightbox-plus-jquery.min.js"></script>
                       echo '
                       <script src="'.domain.dirnameProject.'/assets/plugins/bootstrap/popper.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/blockui/jquery.blockUI.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/flot/jquery.flot.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/flot/jquery.flot.time.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/flot/jquery.flot.resize.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/js/connect.min.js"></script>
                       <script src="'.domain.dirnameProject.'/assets/js/pages/dashboard.js"></script>


                       <!-- Sweetalert --> <script src="'.domain.dirnameProject.'/assets/js/sweetalert.js"></script>

                       <!-- CK EDİTÖR - LİBRARY -->
                       <script src="'.domain.dirnameProject.'/assets/js/ckeditor.js"></script>'; ?>
                       <script>
                            ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script><?php echo '
                        <!-- CK EDİTÖR - LİBRARY -->

                   </body>
               </html>';

           ob_flush();
           session_destroy();

      }

}
