<?php
class phpObjectHead
{

    /* Member variables */
    var $phpHeader;
    var $phpFactObjectHeader;
    var $phpMember;
    var $phpConstructor;
    var $objectImage;
    var $constructorImage;

    /**
     * @return mixed
     */
    public function getPhpHeader()
    {
        return $this->phpHeader;
    }

    /**
     * @param mixed $phpHeader
     */
    public function setPhpHeader($phpHeader): void
    {
        $this->phpHeader = $phpHeader;
    }

    /**
     * @return mixed
     */
    public function getPhpFactObjectHeader()
    {
        return $this->phpFactObjectHeader;
    }

    /**
     * @param mixed $phpFactObjectHeader
     */
    public function setPhpFactObjectHeader($phpFactObjectHeader): void
    {
        $this->phpFactObjectHeader = $phpFactObjectHeader;
    }

    /**
     * @return mixed
     */
    public function getPhpMember()
    {
        return $this->phpMember;
    }

    /**
     * @param mixed $phpMember
     */
    public function setPhpMember($phpMember): void
    {
        $this->phpMember = $phpMember;
    }

    /**
     * @return mixed
     */
    public function getPhpConstructor()
    {
        return $this->phpConstructor;
    }

    /**
     * @param mixed $phpConstructor
     */
    public function setPhpConstructor($phpConstructor): void
    {
        $this->phpConstructor = $phpConstructor;
    }

    /**
     * @return mixed
     */
    public function getObjectImage()
    {
        return $this->objectImage;
    }

    /**
     * @param mixed $objectImage
     */
    public function setObjectImage($objectImage): void
    {
        $this->objectImage = $objectImage;
    }

    /**
     * @return mixed
     */
    public function getConstructorImage()
    {
        return $this->constructorImage;
    }

    /**
     * @param mixed $constructorImage
     */
    public function setConstructorImage($constructorImage): void
    {
        $this->constructorImage = $constructorImage;
    }




}
?>