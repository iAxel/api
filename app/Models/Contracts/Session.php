<?php

namespace App\Models\Contracts;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 *
 * @property string $uuid
 * @property string $token
 * @property string $agent
 * @property string $address
 *
 * @property int $user_id
 *
 * @property Carbon|null $used_at
 * @property Carbon $login_at
 * @property Carbon|null $expired_at
 * @property Carbon|null $deleted_at
 *
 * @property-read User $user
 *
 * @mixin Builder
 */
abstract class Session extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'sessions';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $keyType = 'int';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @return int
     */
    abstract public function id(): int;

    /**
     * @return string
     */
    abstract public function uuid(): string;

    /**
     * @return string
     */
    abstract public function token(): string;

    /**
     * @return string
     */
    abstract public function agent(): string;

    /**
     * @return string
     */
    abstract public function address(): string;

    /**
     * @return Carbon|null
     */
    abstract public function usedAt(): ?Carbon;

    /**
     * @return Carbon
     */
    abstract public function loginAt(): Carbon;

    /**
     * @return Carbon|null
     */
    abstract public function expiredAt(): ?Carbon;

    /**
     * @return Carbon|null
     */
    abstract public function deletedAt(): ?Carbon;

    /**
     * @return BelongsTo
     */
    abstract public function user(): BelongsTo;

    /**
     * @param array $params
     *
     * @return Builder
     */
    abstract public function filter(array $params): Builder;

    /**
     * @param string $column
     * @param mixed $value
     *
     * @return Builder
     */
    abstract public function findBy(string $column, mixed $value): Builder;
}
