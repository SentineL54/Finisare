<?php

// declare(strict_types=1);

// namespace System\Libs;

class Controller {

      public $degerYok = 'Sakarya';

      public function errorMessage(){

             echo 'Method Bulunamadı';
      }

      public function modelError(){
             echo 'Model Bulunamadı';
      }

      public function notfile(){
             echo 'Bir şeyler ters gidiyor';
      }

      public function notFound(){
             echo 'Method Yok';
      }

      protected function model( $model , $file = NULL , $nameSpace = NULL ){

                if( $file !== NULL )
                     $file = $file.'/';


                // Model - file path create
                $modelFile = documentRoot.homeDirectory.'models/' . $file . strtolower( $model ) . '.php';

                // Model - file controll
                file_exists( $modelFile ) ? $this->modelFileExists = TRUE : $this->modelFileExists = FALSE;

                if( $this->modelFileExists ) {
                      require_once $modelFile;
                      return new $model();
                } else
                   echo '<br><br>DOSYA YOK';
      }

      protected function view( $view , $data = [] , $file = NULL ){

                if( $file !== NULL )
                     $file = $file.'/';

                $viewFile = documentRoot.homeDirectory.'views/' . $file . strtolower( $view ) . '.php';

                // GELMEZSE -> NOT FOUND -> sayfası
                file_exists( $viewFile ) ? require_once $viewFile : $this -> Hata = TRUE;
      }

      protected static function components( $name = NULL , $data = [] ){

                $components = documentRoot . homeDirectory . 'views/components/' . $name .'.php';

                file_exists( $components ) ? require_once $components : self::modelError();
      }

      protected static function headerLocation( $time = 0 , $urlLocation = NULL ){

                $urlLocation == NULL ? $urlHeader = domain.dirnameProject : $urlHeader = domain.dirnameProject . '/' .$urlLocation ;

                header( "Refresh: $time; url=".$urlHeader );
      }

      public function random( $leght = NULL ) {

             if( $leght != NULL and $leght < 15 ){
                   $char = "1234567890abcdefghioumnprstvz";
                   for ($k=1;$k<=$leght;$k++)
                       {
                            $h=substr($char,mt_rand(0,strlen($char)-1),1);
                            @$random.=$h;
                       }

                   return $random;
             }  else
            return self::random( 7 );

            unset( $random , $char , $k , $h);
       }

       public function sefLink( $str, $options = array() ){

                $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
                $defaults = array(
                   'delimiter' => '-',
                   'limit' => null,
                   'lowercase' => true,
                   'replacements' => array(),
                   'transliterate' => true
                );
                $options = array_merge($defaults, $options);
                $char_map = array(
                   // Latin
                   'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
                   'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
                   'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
                   'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
                   'ß' => 'ss',
                   'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
                   'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
                   'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
                   'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
                   'ÿ' => 'y',

                   // Latin symbols
                   '©' => '(c)',
                   // Greek
                   'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
                   'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
                   'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
                   'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
                   'Ϋ' => 'Y',
                   'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
                   'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
                   'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
                   'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
                   'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
                   // Turkish
                   'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
                   'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
                   // Russian
                   'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
                   'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
                   'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
                   'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
                   'Я' => 'Ya',
                   'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
                   'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
                   'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
                   'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
                   'я' => 'ya',
                   // Ukrainian
                   'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
                   'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
                   // Czech
                   'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
                   'Ž' => 'Z',
                   'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
                   'ž' => 'z',
                   // Polish
                   'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
                   'Ż' => 'Z',
                   'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
                   'ż' => 'z',
                   // Latvian
                   'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
                   'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
                   'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
                   'š' => 's', 'ū' => 'u', 'ž' => 'z'
                );

                $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
                if ($options['transliterate']) {
                   $str = str_replace(array_keys($char_map), $char_map, $str);
                }

                $str = str_replace("‘", '', str_replace('"', '', str_replace("'", '', str_replace('.', '', $str = str_replace('%','-', str_replace('&','-', str_replace('*','-', str_replace('|','-', str_replace('>','-', str_replace('<','-', str_replace('é','-', str_replace('^','-', str_replace('+','-', str_replace('}','-', str_replace('{','-', $str = str_replace(']','-', str_replace('[','-', str_replace('!','-', str_replace('?','-', str_replace('=','-', str_replace(',','-', str_replace(':','-', str_replace('/','-', str_replace(')','-', str_replace('(','-', preg_replace('/#/', '', preg_replace('|-+|', '-', preg_replace('/\s+/', '-', preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $str)))))))))))))))))))))))))))));

