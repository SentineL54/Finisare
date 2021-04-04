
<?php

class ApiDB {

        public function openDbConn(){

            try {
                  $DB = new PDO( 'mysql:host=' . '168.119.8.202' . ';dbname=' . 'u9769430_finisre', 'u9769430_finisre', 'KRtn87E6FDli77I' );
                  $DB->query('SET CHARACTER SET ' . 'utf8');
                  $DB->query('SET NAMES ' . 'utf8');
                  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                  return $DB;
              }
           catch(PDOException $e) {
                 echo "Bağlantı hatası: " . $e->getMessage();
              }
        }

        public function closeDbCon( $DB = NULL ) { return $DB = null; }
}

?>
