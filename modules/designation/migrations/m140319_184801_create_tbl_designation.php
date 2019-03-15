<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m140319_184801_create_tbl_designation extends \yii\db\Migration {

    public function up() {
        $columns = [
            'id' => 'pk',
            'designation' => $this->text(20)->notNull(),
            'description' => $this->text(20),            
            'created_at' => $this->time(6)->notNull(),
            'modified_at' => $this->time(6)->notNull(),
            
        ];
        $this->createTable('tbl_designation', $columns);
    }

    public function down() {
        $this->dropTable('tbl_designation');
    }

}
