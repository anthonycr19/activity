<?php

class Actor
{
    private $id_actor;
    private $name_actor;
    private $last_name_actor;
    private $birthday;
    private $nationality;

    /**
     * @param $id_actor
     * @param $name_actor
     * @param $last_name_actor
     * @param $birthday
     * @param $nationality
     */
    public function __construct($id_actor, $name_actor, $last_name_actor, $birthday, $nationality)
    {
        $this->id_actor = $id_actor;
        $this->name_actor = $name_actor;
        $this->last_name_actor = $last_name_actor;
        $this->birthday = $birthday;
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getIdActor()
    {
        return $this->id_actor;
    }

    /**
     * @param mixed $id_actor
     */
    public function setIdActor($id_actor)
    {
        $this->id_actor = $id_actor;
    }

    /**
     * @return mixed
     */
    public function getNameActor()
    {
        return $this->name_actor;
    }

    /**
     * @param mixed $name_actor
     */
    public function setNameActor($name_actor)
    {
        $this->name_actor = $name_actor;
    }

    /**
     * @return mixed
     */
    public function getLastNameActor()
    {
        return $this->last_name_actor;
    }

    /**
     * @param mixed $last_name_actor
     */
    public function setLastNameActor($last_name_actor)
    {
        $this->last_name_actor = $last_name_actor;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }




}