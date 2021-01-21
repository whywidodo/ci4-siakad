<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
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
			'nis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'gender' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'kelas' => [
				'type'           => 'VARCHAR',
				'constraint'     => '13',
			],
			'alamat' => [
				'type'           => 'TEXT',
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
		$this->forge->createTable('tbl_siswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_siswa');
	}
}
