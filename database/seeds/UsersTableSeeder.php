<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dados = [
        'name'=>"estevamota@gmail.com",
        'email'=>"estevamota@gmail.com",
        'password'=>bcrypt("laravel")
      ];
      if(User::where('email','=',$dados['email'])->count()){
        $usuario = User::where('email','=',$dados['email'])->first();
        $usuario->update($dados);
        echo "Usuário Alterado!";
      } else {
        User::create($dados);
        echo "Usuário Criado!";
      }
    }
}
