<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	private $tableName = 'posts';

	public function up()
	{
		$this->forge->addField('id');
		$this->forge->addField('title VARCHAR(255) NOT NULL');
		$this->forge->addField('body TEXT NULL');
		$this->forge->addField('published_at DATETIME NOT NULL');
		$this->forge->addField('created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP()');
		$this->forge->addField('updated_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP()');
		$this->forge->createTable($this->tableName);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName);
	}
}
