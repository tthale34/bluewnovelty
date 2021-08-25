<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f12defa6cff4cb2b5d0f56c570123f8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f12defa6cff4cb2b5d0f56c570123f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f12defa6cff4cb2b5d0f56c570123f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f12defa6cff4cb2b5d0f56c570123f8::$classMap;

        }, null, ClassLoader::class);
    }
}