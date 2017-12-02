<?php
class Hestabit_ReviewRating_ConnectController extends Mage_Core_Controller_Front_Action {

	public function ConnectAction()
    {
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Titlename"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page connect"),
                "title" => $this->__("Home Page connect"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("titlename", array(
                "label" => $this->__("Titlename connect"),
                "title" => $this->__("Titlename connect")
		   ));

      $this->renderLayout(); 
    }

}
