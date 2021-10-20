<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function checkRoute(string $route_name)
    {
        //todo clean the parameter
        $routes = collect(\Route::getRoutes())->map(function ($route) { return $route->uri(); });
        $is_route_exist = $routes->first(function($item, $index) use($route_name){
           return $item == $route_name;
        });
        return response()->json(['success' => $is_route_exist ]);
    }
}
