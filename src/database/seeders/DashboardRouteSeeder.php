<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dashboard_routes')->insert([
            'name'      =>  'Dashboard',
            'icon'      =>  'fas fa-chart-pie',
            'route'     =>  'dashboard.index',
            'parent_id' =>  null,
        ]);
        DB::table('dashboard_routes')->insert([
            'name'      =>  'Users',
            'icon'      =>  'fas fa-users',
            'route'     =>  'dashboard.user.index',
            'parent_id' =>  null,
        ]);

        DB::table('dashboard_routes')->insert([
            'id'        =>  '21',
            'name'      =>  'Settings',
            'icon'      =>  'fas fa-sliders-h',
            'route'     =>  null,
            'parent_id' =>  null,
        ]);
        DB::table('dashboard_routes')->insert([
            'name'      =>  'Routes',
            'icon'      =>  'fas fa-list',
            'route'     =>  'dashboard.settings.routes.index',
            'parent_id'    =>  '21',
        ]);

        DB::table('dashboard_routes')->insert([
            'name'      =>  'Basic',
            'icon'      =>  'fas fa-tools',
            'route'     =>  'dashboard.settings.basic.index',
            'parent_id' =>  '21',
        ]);

        DB::table('dashboard_routes')->insert([
            'name'      =>  'Examples',
            'icon'      =>  'fas fa-toolbox',
            'route'     =>  'dashboard.examples.index',
            'parent_id' =>  null,
        ]);
    }
}