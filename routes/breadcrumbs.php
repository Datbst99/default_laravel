<?php
//admin
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('admin.category', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Danh sách danh mục', route('admin.category'));
});
