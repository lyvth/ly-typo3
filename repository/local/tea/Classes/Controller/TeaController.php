<?php

namespace LYVTH\Tea\Controller;

use Exception;
use LYVTH\Tea\Domain\Model\Tea;
use LYVTH\Tea\Domain\Repository\TeaRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException;

class TeaController extends ActionController
{
    private $teaRepository;

    public function __construct(TeaRepository $teaRepository) {
        $this->teaRepository = $teaRepository;
    }

    public function indexAction(): ResponseInterface
    {
        $this->view->assign('teas', $this->teaRepository->findAll());
        $this->view->assign('newTea', GeneralUtility::makeInstance(Tea::class));

        return $this->htmlResponse();
    }

    public function showAction(Tea $tea): ResponseInterface
    {
        $this->view->assign('tea', $tea);
        return $this->htmlResponse();
    }

    public function createAction(Tea $tea): ResponseInterface
    {
        try {
            if (!empty($_FILES['tx_fileupload_upload']['name']['upload'])) {
                $fileData = $_FILES['tx_fileupload_upload'];

                $tmpName = $fileData['tmp_name']['upload'];
                $fileName = $fileData['name']['upload'];

                $storage = ResourceFactory::getInstance()->getDefaultStorage();
                $folder = $storage->getFolder('user_upload');

                // Save the uploaded file into FAL
                $file = $storage->addFile(
                    $tmpName,
                    $folder,
                    $fileName,
                    'changeName'
                );

                // Create a FileReference for the domain model
                $fileReference = $this->createFileReference($file);
                $newUpload->setFile($fileReference);
            }


            $this->teaRepository->add($tea);
            return $this->redirect('index');
        }
        catch (Exception $e) {
            return $this->redirect('index');
        }
    }
}