<?php

namespace Modules\Dashboard\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\BaseRepository;

interface WidgetRepository extends BaseRepository
{
    /**
     * Find the saved state of widgets for the given user id
     * @param int $userId
     * @return Model|Collection|Builder|array|null
     */
    public function findForUser($userId);

    /**
     * Update or create the given widgets for given user
     * @param array $widgets
     * @return void
     */
    public function updateOrCreateForUser($widgets, $userId);
}
