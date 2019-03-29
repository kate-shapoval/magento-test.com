<?php

namespace KateSh\MyModule\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Config extends AbstractHelper
{
	protected $_scopeConfig;
	public function __construct(ScopeConfigInterface $scopeConfig) {
		$this->_scopeConfig = $scopeConfig;
	}
	public function getCategory(){
		$showTemplateHint =  $this->_scopeConfig->getValue('katesh_category/set_category/choose_category', ScopeInterface::SCOPE_STORE); 
	}
}
