<?php

namespace LYVTH\Coffee\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class CoffeeController extends ActionController
{
    public function __construct() {}
    public function indexAction(): ResponseInterface {
        return $this->htmlResponse();
    }

}