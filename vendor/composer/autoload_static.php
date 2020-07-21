<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dfe11ac089a852b5918f532db08720d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dfe11ac089a852b5918f532db08720d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dfe11ac089a852b5918f532db08720d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}