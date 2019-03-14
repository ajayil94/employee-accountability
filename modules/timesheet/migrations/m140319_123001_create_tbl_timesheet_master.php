<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m140319_123001_create_tbl_timesheet_master extends \yii\db\Migration {

    public function up() {
        $columns = [
            'id' => 'pk',
            'emp_id' => $this->integer(50),
            'project_name' => $this->string(20)->notNull(),
            'description' => $this->text(20),
            'duration' => $this->text(20),
        ];
        $this->createTable('tbl_timesheet_master', $columns);
    }

    public function down() {
        $this->dropTable('tbl_timesheet_master');
    }

}
