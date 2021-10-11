<?php

/**
 * Categories
 */
class Categories
{

    private $name;
    private $shortDesc;
    private $orderNumber;

    public function __construct($name, $shortDesc, $orderNumber)
    {

        $this->name = $name;
        $this->shortDesc = $shortDesc;
        $this->orderNumber = $orderNumber;
    }

    /**
     * Get the value of orderNumber
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set the value of orderNumber
     *
     * @return  self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get the value of shortDesc
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * Set the value of shortDesc
     *
     * @return  self
     */
    public function setShortDesc($shortDesc)
    {

        if (strlen($shortDesc) < 200) {
            $this->shortDesc = $shortDesc;
        } else {
            $this->shortDesc = "ERRORDESC";
        }
        return $this;
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

    // Add a category in an Array

    public function addCategory(&$aCategories)
    {
        array_push($aCategories, $this);
    }

    // Modify an existing category
    public function updateCategory($key, $newValue)
    {
        $this->$key = $newValue;
    }

    //
    public function deleteCategory(&$aCategories)
    {
        unset($aCategories[array_search($this, $aCategories)]);
    }
}
