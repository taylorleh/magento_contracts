<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setup
 *
 * @author Taylor
 */
class Lehman_Contracts_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    
    public function createContractsTable() {
        $this->run("
            DROP TABLE IF EXISTS {$this->getTable('contracts/agreement')};
            CREATE TABLE {$this->getTable('contracts/agreement')} (
                    'id' int(10) NOT NULL AUTO_INCREMENT,
                    'agency' varchar( 255 ) NOT NULL,
                    'title' varchar ( 255 ) NOT NULL,
                    'contracts_number' varchar( 255 ) NOT NULL,
                    'expiration' datetime NOT NULL DEFAULT '',
                    PRIMARY KEY ('id')
                    ) ENGINE = InnoDB DEFAULT CHARSET=utf8;
        ");
        
    }
    
}
