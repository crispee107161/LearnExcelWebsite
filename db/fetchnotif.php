<?php
    define('DBINFO', 'mysql:host=annexdigitalinccom.ipagemysql.com;dbname=adi_db');
    define('DBUSER','annex_system');
    define('DBPASS','ITd3pt!');

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    } 
?>