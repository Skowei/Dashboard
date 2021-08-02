<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\DashboardRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DashboardRouteController extends DashboardController
{
    public function index()
    {
        $collection = DashboardRoute::paginate(4);

        $tmp = Route::getRoutes();
        $routeCollection = [];
        $i=0;
        foreach($tmp as $item)
            if((strpos($item->getName(), 'dashboard') !== false) 
            &&((strpos($item->getName(), 'index') !== false)
            || (strpos($item->getName(), 'show')  !== false)
            || (strpos($item->getName(), 'edit')  !== false)
            || (strpos($item->getName(), 'create')!== false))) 
        {
            $i++; $routeCollection[$i] = $item;
        }
        return view('dashboard.settings.routes.index', compact(['routeCollection', 'collection']));
    }
    public function edit(DashboardRoute $item)
    {
        $tmp = Route::getRoutes();
        $routeCollection = []; $i=0;
        foreach($tmp as $tmb)
            if((strpos($tmb->getName(), 'dashboard') !== false) 
            &&((strpos($tmb->getName(), 'index') !== false)
            || (strpos($tmb->getName(), 'show')  !== false)
            || (strpos($tmb->getName(), 'edit')  !== false)
            || (strpos($tmb->getName(), 'create')!== false))) 
        {
            $i++; $routeCollection[$i] = $tmb;
        }
        return view('dashboard.settings.routes.edit', compact(['item', 'routeCollection']));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'icon'  =>  'nullable',
            'route' =>  'nullable',
            'parent_id'=>  'nullable',
        ]);
        DashboardRoute::create([
            'name'  =>  $request->name,
            'icon'  =>  $request->icon,
            'route' =>  $request->route,
            'parent_id'=>  $request->parent_id,
        ]);
        return redirect()->route('dashboard.settings.routes.index');
    }

    public function update(Request $request, DashboardRoute $item)
    {
        $request->validate([
            'name'  =>  'required',
            'icon'  =>  'nullable',
            'route' =>  'nullable',
            'parent_id'=>  'nullable',
        ]);
        $item->update([
            'name'  =>  $request->name,
            'icon'  =>  $request->icon,
            'route' =>  $request->route,
            'parent_id'=>  $request->parent_id,
        ]);
        $item->save();
        return redirect()->route('dashboard.settings.routes.index');
    }

    public function destroy(DashboardRoute $item)
    {
        $item->delete();
        return redirect()->route('dashboard.settings.routes.index');
    }
}