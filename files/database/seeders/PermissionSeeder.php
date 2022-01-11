<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Usuários - 1/5
            [ 'name' => 'listar_usuarios'],
            [ 'name' => 'criar_usuario'],
            [ 'name' => 'ver_usuario'],
            [ 'name' => 'editar_usuario'],
            [ 'name' => 'excluir_usuario'],

            // Segmentos - 6/10
            [ 'name' => 'listar_segmentos'],
            [ 'name' => 'criar_segmento'],
            [ 'name' => 'ver_segmento'],
            [ 'name' => 'editar_segmento'],
            [ 'name' => 'excluir_segmento'],

            // Planos - 11/15
            [ 'name' => 'listar_planos'],
            [ 'name' => 'criar_plano'],
            [ 'name' => 'ver_plano'],
            [ 'name' => 'editar_plano'],
            [ 'name' => 'excluir_plano'],

            // SubscriptionController - 16/20
            [ 'name' => 'listar_assinaturas'],
            [ 'name' => 'criar_assinatura'],
            [ 'name' => 'ver_assinatura'],
            [ 'name' => 'editar_assinatura'],
            [ 'name' => 'excluir_assinatura'],

            // Empresas - 21/25
            [ 'name' => 'listar_empresas'],
            [ 'name' => 'criar_empresa'],
            [ 'name' => 'ver_empresa'],
            [ 'name' => 'editar_empresa'],
            [ 'name' => 'excluir_empresa'],

            // Nozap


            // Clientes / Perfis - 26/35
            [ 'name' => 'plano_nome'],
            [ 'name' => 'plano_contato'],
            [ 'name' => 'plano_post'],
            [ 'name' => 'plano_info'],
            [ 'name' => 'plano_whatsapp'],
            [ 'name' => 'plano_link'],
            [ 'name' => 'plano_localizacao'],
            [ 'name' => 'plano_horario'],
            [ 'name' => 'plano_encarte'],
            [ 'name' => 'plano_mapa'],
        ];
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $role_has_permissions = [
            // Vendor
            [ 'permission_id' => 2, 'role_id' => 2 ],
            [ 'permission_id' => 21, 'role_id' => 2 ],
            [ 'permission_id' => 22, 'role_id' => 2 ],
            [ 'permission_id' => 23, 'role_id' => 2 ],
            [ 'permission_id' => 16, 'role_id' => 2 ],
            [ 'permission_id' => 17, 'role_id' => 2 ],
            [ 'permission_id' => 18, 'role_id' => 2 ],
            [ 'permission_id' => 19, 'role_id' => 2 ],
            [ 'permission_id' => 11, 'role_id' => 2 ],
            [ 'permission_id' => 13, 'role_id' => 2 ],

            // Customer
            [ 'permission_id' => 17, 'role_id' => 4 ],
            [ 'permission_id' => 18, 'role_id' => 4 ],
            [ 'permission_id' => 19, 'role_id' => 4 ],
            [ 'permission_id' => 22, 'role_id' => 4 ],
            [ 'permission_id' => 23, 'role_id' => 4 ],
            [ 'permission_id' => 24, 'role_id' => 4 ],
        ];
        foreach($role_has_permissions as $role_has_permission) {
            DB::table('role_has_permissions')->insert($role_has_permission);
        }

        $model_has_permissions = [
            // Plano 1
            [ 'permission_id' => 26, 'model_type' => 'App\Models\Plan', 'model_id' => 1 ],
            [ 'permission_id' => 27, 'model_type' => 'App\Models\Plan', 'model_id' => 1 ],
            [ 'permission_id' => 28, 'model_type' => 'App\Models\Plan', 'model_id' => 1 ],

            // Plano 2
            [ 'permission_id' => 26, 'model_type' => 'App\Models\Plan', 'model_id' => 2 ],
            [ 'permission_id' => 27, 'model_type' => 'App\Models\Plan', 'model_id' => 2 ],
            [ 'permission_id' => 28, 'model_type' => 'App\Models\Plan', 'model_id' => 2 ],
            [ 'permission_id' => 29, 'model_type' => 'App\Models\Plan', 'model_id' => 2 ],
            [ 'permission_id' => 30, 'model_type' => 'App\Models\Plan', 'model_id' => 2 ],
            [ 'permission_id' => 32, 'model_type' => 'App\Models\Plan', 'model_id' => 2 ],

            // Plano 3
            [ 'permission_id' => 26, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],
            [ 'permission_id' => 27, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],
            [ 'permission_id' => 28, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],
            [ 'permission_id' => 29, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],
            [ 'permission_id' => 30, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],
            [ 'permission_id' => 31, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],
            [ 'permission_id' => 32, 'model_type' => 'App\Models\Plan', 'model_id' => 3 ],

            // Usuário vendedor
            [ 'permission_id' => 16, 'model_type' => 'App\Models\User', 'model_id' => 1 ],
            [ 'permission_id' => 17, 'model_type' => 'App\Models\User', 'model_id' => 1 ],
        ];
        foreach ($model_has_permissions as $model_has_permission) {
            DB::table('model_has_permissions')->insert($model_has_permission);
        }
    }
}
