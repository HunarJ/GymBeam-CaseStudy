<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdfdd2552ba44c5c6c1afac3b80bc9860
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdfdd2552ba44c5c6c1afac3b80bc9860', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdfdd2552ba44c5c6c1afac3b80bc9860', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdfdd2552ba44c5c6c1afac3b80bc9860::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
