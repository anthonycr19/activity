<?php

class Idiom
{
    private $id_idiom;
    private $iso_code;

    /**
     * @param $id_idiom
     * @param $iso_code
     */
    public function __construct($id_idiom, $iso_code)
    {
        $this->id_idiom = $id_idiom;
        $this->iso_code = $iso_code;
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



}