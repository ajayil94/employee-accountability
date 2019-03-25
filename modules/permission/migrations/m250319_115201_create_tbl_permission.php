<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m250319_115201_create_tbl_permission extends \yii\db\Migration {

    public function up() {
        $columns = [
            'id' => 'pk',
            'module_id' => $this->text(20)->notNull(),
            'role_id' => $this->text(20)->notNull(),            
//            'created_at' => $this->CURRENT_TIMESTAMP(6)->notNull(),
//            'modified_at' => $this->CURRENT_TIMESTAMP(6)->notNull(),
            
        ];
        $this->createTable('tbl_permission', $columns);
    }

    public function down() {
        $this->dropTable('tbl_permission');
    }

}
