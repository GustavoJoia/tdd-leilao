<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cfe748817efd19a54e2f87de4f8014e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\TddLeilao\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\TddLeilao\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cfe748817efd19a54e2f87de4f8014e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cfe748817efd19a54e2f87de4f8014e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0cfe748817efd19a54e2f87de4f8014e::$classMap;

        }, null, ClassLoader::class);
    }
}