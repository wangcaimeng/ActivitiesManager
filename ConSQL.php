<?php
/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/6/27
 * Time: 17:14
 */
class ConSQL{
    private $dsn = "mysql:host=127.0.0.1;dbname = studentmanager ";
    private  $username = "root";
    private  $password = "wangcaimeng123";

    function __construct(){
        
    }
    public  function connect(){
        try{
            $pdo = new PDO($this->dsn,$this->username,$this->password);
            echo "数据库连接成功！<br>";
        }catch (PDOException $e){
            die("数据库连接失败".$e->getMessage())."<br>" ;
        }
        return $pdo;
    }


}

?>