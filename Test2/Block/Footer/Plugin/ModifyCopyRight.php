<?php

namespace Training\Test2\Block\Footer\Plugin;

class ModifyCopyRight
{
    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @return mixed
     */
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $text)
    {
        return 'customCopyright!';
    }
}