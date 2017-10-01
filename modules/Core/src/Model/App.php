<?php
namespace Core\Model;

use Core\Controller\FrontController;

class App
{

    /**
     * @var FrontController
     */
    protected $frontController;

    /**
     * Get front controller
     *
     * @return FrontController
     */
    public function getFrontController()
    {
        if (!$this->frontController) {
            $this->frontController = new FrontController();
        }
        return $this->frontController;
    }

    /**
     * Run application
     *
     * @throws \Exception
     */
    public function run()
    {
        try {
            $this->loadModules();
            $this->getFrontController()->dispatch();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Load modules
     */
    private function loadModules()
    {
        $config = new Config();
        $applicationConfig = $config::getConfig();

        if (isset($applicationConfig['modules'])) {
            foreach ($applicationConfig['modules'] as $module => $active) {
                if ($active) {
                    // @todo
                }
            }
        }
    }
}
