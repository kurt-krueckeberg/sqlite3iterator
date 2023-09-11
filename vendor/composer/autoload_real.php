<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita7bfc0f8319e42dca52080e17fbf39ec
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

        spl_autoload_register(array('ComposerAutoloaderInita7bfc0f8319e42dca52080e17fbf39ec', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita7bfc0f8319e42dca52080e17fbf39ec', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita7bfc0f8319e42dca52080e17fbf39ec::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
