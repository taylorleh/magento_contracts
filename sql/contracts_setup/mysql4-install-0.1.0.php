<?php 


$installer = $this;

$installer->startSetup();

$installer->run("
    DROP TABLE IF EXISTS {$this->getTable('lehman/contract')};
    CREATE TABLE {$this->getTable('lehman/contract')} (
            `id` int(10) NOT NULL AUTO_INCREMENT,
            `agency` varchar( 255 ) NOT NULL,
            `title` varchar ( 255 ) NOT NULL,
            `contracts_number` varchar( 255 ) NOT NULL,
            `expiration` datetime default NULL,
            PRIMARY KEY (`id`)
            ) ENGINE = InnoDB DEFAULT CHARSET=utf8;
");


$installer->endSetup();
