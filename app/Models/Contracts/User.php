<?php

namespace App\Models\Contracts;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 *
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $password
 *
 * @property bool $verified
 * @property bool $email_verified
 * @property bool $phone_verified
 *
 * @property int $role_id
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Photo $photo
 * @property-read Role $role
 * @property-read Collection|Session[] $sessions
 * @property-read Collection|Social[] $socials
 * @property-read Ban $ban
 * @property-read Collection|Ban[] $bansTo
 * @property-read Collection|Ban[] $bansBy
 * @property-read Report $report
 * @property-read Collection|Report[] $reportTo
 * @property-read Collection|Report[] $reportBy
 *
 * @mixin Builder
 */
abstract class User extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'users';

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
    abstract public function name(): string;

    /**
     * @return string
     */
    abstract public function email(): string;

    /**
     * @return string
     */
    abstract public function phone(): string;

    /**
     * @return string
     */
    abstract public function password(): string;

    /**
     * @return bool
     */
    abstract public function verified(): bool;

    /**
     * @return bool
     */
    abstract public function emailVerified(): bool;

    /**
     * @return bool
     */
    abstract public function phoneVerified(): bool;

    /**
     * @return Carbon
     */
    abstract public function createdAt(): Carbon;

    /**
     * @return Carbon
     */
    abstract public function updatedAt(): Carbon;

    /**
     * @return MorphOne
     */
    abstract public function photo(): MorphOne;

    /**
     * @return BelongsTo
     */
    abstract public function role(): BelongsTo;

    /**
     * @return HasMany
     */
    abstract public function sessions(): HasMany;

    /**
     * @return HasMany
     */
    abstract public function socials(): HasMany;

    /**
     * @return HasOne
     */
    abstract public function ban(): HasOne;

    /**
     * @return HasMany
     */
    abstract public function bansTo(): HasMany;

    /**
     * @return HasMany
     */
    abstract public function bansBy(): HasMany;

    /**
     * @return MorphOne
     */
    abstract public function report(): MorphOne;

    /**
     * @return MorphMany
     */
    abstract public function reportsTo(): MorphMany;

    /**
     * @return HasMany
     */
    abstract public function reportsBy(): HasMany;

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
