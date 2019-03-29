<?php

namespace KateSh\MyModule\Plugin\MyModule\Block;

use KateSh\MyModule\Block\AboutUs;

class Plugin
{
    public function beforeGetSomeText(AboutUs $subject) {
        return 'beforeGetSomeText';
    }
    public function afterSetName(AboutUs $subject, $result){
        $result = '( Hello, ' .$result. ') after';
        return $result;
    }
    public function aroundSetSurname(AboutUs $subject) {
        return 'aroundSetSurname';
    }
   /* public function aroundSetSurname(AboutUs $subject, callable $proceed){
        $result = $proceed('test data');
        return $result;
    }*/
}