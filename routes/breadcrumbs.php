<?php
// Kategori
Breadcrumbs::for('kategori', function ($trail) {
    $trail->push('Kategori', route('resto.kategori'));
});
Breadcrumbs::for('sub-kategori', function ($trail) {
    $trail->push('Sub Kategori', route('resto.sub-kategori'));
});
Breadcrumbs::for('menu-pesanan', function ($trail) {
    $trail->push('Menu Pesanan', route('resto.menupesanan'));
});
Breadcrumbs::for('usersmanagement', function ($trail) {
    $trail->push('Users Management', route('resto.users-management'));
});
Breadcrumbs::for('pos', function ($trail) {
    $trail->push('Pos', route('resto.pos'));
});
