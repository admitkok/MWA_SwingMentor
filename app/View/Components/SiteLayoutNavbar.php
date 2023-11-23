<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayoutNavbar extends Component
{
    public array $menu_items;
    public array $home_menu_items;
    public array $admin_menu_items;

    public function __construct()
    {
        $this->menu_items = [
            ['label' => 'Home', 'route' => 'welcome', 'url' => null],
            ['label' => 'Posts', 'route' => 'posts.index', 'url' => null],
            ['label' => 'Mentors', 'route' => 'categories.index', 'url' => null],
            ['label' => 'Table', 'route' => 'users.index', 'url' => null],
        ];

        $this->home_menu_items = [
            ['label' => 'My posts', 'route' => 'home.posts.index', 'url' => null],
            ['label' => 'My mentor', 'route' => 'home.categories.index', 'url' => null],
        ];

        $this->admin_menu_items = [
            ['label' => 'Categories', 'route' => 'admin.categories.index', 'url' => null],
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.site-layout-navbar');
    }
}
