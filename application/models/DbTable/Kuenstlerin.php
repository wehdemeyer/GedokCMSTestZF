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
        throw new Exception("Could not find row $id");
        }
        return $row->toArray();
        }

}

