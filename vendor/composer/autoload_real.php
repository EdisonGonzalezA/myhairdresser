<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit04c577e4b6023436a59f1d3016d64b6d
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

        spl_autoload_register(array('ComposerAutoloaderInit04c577e4b6023436a59f1d3016d64b6d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit04c577e4b6023436a59f1d3016d64b6d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit04c577e4b6023436a59f1d3016d64b6d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
