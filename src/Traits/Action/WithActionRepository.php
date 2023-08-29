<?php

namespace Raid\Core\Action\Traits\Action;

use Exception;
use Raid\Core\Repositories\Contracts\RepositoryInterface;

trait WithActionRepository
{
    /**
     * The account repository instance.
     */
    protected RepositoryInterface $repository;

    /**
     * {@inheritdoc}
     */
    public function setRepository(RepositoryInterface $repository): void
    {
        $this->repository = $repository;
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function repository(): RepositoryInterface
    {
        if (! isset($this->repository)) {
            $this->loadRepository();
        }

        return $this->repository;
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function loadRepository(): void
    {
        $repositoryClass = static::repositoryClass();

        if (empty($repositoryClass)) {
            $classNamespace = static::class;

            throw new Exception("Missing repository class for action $classNamespace");
        }

        $this->setRepository(app($repositoryClass));
    }
}
