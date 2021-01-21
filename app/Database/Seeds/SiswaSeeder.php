<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SiswaSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		// $s_agama = array("Islam", "Kristen", "Katholik", "Budha", "Hindu", "Konghucu");
		// $r_agama = array_rand($s_agama);

		$s_gender = array("Laki-Laki", "Perempuan");
		$r_gender = array_rand($s_gender);

		$data = [
			'nis'     => $faker->unique()->randomNumber(9),
			'nama'    => $faker->name(),
			'gender'  => $s_gender[$r_gender],
			'alamat'  => $faker->address(),
			'created_at' => Time::now('Asia/Jakarta', 'id_ID'),
			'updated_at' => Time::now('Asia/Jakarta', 'id_ID')

		];


		// $data = [
		//     'nip'     => '20SA1004050497',
		//     'nama'    => 'Wahyu Widodo',
		//     'alamat'  => 'Purbalingga, Jawa Tengah',
		//     'hp'      => '085785855555',
		//     'gender'  => 'Laki-Laki',
		//     'created_at' => Time::now('Asia/Jakarta', 'id_ID'),
		//     'updated_at' => Time::now('Asia/Jakarta', 'id_ID')

		// ];

		// Simple Queries
		$this->db->query(
			"INSERT INTO tbl_siswa (nis, nama, gender, alamat, created_at, updated_at) VALUES(:nis:, :nama:, :gender:, :alamat:, :created_at:, :updated_at:)",
			$data
		);

		// Using Query Builder
		// $this->db->table('tbl_guru')->insert($data);
	}
}
