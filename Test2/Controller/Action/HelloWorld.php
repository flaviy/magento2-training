<?php
/**
 * Product controller.
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Training\Test2\Controller\Action;
use Magento\Framework\App\Action\Action;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page as ResultPage;

class HelloWorld extends Action
{
    /**
     * @var ResultPage
     */
    private $resultPage;
    public function __construct(Context $context, ResultPage $resultPage){
        $this->resultPage = $resultPage;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->resultPage->initLayout();
        $this->getResponse()->appendBody("HELLO WORLD");

        return $this->resultPage;
    }
}