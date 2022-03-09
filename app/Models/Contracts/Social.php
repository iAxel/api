<?php

namespace App\Models\Contracts;

use App\Enums\Models\Social\Type;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 *
 * @property Type $type
 *
 * @property int $user_id
 * @property int $social_id
 *
 * @property array $params
 *
 * @property Carbon $login_at
 *
 * @property-read User $user
 *
 * @mixin Builder
 */
abstract class Social extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'socials';

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
    abstract public function type(): string;

    /**
     * @return int
     */
    abstract public function socialId(): int;

    /**
     * @return array
     */
    abstract public function params(): array;

    /**
     * @return Carbon
     */
    abstract public function loginAt(): Carbon;

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
