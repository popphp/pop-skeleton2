<?php

return [
    '/' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'index'
    ],
    '/login' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'login'
    ],
    '/logout' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'logout'
    ],
    '/forgot' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'forgot'
    ],
    '/profile' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'profile'
    ],
    '/verify/:id/:hash' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'verify'
    ],
    '/users[/:rid]' => [
        'controller' => 'App\Controller\Users\IndexController',
        'action'     => 'index',
        'acl'        => [
            'resource'   => 'users',
            'permission' => 'index'
        ]
    ],
    '/users/add[/:rid]' => [
        'controller' => 'App\Controller\Users\IndexController',
        'action'     => 'add',
        'acl'        => [
            'resource'   => 'users',
            'permission' => 'add'
        ]
    ],
    '/users/edit/:id' => [
        'controller' => 'App\Controller\Users\IndexController',
        'action'     => 'edit',
        'acl'        => [
            'resource'   => 'users',
            'permission' => 'edit'
        ]
    ],
    '/users/process' => [
        'controller' => 'App\Controller\Users\IndexController',
        'action'     => 'process',
        'acl'        => [
            'resource'   => 'users',
            'permission' => 'process'
        ]
    ],
    '/roles[/]' => [
        'controller' => 'App\Controller\Roles\IndexController',
        'action'     => 'index',
        'acl'        => [
            'resource'   => 'roles',
            'permission' => 'index'
        ]
    ],
    '/roles/add[/]' => [
        'controller' => 'App\Controller\Roles\IndexController',
        'action'     => 'add',
        'acl'        => [
            'resource'   => 'roles',
            'permission' => 'add'
        ]
    ],
    '/roles/edit/:id' => [
        'controller' => 'App\Controller\Roles\IndexController',
        'action'     => 'edit',
        'acl'        => [
            'resource'   => 'roles',
            'permission' => 'edit'
        ]
    ],
    '/roles/remove' => [
        'controller' => 'App\Controller\Roles\IndexController',
        'action'     => 'remove',
        'acl'        => [
            'resource'   => 'roles',
            'permission' => 'remove'
        ]
    ],
    '*' => [
        'controller' => 'App\Controller\IndexController',
        'action'     => 'error'
    ]
];