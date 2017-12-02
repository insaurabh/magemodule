<?php 
    class Hestabit_ReviewRating_Model_Observer {
        const FLAG_SHOW_CONFIG = 'showConfig';
        const FLAG_SHOW_CONFIG_FORMAT = 'showConfigFormat';

        private $request;

 public function controllerActionLayoutLoadBefore(Varien_Event_Observer $observer)
        {

            $layout = $observer->getLayout();
            // Mage::log( $layout );

         $layout = Mage::getSingleton('core/layout');
             // Mage::log( $layout );
         $content = $layout->getBlock('content');
 // Mage::log( $content );
         $newBlock = $layout->createBlock('core/template', 'example_block_name');
         $newBlock->setTemplate('reviewrating/apislider.phtml');
         
         // $content->append($newBlock);

}

        public function checkForConfigRequest($observer) {
            $this->request = $observer->getEvent()->getData('front')->getRequest();
            if($this->request->{self::FLAG_SHOW_CONFIG} === 'true'){
                $this->setHeader();
                $this->outputConfig();
            }
        }

        private function setHeader() {
            $format = isset($this->request->{self::FLAG_SHOW_CONFIG_FORMAT}) ?
            $this->request->{self::FLAG_SHOW_CONFIG_FORMAT} : 'xml';
            switch($format){
                case 'text':
                    header("Content-Type: text/plain");
                    break;
                default:
                    header("Content-Type: text/xml");
            }
        }

        private function outputConfig() {
            die(Mage::app()->getConfig()->getNode()->asXML());
        }
    

    }