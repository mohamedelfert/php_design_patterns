<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4cec8139e68efff5e6f5803af2a26a1c
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

        spl_autoload_register(array('ComposerAutoloaderInit4cec8139e68efff5e6f5803af2a26a1c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4cec8139e68efff5e6f5803af2a26a1c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4cec8139e68efff5e6f5803af2a26a1c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}