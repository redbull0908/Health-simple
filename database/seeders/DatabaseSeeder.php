<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Service_category
         \DB::table('service_categories')->insert([
             'name'=>'Лабораторная диагностика',
             'description'=>'Обширный спектр лабораторных услуг...',
             'img'=>'Лабораторная_диагностика.jpg'
         ]);
        \DB::table('service_categories')->insert([
            'name'=>'Узи',
            'description'=>'УЗИ является одним из самых результативных методов диагностики в современной медицине на сегодняшний...',
            'img'=>'Узи.jpg'
        ]);

        //Services
        \DB::table('services')->insert([
            'name'=>'Общий анализ мочи',
            'price'=>3.7,
            'id_service_category'=>1,
        ]);
        \DB::table('services')->insert([
            'name'=>'Забор крови из вены для всего спектра гемотологических исследований (Общий анализ крови)',
            'price'=>3.39,
            'id_service_category'=>1,
        ]);
        \DB::table('services')->insert([
            'name'=>'Взятие крови из пальца для определения глюкозы',
            'price'=>1.28,
            'id_service_category'=>1,
        ]);
        \DB::table('services')->insert([
            'name'=>'Мочевой пузырь',
            'price'=>6.24,
            'id_service_category'=>2,
        ]);
        \DB::table('services')->insert([
            'name'=>'Селезенка',
            'price'=>6.24,
            'id_service_category'=>2,
        ]);
        \DB::table('services')->insert([
            'name'=>'Щитовидная железа с лимфатическими поверхностными узлами',
            'price'=>12.17,
            'id_service_category'=>2,
        ]);
        \DB::table('services')->insert([
            'name'=>'Почки и надпочечники',
            'price'=>12.17,
            'id_service_category'=>2,
        ]);

        //Doctors
        \DB::table('doctors')->insert([
            'full_name'=>'Иванов Иван',
            'description'=>'22 года опыта',
            'id_service_category'=>1,
            'img'=>'ivanov.png'
        ]);
        \DB::table('doctors')->insert([
            'full_name'=>'Игнатьева Тамара',
            'description'=>'10 лет опыта',
            'id_service_category'=>1,
            'img'=>'ignateva.jpg'
        ]);
        \DB::table('doctors')->insert([
            'full_name'=>'Александров Алексей',
            'description'=>'15 лет опыта',
            'id_service_category'=>2,
            'img'=>'alexandrov.jpg'
        ]);
        \DB::table('doctors')->insert([
            'full_name'=>'Кубарева Анна',
            'description'=>'7 лет опыта',
            'id_service_category'=>2,
            'img'=>'kubareva.jpg'
        ]);

        //Roles
        \DB::table('roles')->insert([
            'role'=>'admin'
        ]);
        \DB::table('roles')->insert([
            'role'=>'manage'
        ]);
        \DB::table('roles')->insert([
            'role'=>'doctor'
        ]);
        \DB::table('roles')->insert([
            'role'=>'user'
        ]);

        //Users->user
        \DB::table('users')->insert([
            'login'=>'qwerty01',
            'full_name'=>'Иванов Алексей Викторович',
            'tel_number'=>'448563426',
            'password'=>'$2y$10$cSLcvWhukmfaQMYYQJHPOOXe4ki7tyVJcuIn6WkYoKhq7WfkgIOwG',
            'birthday'=>'2005-04-23',
            'sex'=>'Мужской',
            'id_role'=>4,
            'remember_token'=>null
        ]);
        //Users->doctors
        \DB::table('users')->insert([
            'login'=>'doc01',
            'full_name'=>'Иванов Иван',
            'tel_number'=>'295632378',
            'password'=>'$2y$10$cSLcvWhukmfaQMYYQJHPOOXe4ki7tyVJcuIn6WkYoKhq7WfkgIOwG',
            'birthday'=>null,
            'sex'=>'Мужской',
            'id_role'=>3,
            'remember_token'=>null
        ]);
        \DB::table('users')->insert([
            'login'=>'doc02',
            'full_name'=>'Игнатьева Тамара',
            'tel_number'=>'294854797',
            'password'=>'$2y$10$cSLcvWhukmfaQMYYQJHPOOXe4ki7tyVJcuIn6WkYoKhq7WfkgIOwG',
            'birthday'=>null,
            'sex'=>'Женский',
            'id_role'=>3,
            'remember_token'=>null
        ]);
        \DB::table('users')->insert([
            'login'=>'doc03',
            'full_name'=>'Александров Алексей',
            'tel_number'=>'447692351',
            'password'=>'$2y$10$cSLcvWhukmfaQMYYQJHPOOXe4ki7tyVJcuIn6WkYoKhq7WfkgIOwG',
            'birthday'=>null,
            'sex'=>'Мужской',
            'id_role'=>3,
            'remember_token'=>null
        ]);
        \DB::table('users')->insert([
            'login'=>'doc04',
            'full_name'=>'Кубарева Анна',
            'tel_number'=>'296482963',
            'password'=>'$2y$10$cSLcvWhukmfaQMYYQJHPOOXe4ki7tyVJcuIn6WkYoKhq7WfkgIOwG',
            'birthday'=>null,
            'sex'=>'Женский',
            'id_role'=>3,
            'remember_token'=>null
        ]);

    }
}
