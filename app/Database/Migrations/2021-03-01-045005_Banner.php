<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Banner extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'deskripsi'       	=> [
				'type'       	=> 'TEXT',
				'null'			=> false,
			],
			'layanan'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint'	=> '255',
			],
			'foto'       	=> [
				'type'       	=> 'VARCHAR',
				'constraint' 	=> '255',
			],
			'created_at' 		=> [
				'type' 			=> 'DATETIME',
				'null' 			=> true,
			],
			'updated_at' 		=> [
				'type' 			=> 'DATETIME',
				'null' 			=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('banner');
	}

	public function down()
	{
		$this->forge->dropTable('banner');
	}
}
