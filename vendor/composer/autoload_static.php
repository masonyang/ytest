<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite158c6bf97dad5d6d9ef8146666c5a24
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Masonyang\\Ytest\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Masonyang\\Ytest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite158c6bf97dad5d6d9ef8146666c5a24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite158c6bf97dad5d6d9ef8146666c5a24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite158c6bf97dad5d6d9ef8146666c5a24::$classMap;

        }, null, ClassLoader::class);
    }
}
