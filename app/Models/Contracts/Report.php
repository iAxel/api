<?php

namespace App\Models\Contracts;

use App\Enums\Models\Report\Able;
use App\Enums\Models\Report\Reason;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 *
 * @property Reason $reason
 *
 * @property string|null $description
 *
 * @property int $user_id
 * @property int $reportable_id
 *
 * @property Able $reportable_type
 *
 * @property Carbon $reported_at
 *
 * @property-read User $user
 * @property-read mixed $reportable
 *
 * @mixin Builder
 */
abstract class Report extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'reports';

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
     * @return string
     */
    abstract public function reportableType(): string;

    /**
     * @return Carbon
     */
    abstract public function reportedAt(): Carbon;

    /**
     * @return BelongsTo
     */
    abstract public function user(): BelongsTo;

    /**
     * @return MorphTo
     */
    abstract public function reportable(): MorphTo;

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
