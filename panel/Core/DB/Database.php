<?php

namespace System\Libs;
use PDO;

class DataBase {

        protected function openDbConn(){

            try {
                $DB = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD );
                $DB->query('SET CHARACTER SET ' . CHARSET);
                $DB->query('SET NAMES ' . CHARSET);
                $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $DB;
            } catch(PDOException $e) {
              echo "Bağlantı hatası: " . $e->getMessage();
              }
        }

        protected function closeDbCon( $DB = NULL ) { return $DB = NULL; }
}

?>
