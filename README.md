# magento2-training
Enable module
php bin/magento --clear-static-content module:enable Training_Test


upgrade your database
bin/magento setup:upgrade" from the Magento root directory

To disable module 
php bin/magento --clear-static-content module:disable Training_Test1
or setting its value to 0 in the etc/config.php

To get list of all loaded modules 
go into the class
Magento\Framework\Module\ModuleList, method getNames(), and put print_r($result); exit; before the return from the method

File system
app/i18n - contains specific translation files

To activate maintenance mode : 
create var/.maintenance.flag
add comma-separated list of ip(without namespaces) to enable for certain ips  var/.maintenance.ip

to access request variable
$this->getRequest()->getParam('website')

to access model from controller
//get helper
$product = $this->_objectManager->get('Magento\Catalog\Helper\Product');
//access model from helper
$product->initProduct($productId, $this, $params);

render example
$resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
$this->_objectManager->get('Magento\Catalog\Helper\Product\View')
->prepareAndRender($resultPage,
$quoteItem->getProduct()->getId(),
$this,
$params
);
return $resultPage;

instance of ResultInterface should be returned from Controller. Other options will be disabled soon

These are the auxiliary methods that are useful in the Admin controllers.
_getSession()
_addBreadcrumb()
_addJs()
_addContent()
_addLeft()
_getUrl()

If you want to know the frontName is correct, then you should check the Router\Base::matchModuleFrontName() and
Route\Config::getModulesByFrontName()

URL consists of three chunks: frontName, actionPath, actionName.

FrontName is connected to the module.
ActionPath is connected to the folder.
action is connected to the PHP class

action class has to extend Magento\Framework\App\Action\Action and must implement an execute() method.

