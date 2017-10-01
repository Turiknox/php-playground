<?php
namespace Core\Controller;

use Core\Model\Output;
use Zend\Http\PhpEnvironment\Request;

class FrontController extends Request
{
    /**
     * @var array
     */
    protected $routers;

    /**
     * @var Output
     */
    public $output;

    /**
     * Collect routers from config
     */
    private function collectRouters()
    {
        // @todo
        $this->routers = new Router\Standard();
    }

    public function dispatch()
    {
        $this->collectRouters();
        $request = $this->getRequestUri();
        foreach ($this->routers as $router) {
            if ($router->match($request)) {
                break;
            }
        }
        $this->getOutput()->renderOutput();
    }

    public function getOutput()
    {
        if (!$this->output) {
            $this->output = new Output();
        }
        return $this->output;
    }
}
