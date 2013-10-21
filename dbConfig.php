<?php
/**
 * Pengaturan DB
 * Setting parameter sesuai dengan settingan database anda
 * @author MN12
 */
class dbKoneksi {
    //private $dbEngine; //isi dengan mysql jika menggunakan MySQL dan postgre jika PostgreSQL
    private $host;
    private $user;
    private $password;
    private $db;
            
    function __construct($_host,$_user,$_password,$_db) {
        $this->host=$_host;
        $this->user=$_user;
        $this->password=$_password;
        $this->db=$_db;
    }
    function buka() {
        mysql_connect($this->host, $this->user, $this->password);
        mysql_select_db($this->db);
    }
}

?>
