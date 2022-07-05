<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
	private $tableName = 'categories';
	
	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addField('name VARCHAR(100) NOT NULL');
		$this->forge->addField('created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP()');
		$this->forge->addField('updated_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP()');
		$this->forge->createTable($this->tableName);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}
}
