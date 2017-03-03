<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;

class ACLSeeder extends Seeder
{
    /**
     * @var Collection;
     */
    private $roles;
    /**
     * @var Collection;
     */
    private $permissions;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Apaga os dados das tabelas
        DB::table('permission_role')->truncate();
        DB::table('permission_user')->truncate();
        DB::table('role_user')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();

        $this->createRoles();
        $this->createPermissions();
        $this->syncRolePermissions();
        $this->syncRoleUser();
    }

    private function createRoles()
    {
        $this->roles = new Collection();

        $roles = array(
            [
                'name' => 'Administrador',
                'slug' => 'admin',
                'description' => 'Gerenciar privilégios do app geral',
            ],
            [
                'name' => 'Gerente da Loja',
                'slug' => 'gerente',
                'description' => 'Gerenciar a Loja de um modo geral',
            ],
            [
                'name' => 'Vendendor',
                'slug' => 'vendedor',
                'description' => 'Vende um produto na loja',
            ],
            [
                'name' => 'Usuário Geral',
                'slug' => 'user',
                'description' => 'Compra um produto',
            ],
        );

        foreach ($roles as $value):
            $role = new Role();
            $role->create($value);
        endforeach;

        $this->command->info(count($roles) . ' roles criadas');
    }

    private function createPermissions()
    {
        $this->permissions = new Collection();

        $permissions = array(
            [
                'name' => 'admin',
                //Passar uma matriz de permissões
                'slug' => [
                    'create' => true,
                    'view' => true,
                    'update' => true,
                    'delete' => true,
                ],
                'description' => 'Gerencia permissões de Admin',
            ],
            [
                'name' => 'gerente',
                //Passar uma matriz de permissões
                'slug' => [
                    'create' => true,
                    'view' => true,
                    'update' => true,
                    'delete' => true,
                ],
                'description' => 'Gerencia permissões de Gerente',
            ],
            [
                'name' => 'vendedor',
                //Passar uma matriz de permissões
                'slug' => [
                    'create' => true,
                    'view' => true,
                    'update' => true,
                    'delete' => true,
                ],
                'description' => 'Gerencia permissões de Vendedor',
            ],
            [
                'name' => 'user',
                //Passar uma matriz de permissões
                'slug' => [
                    'create' => true,
                    'view' => true,
                    'update' => true,
                    'delete' => true,
                    'view.phone' => true,
                ],
                'description' => 'Gerencia permissões de User',
            ],
        );

        foreach ($permissions as $name):
            $permission = new Permission();
            $permission->create($name);
        endforeach;

        $this->command->info(count($permissions) . ' permissions criadas');
    }

    private function syncRolePermissions()
    {
        // ADMIN
        $roleAdmin = Role::first(); // administrator
        $roleAdmin->syncPermissions([1,2,3,4]);

        //Gerente
        $roleGerente = Role::find(2);
        $roleGerente->syncPermissions([2,3]);

        //Vendedor
        $roleVendedor = Role::find(3);
        $roleVendedor->syncPermissions([3]);

        //User
        $roleUser = Role::find(4);
        $roleUser->syncPermissions([4]);

        $this->command->info('Sincronizado a Role com as Permissões.');
    }

    private function syncRoleUser()
    {
        $carlosanders = User::find(1);
        $carlosanders->syncRoles('admin');

        $gerenteanders = User::find(2);
        $gerenteanders->syncRoles('gerente');

        $vendaanders = User::find(3);
        $vendaanders->syncRoles('vendedor');

        $useranders = User::find(4);
        $useranders->syncRoles('user');

        $this->command->info('Sincronizado 4 usuários  com as Roles.');
    }
}
