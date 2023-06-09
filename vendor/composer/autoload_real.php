<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd7b0f3aa71c0e505905e160b46729e16
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd7b0f3aa71c0e505905e160b46729e16', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd7b0f3aa71c0e505905e160b46729e16', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd7b0f3aa71c0e505905e160b46729e16::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
