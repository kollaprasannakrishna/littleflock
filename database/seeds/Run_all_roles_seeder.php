<?php

use Illuminate\Database\Seeder;
use App\Role;

class Run_all_roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=new Role();
        $role_user->name="Blog";
        $role_user->description="Blog Access";
        $role_user->save();

        $role_user1=new Role();
        $role_user1->name="Event";
        $role_user1->description="Event Access";
        $role_user1->save();

        $role_user2=new Role();
        $role_user2->name="Sermon";
        $role_user2->description="Sermon Access";
        $role_user2->save();

        $role_user3=new Role();
        $role_user3->name="Address";
        $role_user3->description="Address Access";
        $role_user3->save();

        $role_user4=new Role();
        $role_user4->name="Email";
        $role_user4->description="Email Access";
        $role_user4->save();
    }
}
