<?php

namespace App\Models\Contracts;

use App\Models\Enums\BanReason;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 *
 * @property BanReason $reason
 *
 * @property string|null $description
 *
 * @property bool $active
 * @property bool $permanent
 *
 * @property int $user_id
 * @property int $staff_id
 *
 * @property Carbon $banned_at
 * @property Carbon|null $expired_at
 *
 * @property-read User $user
 * @property-read User $staff
 *
 * @mixin Builder
 */
abstract class Ban extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'bans';

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
    abstract public function reason(): string;

    /**
     * @return string|null
     */
    abstract public function description(): ?string;

    /**
     * @return bool
     */
    abstract public function active(): bool;

    /**
     * @return bool
     */
    abstract public function permanent(): bool;

    /**
     * @return Carbon
     */
    abstract public function bannedAt(): Carbon;

    /**
     * @return Carbon|null
     */
    abstract public function expiredAt(): ?Carbon;

    /**
     * @return BelongsTo
     */
    abstract public function user(): BelongsTo;

    /**
     * @return BelongsTo
     */
    abstract public function staff(): BelongsTo;

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
