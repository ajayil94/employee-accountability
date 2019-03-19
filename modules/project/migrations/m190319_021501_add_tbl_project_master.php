<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m190319_021501_add_tbl_project_master extends \yii\db\Migration {

    public function up() {
        $this->addColumn("tbl_project_master", 'project_type', $this->string(20)->notNull());
        $this->addColumn("tbl_project_master", 'billing_hours', $this->integer(20)->notNull());
        $this->addColumn("tbl_project_master", 'remaining_hours', $this->integer(20)->notNull());
    }

    public function down() {
        echo "m190319_021501_add_tbl_project_master cannot execute";
        die;
    }

}
