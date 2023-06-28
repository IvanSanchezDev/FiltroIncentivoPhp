<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23d13936fffc9cb1673ff80beb347d92
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spukm01069\\Backend\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spukm01069\\Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23d13936fffc9cb1673ff80beb347d92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23d13936fffc9cb1673ff80beb347d92::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit23d13936fffc9cb1673ff80beb347d92::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit23d13936fffc9cb1673ff80beb347d92::$classMap;

        }, null, ClassLoader::class);
    }
}
