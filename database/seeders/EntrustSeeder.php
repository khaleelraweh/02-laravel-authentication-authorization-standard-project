<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Dictionary : 
     *              01- Roles 
     *              02- Users
     *              03- AttachRoles To  Users
     *              04- Create random customer and  AttachRole to customerRole
     * 
     * 
     * @return void
     */
    public function run()
    {

        //create fake information  using faker factory lab 
        $faker = Factory::create();


        //------------- 01- Roles ------------//
        //adminRole
        $adminRole = new Role();
        $adminRole->name         = 'admin';
        $adminRole->display_name = 'User Administrator'; // optional
        $adminRole->description  = 'User is allowed to manage and edit other users'; // optional
        $adminRole->allowed_route= 'admin';
        $adminRole->save();

        //supervisorRole
        $supervisorRole = Role::create([
            'name'=>'supervisor',
            'display_name'=>'User Supervisor',
            'description'=>'Supervisor is allowed to manage and edit other users',
            'allowed_route'=>'admin',
        ]);


        //customerRole
        $customerRole = new Role();
        $customerRole->name         = 'customer';
        $customerRole->display_name = 'Project Customer'; // optional
        $customerRole->description  = 'Customer is the customer of a given project'; // optional
        $customerRole->allowed_route= null;
        $customerRole->save();


        //------------- 02- Users  ------------//
        // Create Admin
        $admin = new User();
        $admin->first_name = 'Admin';
        $admin->last_name = 'System';
        $admin->username = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->email_verified_at = now();
        $admin->mobile = '00967772036131';
        $admin->password = bcrypt('123123123');
        $admin->user_image = 'avator.svg';
        $admin->status = 1;
        $admin->remember_token = Str::random(10);
        $admin->save();

        // Create supervisor
        $supervisor = User::create([
            'first_name'=>'Supervisor',
            'last_name'=>'System',
            'username'=>'supervisor',
            'email'=>'supervisor@gmail.com',
            'email_verified_at'=>now(),
            'mobile'=>'00967772036132',
            'password'=>bcrypt('123123123'),
            'user_image'=>'avator.svg',
            'status'=>1,
            'remember_token'=>Str::random(10),
        ]);

        // Create customer
        $customer = User::create([
            'first_name'=>'Khaleel',
            'last_name'=>'Raweh',
            'username'=>'khaleel',
            'email'=>'khaleelvisa@gmail.com',
            'email_verified_at'=>now(),
            'mobile'=>'00967772036133',
            'password'=>bcrypt('123123123'),
            'user_image'=>'avator.svg',
            'status'=>1,
            'remember_token'=>Str::random(10),
        ]);

        //------------- 03- AttachRoles To  Users  ------------//
        $admin->attachRole($adminRole);
        $supervisor->attachRole($supervisorRole);
        $customer->attachRole($customerRole);


        //------------- 04-  Create random customer and  AttachRole to customerRole  ------------//
        for ($i = 1; $i <= 20; $i++){
            //Create random customer
            $random_customer = User::create([
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'username'=>$faker->unique()->userName,
                'email'=>$faker->unique()->email,
                'email_verified_at'=>now(),
                'mobile'=>'0096777'.$faker->numberBetween(1000000,9999999),
                'password'=>bcrypt('123123123'),
                'user_image'=>'avator.svg',
                'status'=>1,
                'remember_token'=>Str::random(10),
            ]);

            //Add customerRole to RandomCusomer
            $random_customer->attachRole($customerRole);

        }//end for


        //------------- 05- Permission  ------------//
        //manage main dashboard page
        $manageMain = Permission::create(['name'=>'main', 'display_name'=>'Main', 'route'=>'index', 'module'=>'index', 'as'=>'index', 'icon'=>'fas fa-home', 'parent'=>'0', 'parent_original'=>'0', 'sidebar_link'=>'1', 'appear'=>'1', 'ordering'=>'1']);
        $manageMain->parent_show = $manageMain->id;
        $manageMain->save();


        
    }
}
