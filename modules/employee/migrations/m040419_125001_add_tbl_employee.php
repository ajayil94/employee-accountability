<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m040419_125001_add_tbl_employee extends \yii\db\Migration {

    public function up() {
        $this->addColumn("tbl_employee", 'email', $this->string(20)->notNull());
        $this->addColumn("tbl_employee", 'eductaion', $this->string(20)->notNull());
        $this->addColumn("tbl_employee", 'contact', $this->string(20)->notNull());
       
    }

    public function down() {
        echo "m040419_125001_add_tbl_employee cannot execute";
        die;
    }

}
