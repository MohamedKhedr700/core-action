<?php

namespace Raid\Core\Action\Actions\Contracts\Crud;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface ListActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $filters = [], array $columns = ['*'], array $relations = []): Collection|LengthAwarePaginator;

    /**
     * Retrieve all resources.
     */
    public function all(array $filters = [], array $columns = ['*'], array $relations = []): Collection;

    /**
     * Retrieve paginated resources.
     */
    public function paginate(array $filters = [], array $columns = ['*'], array $relations = []): LengthAwarePaginator;
}
