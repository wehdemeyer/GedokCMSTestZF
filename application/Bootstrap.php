<?php
//GedokTestZF8
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
protected function _initNavigation()
 {
    $this->bootstrap('layout');
    $layout = $this->getResource('layout');
    $view   = $layout->getView();

//    rausgenommen, da die resource xhtml strikt schon in der application.ini steht
//    $view-><doctype('HTML PUBLIC "-//W3C//DTD HTML 4.01//EN'); 
//    $view->doctype('HTML4_STRICT');
//    $view->doctype('XHTML1_STRICT');

    $view->headTitle('GedokTestZF8')
             ->setSeparator(' :: ');

    //XML laden
    $config = new Zend_Config_Xml(APPLICATION_PATH.'/configs/navi.xml', 'nav');
    $navigation = new Zend_Navigation($config);

    //Der Registry übergeben
    Zend_Registry::set('Zend_Navigation', $navigation);
    $view->navigation($navigation);
    
     // Setzt das initiale Stylesheet:
    $view->headLink()->prependStylesheet('./css/haupt.css');
            
 }

}

