<?php

namespace Training\Test2\Controller\Product\Plugin;

class View
{
    public function beforeExecute() {

        //echo "BEFORE<BR>";
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,  $result) {
        return $result;
    }
}