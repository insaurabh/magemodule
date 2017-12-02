<?php
class Hestabit_ReviewRating_Helper_Data extends Mage_Core_Helper_Abstract
{
  /*
    Get API Key from configuration.
  */

  public function getApi() {
      return Mage::getStoreConfig('reviewrating/section_one/custom_field_one');
  }

  /*
    Activate slider check
    @Return :: true/false

  */

  public function showSlider() {
      $showOrNOt = Mage::getStoreConfig('reviewrating/section_one/active');
      return $showOrNOt;
  }

  /*
    Show slider on Home Page.
    @Return :: true/false
    Vertical Slider activated at right sidebar.
  */
    

  public function showOnHome() {
    $showOnHome = Mage::getStoreConfig('reviewrating/section_one/active_home');
    return $showOnHome;
  }


  /*
    Show slider on Checkout Page.
    @Return :: true/false
    Horizontal Slider activated at footer section
  */
    
   public function showOnCheckout() {
    $showOnCheckout = Mage::getStoreConfig('reviewrating/section_one/active_checkout');
    return $showOnCheckout;
  }

    /*
      Design settings for Horizontal slider
      @return :: Background color # value for Right section
    
    */

  public function getBgColorRht() {
    $bgColorRgt = Mage::getStoreConfig('reviewrating/section_two/color_field_right');

    return "#".$bgColorRgt;

  } 


    /*
      
      @return :: Background color # value for left section
    
    */

    public function getBgColorLft() {
      $bgColorLft = Mage::getStoreConfig('reviewrating/section_two/color_field_left');
      return "#".$bgColorLft;

    } 


    /*
      @return :: Heading color
    */
    public function getHeadingColor() {
      $headingColor = Mage::getStoreConfig('reviewrating/section_two/color_field_heading');
      return "#".$headingColor;

  } 

   /*
      @return :: text color of horizontal slider
   */

  public function getTextColor() {
    $txtColor = Mage::getStoreConfig('reviewrating/section_two/color_field_text');
      return "#".$txtColor;
    }

  /*
      @return :: Background color of horizontal slider
   */


  public function getBgColor() {
    $bgColor = Mage::getStoreConfig('reviewrating/section_two/color_field');

    return "#".$bgColor;

  } 

   /*
      Design settings for Vertical slider
      @return :: Background color # value for Top section
    
    */

  public function getBgColorTop() {
    $bgColorTop = Mage::getStoreConfig('reviewrating/section_three/color_field_top');

    return "#".$bgColorTop;

  } 


    /*
      
      @return :: Background color # value for Top section
    
    */

    public function getBgColorBottom() {
      $bgColorBottom = Mage::getStoreConfig('reviewrating/section_three/color_field_bottom');
      return "#".$bgColorBottom;

    } 


    /*
      @return :: Heading color for vertical slider
    */
    public function vGetHeadingColor() {
      $headingColorV = Mage::getStoreConfig('reviewrating/section_three/color_field_heading');
      return "#".$headingColorV;

  } 

   /*
      @return :: text color of horizontal slider
   */

  public function vGetTextColor() {
    $txtColorV = Mage::getStoreConfig('reviewrating/section_three/color_field_text');
      return "#".$txtColorV;
    }

  /*
      @return :: Background color of horizontal slider
   */


  public function vGetBgColor() {
    $bgColorV = Mage::getStoreConfig('reviewrating/section_three/color_field');

    return "#".$bgColorV;

  }


}
   