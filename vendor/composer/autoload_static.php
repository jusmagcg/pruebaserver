<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite727c15887481face7b96365dbb4b948
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite727c15887481face7b96365dbb4b948::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite727c15887481face7b96365dbb4b948::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
