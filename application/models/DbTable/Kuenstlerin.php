<?php
//GedokTestZF8
class Application_Model_DbTable_Kuenstlerin extends Zend_Db_Table_Abstract
{

    protected $_name = 'kuenstlerin';
    public function getKuenstlerin($id)
        {
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
        throw new Exception("Diese Reihe konnte ich nicht finden: $id");
        }
        return $row->toArray();
        }

}

