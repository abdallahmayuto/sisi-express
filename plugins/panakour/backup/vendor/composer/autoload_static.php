<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28816f9b3799f6d7351b872ec8683cc9
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '0c3c22e27afa83be19b4c938f4c6e9ea' => __DIR__ . '/..' . '/spatie/laravel-backup/src/Helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Spatie\\TemporaryDirectory\\' => 26,
            'Spatie\\FlysystemDropbox\\' => 24,
            'Spatie\\Dropbox\\' => 15,
            'Spatie\\DbDumper\\' => 16,
            'Spatie\\Backup\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Spatie\\TemporaryDirectory\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/temporary-directory/src',
        ),
        'Spatie\\FlysystemDropbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/flysystem-dropbox/src',
        ),
        'Spatie\\Dropbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/dropbox-api/src',
        ),
        'Spatie\\DbDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/db-dumper/src',
        ),
        'Spatie\\Backup\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/laravel-backup/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28816f9b3799f6d7351b872ec8683cc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28816f9b3799f6d7351b872ec8683cc9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}