<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #save user1
        $user1=new User;
        $user1->name='ali';
        $user1->email='aligmail.com';
        $user1->role_id=1;
        $user1->password=bcrypt('123456');
        $user1->save();
        #save user2
        $user2=new User;
        $user2->name='taha';
        $user2->role_id=2;
        $user2->email='taha@gmail.com';
        $user2->password=bcrypt('123456');
        $user2->save();
        #save user3
        $user3=new User;
        $user3->role_id=2;
        $user3->name='negin';
        $user3->email='negin@gmail.com';
        $user3->password=bcrypt('123456');
        $user3->save();
        
    }
}
