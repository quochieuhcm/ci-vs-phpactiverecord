<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc24f120996a8fd780c24fb342968c139
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc24f120996a8fd780c24fb342968c139::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}