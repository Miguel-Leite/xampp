<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdc8b7ef274d2a4e120a67c3df470c56
{
    public static $files = array (
        'caab5a2e3bd9365e59ef1d91d0fa4031' => __DIR__ . '/../..' . '/app/helpers/constantes.php',
        '6ea4f0a34df03304f3e814c69445d126' => __DIR__ . '/../..' . '/app/router/router.php',
        'f094230ff0f4ea44ea66d8ffc97d5509' => __DIR__ . '/../..' . '/app/core/controller.php',
        '7c4ac2850498bce1ffe799226b9d096e' => __DIR__ . '/../..' . '/app/database/connect.php',
        'f71fcfde36c3805561f11640c52c43d8' => __DIR__ . '/../..' . '/app/database/fetch.php',
        '006d98c1135c6545742832e4a3e8fa06' => __DIR__ . '/../..' . '/app/helpers/redirects.php',
        '03108338bdf0b8103841ca6f68158086' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        '9f7144fc04425bc46199b89ea2865da8' => __DIR__ . '/../..' . '/app/helpers/sessions.php',
        'af1a102b2b2746e3356d67d5f3d727d2' => __DIR__ . '/../..' . '/app/helpers/validate.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdc8b7ef274d2a4e120a67c3df470c56::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdc8b7ef274d2a4e120a67c3df470c56::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdc8b7ef274d2a4e120a67c3df470c56::$classMap;

        }, null, ClassLoader::class);
    }
}
