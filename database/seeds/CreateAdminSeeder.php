<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role  = Role::create(['name'=>'admin']);
        /*
        |--------------------------------------------------------------------------
        | CRUD TimeLine
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read timeline','guard_name'=>'web']);
        $permissionWrite    = Permission::create(['name' => 'write timeline','guard_name'=>'web']);
        $permissionEdit     = Permission::create(['name' => 'edit timeline','guard_name'=>'web']);
        $permissionDelete   = Permission::create(['name' => 'delete timeline','guard_name'=>'web']);
        // Assign Role
        $permissionWrite->assignRole($role);
        $permissionRead->assignRole($role);
        $permissionEdit->assignRole($role);
        $permissionDelete->assignRole($role); 
       
        /*
        |--------------------------------------------------------------------------
        | CRUD Message
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read message','guard_name'=>'web']);
        $permissionWrite    = Permission::create(['name' => 'write message','guard_name'=>'web']);
        $permissionEdit     = Permission::create(['name' => 'edit message','guard_name'=>'web']);
        $permissionDelete   = Permission::create(['name' => 'delete message','guard_name'=>'web']);
        // Assign Role
        $permissionWrite->assignRole($role);
        $permissionRead->assignRole($role);
        $permissionEdit->assignRole($role);
        $permissionDelete->assignRole($role); 
        /*
        |--------------------------------------------------------------------------
        | CRUD Project
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read project','guard_name'=>'web']);
        $permissionWrite    = Permission::create(['name' => 'write project','guard_name'=>'web']);
        $permissionEdit     = Permission::create(['name' => 'edit project','guard_name'=>'web']);
        $permissionDelete   = Permission::create(['name' => 'delete project','guard_name'=>'web']);
        // Assign Role
        $permissionWrite->assignRole($role);
        $permissionRead->assignRole($role);
        $permissionEdit->assignRole($role);
        $permissionDelete->assignRole($role);

        /*
        |--------------------------------------------------------------------------
        | CRUD Note
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read note','guard_name'=>'web']);
        // Assign Role
        $permissionRead->assignRole($role);

        /*
        |--------------------------------------------------------------------------
        | CRUD Report
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read report','guard_name'=>'web']);
        // Assign Role
        $permissionRead->assignRole($role);

        /*
        |--------------------------------------------------------------------------
        | CRUD Todo
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read todo','guard_name'=>'web']);
        // Assign Role
        $permissionRead->assignRole($role);

        /*
        |--------------------------------------------------------------------------
        | CRUD Unit
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read unit','guard_name'=>'web']);
        $permissionWrite    = Permission::create(['name' => 'write unit','guard_name'=>'web']);
        $permissionEdit     = Permission::create(['name' => 'edit unit','guard_name'=>'web']);
        $permissionDelete   = Permission::create(['name' => 'delete unit','guard_name'=>'web']);
        // Assign Role
        $permissionWrite->assignRole($role);
        $permissionRead->assignRole($role);
        $permissionEdit->assignRole($role);
        $permissionDelete->assignRole($role);

      
        /*
        |--------------------------------------------------------------------------
        | CRUD Group
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read group','guard_name'=>'web']);
        $permissionWrite    = Permission::create(['name' => 'write group','guard_name'=>'web']);
        $permissionEdit     = Permission::create(['name' => 'edit group','guard_name'=>'web']);
        $permissionDelete   = Permission::create(['name' => 'delete group','guard_name'=>'web']);
        // Assign Role
        $permissionWrite->assignRole($role);
        $permissionRead->assignRole($role);
        $permissionEdit->assignRole($role);
        $permissionDelete->assignRole($role);

        /*
        |--------------------------------------------------------------------------
        | CRUD User
        |--------------------------------------------------------------------------
        */
        $permissionRead     = Permission::create(['name' => 'read user','guard_name'=>'web']);
        $permissionWrite    = Permission::create(['name' => 'write user','guard_name'=>'web']);
        $permissionEdit     = Permission::create(['name' => 'edit user','guard_name'=>'web']);
        $permissionDelete   = Permission::create(['name' => 'delete user','guard_name'=>'web']);
        // Assign Role
        $permissionWrite->assignRole($role);
        $permissionRead->assignRole($role);
        $permissionEdit->assignRole($role);
        $permissionDelete->assignRole($role);
        /*
        |--------------------------------------------------------------------------
        */
      
        #1.admin site
        $user = 'App\User'::findOrFail(1);
        $user->assignRole($role->name);

        $role  = Role::create(['name'=>'staff']);

    }
}
