<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c7eda5bba1fff8504b0e6624d3894ba
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c7eda5bba1fff8504b0e6624d3894ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c7eda5bba1fff8504b0e6624d3894ba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
