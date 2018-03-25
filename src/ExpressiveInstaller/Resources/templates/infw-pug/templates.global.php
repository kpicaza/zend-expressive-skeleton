<?php

return [
    'dependencies' => [
        'factories' => [
            \Zend\Expressive\Template\TemplateRendererInterface::class => \InFw\Pug\PugRendererFactory::class
        ]
    ]
];

