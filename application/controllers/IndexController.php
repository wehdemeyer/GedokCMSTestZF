<?php
//GedokTestZF8
class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }
    public function indexAction()
    {
        $kuenstlerin = new Application_Model_DbTable_kuenstlerin();
        $this->view->kuenstlerin = $kuenstlerin->fetchAll();
    }
    
    public function findekuenstlerinAction()
    {
        $kuenstlerin = new Application_Model_DbTable_kuenstlerin();
        $this->view->kuenstlerin = $kuenstlerin->find(53);

//        $order  = 'kuenstlerin_id';
//        // Gibt die Zeilen 21 bis 30 zurück
//        $count  = 10;
//        $offset = 20;
//        $select = $table->select()->where('kuenstlerin_id = ?' => 'NEW')
//                                  ->order($order)
//                                  ->limit($count, $offset);
//
//        $rows = $table->fetchAll($select);
//
//        $kuenstlerin = new Application_Model_DbTable_kuenstlerin();
//        $this->view->kuenstlerin = $kuenstlerin->fetchAll();
    }


}

