<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9ffb0f8dbdc0cbd86c7362508eff72e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Skowei\\Ui\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Skowei\\Ui\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9ffb0f8dbdc0cbd86c7362508eff72e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9ffb0f8dbdc0cbd86c7362508eff72e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9ffb0f8dbdc0cbd86c7362508eff72e::$classMap;

        }, null, ClassLoader::class);
    }
}