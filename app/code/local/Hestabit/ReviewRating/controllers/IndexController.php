<?php
class Hestabit_ReviewRating_IndexController extends Mage_Core_Controller_Front_Action{
  
    public function IndexAction() {
      
	  $this->loadLayout();  

// this will add a static block at head section when we are on module page

//     $block = $this->getLayout()->createBlock(
// 'Mage_Core_Block_Template',
// 'my_block_name_here',
// array('template' => 'reviewrating/apislider.phtml')
// );

// $this->getLayout()->getBlock('head')->append($block);



	  $this->getLayout()->getBlock("head")->setTitle($this->__("Titlename"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("titlename", array(
                "label" => $this->__("Titlename"),
                "title" => $this->__("Titlename")
		   ));

      $this->renderLayout(); 
	  
    }

    public function ConnectAction() { 
    // just hit http://127.0.0.1/magento1/reviewrating/index/connect
    
       $this->loadLayout(); 
           echo "Hello";
       $this->renderLayout(); 
    }

}