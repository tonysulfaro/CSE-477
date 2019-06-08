<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f4677502d6836149053515f50275dca
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lights\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lights\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/LightGame',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f4677502d6836149053515f50275dca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f4677502d6836149053515f50275dca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
