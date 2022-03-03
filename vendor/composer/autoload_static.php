<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58f98983aab0a7a89ba29629b8eef2de
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app/code',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller\\Catalog' => __DIR__ . '/../..' . '/app/code/Controller/Catalog.php',
        'Controller\\User' => __DIR__ . '/../..' . '/app/code/Controller/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit58f98983aab0a7a89ba29629b8eef2de::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit58f98983aab0a7a89ba29629b8eef2de::$classMap;

        }, null, ClassLoader::class);
    }
}