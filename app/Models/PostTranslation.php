<?php
/**
 * @package App\Models
 * @author Julien Devergnies <j.devergnies@tousleshoraires.fr>
 * @date   10/4/24
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostTranslation extends Model
{
    use HasFactory;

    protected $table = 'post_translation';
    protected Post $post_id;
    protected string $locale = '';
    protected string $slug = '';
    protected string $title = '';
    protected string $body = '';

    /**
     * Get the post that owns the comment.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
