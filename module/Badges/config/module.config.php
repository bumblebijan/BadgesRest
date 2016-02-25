<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Badges\Controller\Badges' => 'Badges\Controller\BadgesController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'badges' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/badges/[:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Badges\Controller\Badges',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'badges' => __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);