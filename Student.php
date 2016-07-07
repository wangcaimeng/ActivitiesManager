<?php

/**
 * Created by PhpStorm.
 * User: wcm
 * Date: 2016/6/28
 * Time: 15:00
 */
class Student
{
    private $id;
    private $name;
    private $sex;
    private $age;
    private $classid;
    function __construct($name,$sex,$age,$classid){
        $this->name=$name;
        $this->sex=$sex;
        $this->age=$age;
        $this->classid=$classid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * @param mixed $classid
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;
    }

   
}