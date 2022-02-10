<?php

class Manager
{
    private $id_manager;
    private $name_manager;
    private $last_name_manager;
    private $birthday;
    private $nationality;

    /**
     * @param $id_manager
     * @param $name_manager
     * @param $last_name_manager
     * @param $birthday
     * @param $nationality
     */
    public function __construct($id_manager, $name_manager, $last_name_manager, $birthday, $nationality)
    {
        $this->id_manager = $id_manager;
        $this->name_manager = $name_manager;
        $this->last_name_manager = $last_name_manager;
        $this->birthday = $birthday;
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getIdManager()
    {
        return $this->id_manager;
    }

    /**
     * @param mixed $id_manager
     */
    public function setIdManager($id_manager)
    {
        $this->id_manager = $id_manager;
    }

    /**
     * @return mixed
     */
    public function getNameManager()
    {
        return $this->name_manager;
    }

    /**
     * @param mixed $name_manager
     */
    public function setNameManager($name_manager)
    {
        $this->name_manager = $name_manager;
    }

    /**
     * @return mixed
     */
    public function getLastNameManager()
    {
        return $this->last_name_manager;
    }

    /**
     * @param mixed $last_name_manager
     */
    public function setLastNameManager($last_name_manager)
    {
        $this->last_name_manager = $last_name_manager;
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