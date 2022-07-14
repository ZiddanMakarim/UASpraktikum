<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
            'username' => 'ziddan',
			'useremail' => 'ziddan@gmail.com',
			'userpassword' => password_hash('ziddan123', PASSWORD_DEFAULT),
        ]);
	}
}
