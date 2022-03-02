<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name        = "Administrator";
        $administrator->email       = "bapendasitubondo@gmail.com";
        $administrator->password    = \Hash::make("password");
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}