                $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str)));
                $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
                $str = trim($str, $options['delimiter']);
                return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;

                /*
                if( $data != NULL ){

                     $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')', '/',':' ,',' ,'=' ,'?','!','[',']','{','{','+','^','é','>','<','|','*','?','&','%');
                     $eng = array('s','S','i','i','i','g','g','u','u','o','o','c','c','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-');
                     $s = str_replace($tr,$eng,$data);
                     $s = strtolower($s);
                     $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
                     $s = preg_replace('/\s+/', '-', $s);
                     $s = preg_replace('|-+|', '-', $s);
                     $s = preg_replace('/#/', '', $s);


                     $s = str_replace('.', '', $s);
                     $s = str_replace("'", '', $s);
                     $s = str_replace('"', '', $s);
                     $s = str_replace("‘", '', $s);
                     $s = trim($s, '-');
                     $link = strtolower($s);

                     return $link;
                } else
                return NULL;

                unset($data, $tr , $eng , $s , $link);
                */
       }

       public function dataDateIp(){

               /** TARİH ve IP ADRES ALANLARINI ALIYORUZ. **/
               date_default_timezone_set('Europe/Istanbul');

               $day = array('Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi');
               $mouth = array('','Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık');
               $dateData = strtotime('today');

               return date('d',$dateData).' '.$mouth[date('n',$dateData)].' '.date('Y',$dateData).' | '.$day[date('w',$dateData)].' - '.date('H:i');

               unset( $day , $mouth , $dateData );
       }

       // Picture - Load
       public function pictureLoad( $data = NULL ){

                 if( $data != NULL ){
                      if( !empty( $data['file']['size'] )  ){

                            if( file_exists( $this->picture = documentRoot . systemDirectory . 'Helper/Picture.php' ) ){

                                  require $this->picture;

                                  if( class_exists( 'Picture' , FALSE ) )
                                     return Picture::pictureLoad( $data );
                                  else
                                     return NULL;

                            } else
                               return NULL;
                      }
                      else
                         return FALSE;
                 } else
                    return NULL;
       }

       // Picture - Unlink
       public function pictureUnlink( $image = NULL , $classThis ){

              if( $image != NULL ){
                    if( @$classThis->pictureData != $image )
                        unlink( documentRoot.$image ); return TRUE;
              } else
                   return NULL;
       }

       // Data Input Check
       public function dataInputCheck( $data = NULL ){

              if( $data != NULL AND is_array( $data ) ){
                    if( $this->newData = array_diff( $data[0], $data[1] ) )
                        return $this->newData;
                    else
                        return FALSE;
              } else
              return NULL;
       }

       public function dataTheSon( $classThis = NULL ){

               if( $classThis != NULL ){

                   $dataTheSon = NULL;
                   for ($i=0; $i < count( array_keys( $classThis->dataInput ) ); $i++) {
                       $dataTheSon .= array_keys( $classThis->dataInput )[$i].'=:'.array_keys( $classThis->dataInput )[$i].', ';
                   }

                   return $dataTheSon;

               } else
                   return NULL;
       }


       public function createTag( $data = NULL ){

              if( $data != NULL )
                  return str_replace(' ', ', ', $data);
              else
                  return NULL;
       }

       public function shortenText( $text = NULL , $str = 85 ){

                if( $text != NULL ){

                        $text = explode(".", $text);

                        if ( strlen( $text[0] ) > $str)
                            return $text = substr($text[0],0,$str).' ....';
                        else
                             return $text[0].' ....';
                            /*
                        else
                           if ($uzunluk > $str/3.2) $deger = substr($text[0],0,$str);  echo $deger."[...]";
                            */


                } else
                return NULL;
       }

       public function strReplace( $text = NULL ){

              if( $text != NULL )
                   return str_replace( "'","&lsquo;", str_replace( '"',"&quot;",$text ) );
              else
                   return NULL;

       }

       public function jsonEncode( $dataJson = NULL , $jsonName = 'JsonData' ){

              if( $dataJson != NULL ) {

                  $tweet_arr = [];
                  $tweet_arr[$jsonName] = [];

                  foreach ($dataJson as $item) {

                        $tweet_item = array(
                            'id'=>$item['random'],
                            'title'=>$item['baslik'],
                            'description'=>$item['aciklama'],
                            'resim_yol'=>$item['resim_yol']
                        );
                        //Push tweet_item into tweet_arr array
                        array_push($tweet_arr[$jsonName],$tweet_item);
                  }

                  echo json_encode($dataJson, JSON_UNESCAPED_UNICODE);


                  // return json_encode($dataJson, JSON_UNESCAPED_UNICODE);
              } else
                  return NULL;
       }

       public function kisalt($kelime, $str = 10) {
        		if (strlen($kelime) > $str)
        		{
        			if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8").'..';
        			else $kelime = substr($kelime, 0, $str).'..';
        		}
        		return $kelime;
    	 }

       public function Yazi_Kisaltmak( $Data ){

               $Deger = explode(".", $text);

               $uzunluk = strlen($Deger[0]);

               if ($uzunluk > $Data["limit"])
                   {
                          $deger = substr($Deger[0],0,$Data["limit"]);
                          echo $deger;
                          // echo $deger.space.'<a href="'.$Data["domain"].$Data["link"].'" style="color:'.$Data["renk"].'; font-weight:bold;" title="'.$Data["baslik"].'">[...]</a>';
                   }
               else
                   {
                         if ($uzunluk > $Data["limit"]/3.2)
                             $deger = substr($Deger[0],0,$Data["limit"]); echo $deger;
                             // echo $deger.space.'<a href="'.$Data["domain"].$Data["link"].'" style="color:'.$Data["renk"].'; font-weight:bold;" title="'.$Data["baslik"].'">[...]</a>';
                   }


               unset($Data,$Deger,$uzunluk,$deger);
       }


      /*
      public function arrayCreate( $data = NULL ){

            if( $data != NULL ) {

                  $dataTheSon = NULL;

                  for ($i=0; $i < count( array_keys( $data ) ); $i++) {
                      $dataTheSon .= '"'.array_keys( $data )[$i].'" =>'.'"'.array_values( $data )[$i].'", ';
                  }

                  return $dataTheSon;

            } else
                return NULL;
      }

      protected function dataVase( ){


                $dataVase = __DIR__ . '/Database.php';

                file_exists( $dataVase ) ? require_once $dataVase : self::modelError();
      }
      */

}
