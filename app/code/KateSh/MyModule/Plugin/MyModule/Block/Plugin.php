<?php

namespace KateSh\MyModule\Plugin\MyModule\Block;

use KateSh\MyModule\Block\AboutUs;

class Plugin
{
    public function beforeGetSomeText(AboutUs $subject) {
        return 'beforeGetSomeText';
    }
    public function afterSetName(AboutUs $subject, $name)
    {
        $result = '( Hello, ' .$name. ') after';
        return $result;
    }

   /* public function afterGetCustomText_2(AboutUs $subject, $result)
    {
        return '|' . $result . '|';
    }

    public function aroundGetCustomText_2(AboutUs $subject) {
        return "AROUND";
    }


    public function aroundGetCustomText_1(AboutUs $subject, callable $proceed)
    {
        $result = $proceed('test data');
        return $result;
    }*/
}