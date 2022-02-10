<?php

class Idiom
{
    private $id_idiom;
    private $iso_code;
    private $name_idiom;

    /**
     * @param $id_idiom
     * @param $iso_code
     * @param $name_idiom
     */
    public function __construct($id_idiom, $iso_code, $name_idiom)
    {
        $this->id_idiom = $id_idiom;
        $this->iso_code = $iso_code;
        $this->name_idiom = $name_idiom;
    }

    /**
     * @return mixed
     */
    public function getIdIdiom()
    {
        return $this->id_idiom;
    }

    /**
     * @param mixed $id_idiom
     */
    public function setIdIdiom($id_idiom)
    {
        $this->id_idiom = $id_idiom;
    }

    /**
     * @return mixed
     */
    public function getIsoCode()
    {
        return $this->iso_code;
    }

    /**
     * @param mixed $iso_code
     */
    public function setIsoCode($iso_code)
    {
        $this->iso_code = $iso_code;
    }

    /**
     * @return mixed
     */
    public function getNameIdiom()
    {
        return $this->name_idiom;
    }

    /**
     * @param mixed $name_idiom
     */
    public function setNameIdiom($name_idiom)
    {
        $this->name_idiom = $name_idiom;
    }



}