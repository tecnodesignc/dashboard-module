<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    /**
     * @var array|string[]
     */
    protected array $fillable = ['widgets', 'user_id'];
    /**
     * @var string
     */
    protected string $table = 'dashboard__widgets';

    /**
     * @return mixed
     */
    public function user(): mixed
    {
        $driver = config('encore.user.config.driver');

        return $this->belongsTo("Modules\\User\\Entities\\{$driver}\\User");
    }
}
