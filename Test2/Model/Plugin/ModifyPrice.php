<?php

namespace Training\test2\Model\Plugin;

class ModifyPrice
{
    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @return mixed
     */
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $price)
    {
        return $price+1000;
    }
}