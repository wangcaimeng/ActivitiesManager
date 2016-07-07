<?php

/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/6/28
 * Time: 15:08
 */
class StudentDao
{
    private $pdo;

    /**
     * @param $pdo:PDO
     */
    function __construct($pdo){
        $this->pdo=$pdo;

    }

    /**
     * @param $student:Student
     */
    public function add($student){
        try{
            $stmt = $this->pdo->prepare("INSERT INTO studentmanager.student(name,sex,age,classid) VALUES (?,?,?,?);");
            $stmt->execute(array($student->getName(),$student->getSex(),$student->getAge(),$student->getClassid()));
        }catch (PDOException $e) {
            die("学生信息添加失败！" . $e->getMessage());
        }
    }

    public  function getAll(){
        try{
            $stmt = $this->pdo->query("SELECT * from studentmanager.student");
            $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $list;
        }catch (PDOException $e){
            dei("学生信息查询失败！".$e->getMessage());
        }
    }
}