<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14038e0095ef449589f10df7e8e7a74d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit14038e0095ef449589f10df7e8e7a74d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14038e0095ef449589f10df7e8e7a74d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14038e0095ef449589f10df7e8e7a74d::$classMap;

        }, null, ClassLoader::class);
    }
}
