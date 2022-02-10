<?php

class Platform
{
    private $id_platform;
    private $name_platform;

    /**
     * @param $id_platform
     * @param $name_platform
     */
    public function __construct($id_platform, $name_platform)
    {
        $this->id_platform = $id_platform;
        $this->name_platform = $name_platform;
    }

    /**
     * @return mixed
     */
    public function getIdPlatform()
    {
        return $this->id_platform;
    }

    /**
     * @param mixed $id_platform
     */
    public function setIdPlatform($id_platform)
    {
        $this->id_platform = $id_platform;
    }

    /**
     * @return mixed
     */
    public function getNamePlatform()
    {
        return $this->name_platform;
    }

    /**
     * @param mixed $name_platform
     */
    public function setNamePlatform($name_platform)
    {
        $this->name_platform = $name_platform;
    }

}