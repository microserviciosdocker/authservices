<?php
namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    // User::factory(10)->create();
    User::factory()->create([
      'name'      => env('NAME_AUTHSERVICE'),
      'lastname'  => env('LASTNAME_AUTHSERVICE'),
      'username'  => env('USERNAME_AUTHSERVICE'),
      'email'     => env('EMAIL_AUTHSERVICE'),
      'password'  => Hash::make(env('PASSWORD_AUTHSERVICE')),
      'code'      => env('CODE_AUTHSERVICE'),
      'phone'     => env('PHONE_AUTHSERVICE'),
      'chat_id'   => env('CHAT_ID_AUTHSERVICE')
    ]);
  }
}
