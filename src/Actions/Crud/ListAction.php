<?php

namespace Raid\Core\Actions\Crud;

use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class ListAction extends Action implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::LIST;

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function handle(array $filters = [], array $columns = ['*'], bool $paginate = false): Collection|LengthAwarePaginator
    {
        return $paginate ? $this->paginate($filters, $columns) : $this->all($filters, $columns);
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function all(array $filters = [], array $columns = ['*']): Collection
    {
        return $this->repository()->retrieve($columns, ['filters' => $filters]);
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function paginate(array $filters = [], array $columns = ['*']): LengthAwarePaginator
    {
        return $this->repository()->retrievePaginate($columns, ['filters' => $filters]);
    }
}
