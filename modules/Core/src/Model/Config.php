<?php
namespace Core\Model;

class Config
{
    const APPLICATION_CONFIG_FILE = 'config.php';

    /**
     * @array
     */
    public static $config;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->loadConfig();
    }

    /**
     * @return array
     */
    public static function getConfig()
    {
        return self::$config;
    }

    /**
     * Get Base URL
     *
     * @return string
     */
    public static function getBaseUrl()
    {
        return BP . DS;
    }

    /**
     * Get application root config
     *
     * @return array
     */
    private function getApplicationRootConfig()
    {
        return include $this->getApplicationDir() . self::APPLICATION_CONFIG_FILE;
    }

    /**
     * Get application directory
     *
     * @return string
     */
    public function getApplicationDir()
    {
        return self::getBaseUrl() . 'app' . DS;
    }

    /**
     * Load application config
     */
    public function loadConfig()
    {
        $config = $this->getApplicationRootConfig();
        self::$config = $config;
    }
}
