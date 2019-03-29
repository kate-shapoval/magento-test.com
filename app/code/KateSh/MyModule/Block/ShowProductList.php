<?php
namespace KateSh\MyModule\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Catalog\Model\CategoryRepository;
use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\Api\SearchCriteriaBuilder;
use KateSh\MyModule\Helper\Config;


class ShowProductList extends Template {
    protected $categoryCollection;
   protected $categoryRepository;
    protected $productRepository;
    protected $searchCriteriaBuilder;
    protected $configHelper;
    public function __construct(Context $context,
                                CollectionFactory $categoryCollection,
                                CategoryRepository $categoryRepository,
                                ProductRepository $productRepository,
                                SearchCriteriaBuilder $searchCriteriaBuilder,
                                Config $helper)
    {
        $this->categoryCollection = $categoryCollection;
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->configHelper = $helper;
        parent::__construct($context);
    }
  
    public function getProducts() {
        $categoryID = $this->configHelper->getCategory();
        $searchCriteria = $this->searchCriteriaBuilder->addFilter('category_id', $categoryID)->create();
        return $this->productRepository->getList($searchCriteria)->getItems();
    }

}
?>