<?php

namespace KateSh\MyModule\Block;

class AboutUs extends \Magento\Framework\View\Element\Template
{
	public function getSomeText()
    {
        return "SomeText";
    }
    public function setName($name)
    {
        return $name;
    }public function setSurname($surname)
    {
        return $surname;
    }
}