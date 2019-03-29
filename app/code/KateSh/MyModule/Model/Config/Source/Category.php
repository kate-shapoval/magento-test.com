<?php
namespace KateSh\MyModule\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Category implements ArrayInterface
{
 	protected $categoryCollection;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollection)
    {
        $this->categoryCollection = $categoryCollection;
    }
       
    public function toOptionArray()
    {


        $categories = $this->categoryCollection->create()
            ->addAttributeToSelect('*');
        $ret = [];

   	    foreach ($categories as $category)
        {

            $ret[] = [
                'value' => $category->getId(),
                'label' => $category->getName()
            ];
        }

        return $ret;
    }

}