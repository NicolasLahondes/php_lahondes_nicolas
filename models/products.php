<?php

class Products
{
    private $id;
    private $name;
    private $longdescription;
    private $visual;
    private $price;
    private $designername;
    private $designermail;

    public function __construct($id, $name, $longdescription, $visual, $price, $designername, $designermail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->longdescription = $longdescription;
        $this->visual = $visual;
        $this->price = $price;
        $this->designername = $designername;
        $this->designermail = $designermail;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of longdescription
     */
    public function getLongdescription()
    {
        return $this->longdescription;
    }

    /**
     * Set the value of longdescription
     *
     * @return  self
     */
    public function setLongdescription($longdescription)
    {
        $this->longdescription = $longdescription;

        return $this;
    }

    /**
     * Get the value of visual
     */
    public function getVisual()
    {
        return $this->visual;
    }

    /**
     * Set the value of visual
     *
     * @return  self
     */
    public function setVisual($visual)
    {
        $this->visual = $visual;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of designername
     */
    public function getDesignername()
    {
        return $this->designername;
    }

    /**
     * Set the value of designername
     *
     * @return  self
     */
    public function setDesignername($designername)
    {
        $this->designername = $designername;

        return $this;
    }

    /**
     * Get the value of designermail
     */
    public function getDesignermail()
    {
        return $this->designermail;
    }

    /**
     * Set the value of designermail
     *
     * @return  self
     */
    public function setDesignermail($designermail)
    {
        $this->designermail = $designermail;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }




    /**
     * addCategory
     *
     * @param  mixed $aCategories
     * @return void
     */
    public function addProduct(&$aCategories)
    {
        array_push($aCategories, $this);
    }



    public function deleteProduct(&$aProduct)
    {
        unset($aProduct[array_search($this, $aProduct)]);
    }



    /**
     * calculateTTC
     *
     * @param  mixed $price
     * @param  mixed $tva
     * @return void
     */
    public static function calculateTTC(&$price, $tva)
    {
        $temp = ($price / 100);
        $temp = ($temp * $tva);
        $temp = $price + $temp;

        return $temp;
    }
}
