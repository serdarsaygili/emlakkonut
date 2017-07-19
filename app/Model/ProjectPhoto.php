<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

/**
 * App\Model\ProjectPhoto
 *
 * @property int $id
 * @property string $project_id
 * @property string $path
 * @property string $size
 * @property string $original_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereOriginalName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\App\Model\ProjectPhoto whereName($value)
 */
class ProjectPhoto extends Model
{

    protected $table = 'project_photo';

}