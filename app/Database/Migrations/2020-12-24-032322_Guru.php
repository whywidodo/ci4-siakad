<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
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
			'nip'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat' => [
				'type'           => 'TEXT',
			],
			'hp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '13',
			],
			'gender' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'			 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'			 => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_guru');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_guru');
	}
}
