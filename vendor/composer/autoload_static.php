<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dc2896b44f473e6c35d090725c32945
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/app/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3dc2896b44f473e6c35d090725c32945::$classMap;

        }, null, ClassLoader::class);
    }
}
