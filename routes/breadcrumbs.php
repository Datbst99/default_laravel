<?php
//admin
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});
