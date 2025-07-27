<?php

declare(strict_types=1);

namespace LYVTH\Tea\Domain\Repository;

use LYVTH\Tea\Domain\Model\Tea;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Tea>
 */
class TeaRepository extends Repository {
    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
}