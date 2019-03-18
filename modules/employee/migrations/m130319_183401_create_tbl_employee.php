<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m130319_183401_create_tbl_employee extends \yii\db\Migration {

    public function up() {
        $columns = [
            'id' => 'pk',
            'first_name' => $this->text(20)->notNull(),
            'middle_name' => $this->text(20),
            'last_name' => $this->text(20)->notNull(),
            'age' => $this->integer(2)->notNull(),
            'gender' => "ENUM('Male', 'Female', 'Others') NOT NULL",
            'designation' => $this->dropDownlist(20)->notNull(),
//            'created_at' => $this->time(6)->notNull(),
//            'modified_at' => $this->time(6)->notNull(),
        ];
        $this->createTable('tbl_employee', $columns);
    }

    public function down() {
        $this->dropTable('tbl_employee');
    }

}
