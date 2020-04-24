<?php
  
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'luis.encinas1506@gmail.com',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Luis Gerardo',
               'email'=>'luis.encinas@gpomct.com',
               'password'=> bcrypt('123456'),
            ],
        ];

        $roles = [
            'Admin'
        ];

        $permissions = [
            'ver admin_home',
            'administrar libros',
            'descargar excel',
            'descargar pdf',
            
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $admin = User::find(1);
        $role = Role::findById(1);
        $role->givePermissionTo($permissions);
        $admin->assignRole($role);
    }
}