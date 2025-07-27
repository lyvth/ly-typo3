<?php

namespace LYVTH\Tea\Controller;

use LYVTH\Tea\Domain\Model\Tea;
use LYVTH\Tea\Domain\Repository\TeaRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TeaController extends ActionController
{
    private $teaRepository;

    public function __construct(TeaRepository $teaRepository) {
        $this->teaRepository = $teaRepository;
    }

    public function indexAction(): ResponseInterface
    {
        $this->view->assign('teas', $this->teaRepository->findAll());
        return $this->htmlResponse();
    }

    public function showAction(Tea $tea): ResponseInterface
    {
        $this->view->assign('tea', $tea);
        return $this->htmlResponse();
    }
}