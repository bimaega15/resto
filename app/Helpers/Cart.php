<?php

namespace App\Helpers;

use App\Models\Menu;

class Cart
{
    public function __construct()
    {
        if ($this->get() === null) {
            $this->set($this->empty());
        }
    }
    public function add(Menu $menu)
    {
        $cart = $this->get();

        array_push($cart['menu'], $menu);

        $this->set($cart); 
    }
    public function empty()
    {
        return [
            'menu' => [],
        ];
    }
    public function get()
    {
        return session()->get('cart');
    }

    public function set($cart)
    {
        session()->put('cart', $cart);
    }
}
