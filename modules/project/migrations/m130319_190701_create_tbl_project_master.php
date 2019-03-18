<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m130319_190701_create_tbl_project_master extends \yii\db\Migration {

    public function up() {
        $columns = [
            'id' => 'pk',
            'project_name' => $this->string(20)->notNull(),
            'description' => $this->text(20),
//            'created_at' => $this->time(6),
//            'modified_at' => $this->time(6),
        ];
        $this->createTable('tbl_project_master', $columns);
    }

    public function down() {
        $this->dropTable('tbl_project_master');
    }

}
