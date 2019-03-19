<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m140319_024801_create_tbl_mapping extends \yii\db\Migration {

    public function up() {
        $columns = [
            'id' => 'pk',
            'project_name' => $this->text(20)->notNull(),
            'emp_name' => $this->text(20),            
            'created_at' => $this->CURRENT_TIMESTAMP(6)->notNull(),
            'modified_at' => $this->CURRENT_TIMESTAMP(6)->notNull(),
            
        ];
        $this->createTable('tbl_mapping', $columns);
    }

    public function down() {
        $this->dropTable('tbl_mapping');
    }

}
