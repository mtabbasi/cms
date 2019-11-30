<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #save Role1
        $role1=new Role;
        $role1->name='admin';
        $role1->description="admin User";
        $role1->save();
        
         #save Role2
        $role2=new Role;
        $role2->name='Regular';
        $role2->description="A regular User";
        $role2->save();
    }
}
