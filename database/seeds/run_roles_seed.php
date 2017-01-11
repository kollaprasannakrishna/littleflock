<?php

use Illuminate\Database\Seeder;
use App\Role;

class run_roles_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=new Role();
        $role_user->name="Admin";
        $role_user->description="Administrator Access";
        $role_user->save();

        $role_user1=new Role();
        $role_user1->name="member";
        $role_user1->description="Church Member";
        $role_user1->save();

        $role_user2=new Role();
        $role_user2->name="Visitor";
        $role_user2->description="Occational Visitor";
        $role_user2->save();
    }
}
