<?php

namespace Raid\Core\Action\Actions\Crud;

use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;

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
    public function handle(array $filters = [], array $columns = ['*'], array $relations = []): Collection|LengthAwarePaginator
    {
        return array_key_exists('page', $filters) ?
            $this->paginate($filters, $columns, $relations) :
            $this->all($filters, $columns, $relations);
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function all(array $filters = [], array $columns = ['*'], array $relations = []): Collection
    {
        return $this->actionable()->retrieveWithRelations($relations, $columns, ['filters' => $filters]);
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function paginate(array $filters = [], array $columns = ['*'], array $relations = []): LengthAwarePaginator
    {
        return $this->actionable()->retrieveWithRelationsPaginate($relations, $columns, ['filters' => $filters]);
    }
}
