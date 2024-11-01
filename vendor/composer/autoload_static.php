<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit439dfb930f02d7c8a3c4332a3a0f6825
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SettingsApi\\' => 12,
        ),
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
        'L' => 
        array (
            'League\\HTMLToMarkdown\\' => 22,
        ),
        'E' => 
        array (
            'Editormd\\' => 9,
            'EditormdUtils\\' => 14,
            'EditormdPages\\' => 14,
            'EditormdFront\\' => 14,
            'EditormdFrontStyle\\' => 19,
            'EditormdApp\\' => 12,
            'EditormdAdmin\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SettingsApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/lurenjiasworld/wp-settings-api-class/src',
        ),
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
        'League\\HTMLToMarkdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/html-to-markdown/src',
        ),
        'Editormd\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'EditormdUtils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Utils',
        ),
        'EditormdPages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Pages',
        ),
        'EditormdFront\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Front',
        ),
        'EditormdFrontStyle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FrontStyle',
        ),
        'EditormdApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
        'EditormdAdmin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Admin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit439dfb930f02d7c8a3c4332a3a0f6825::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit439dfb930f02d7c8a3c4332a3a0f6825::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
