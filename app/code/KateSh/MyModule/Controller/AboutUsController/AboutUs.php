<?php

namespace KateSh\MyModule\Controller\AboutUsController;

class AboutUs extends \Magento\Framework\App\Action\Action
{
     public function execute()
     {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}