<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdda73e3ec0285a4ba535ded988ab4a96
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdda73e3ec0285a4ba535ded988ab4a96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdda73e3ec0285a4ba535ded988ab4a96::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
