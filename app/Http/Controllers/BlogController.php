<?php
/**
 * @package App\Http\Controllers
 * @author Julien Devergnies <j.devergnies@tousleshoraires.fr>
 * @date   10/4/24
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers;

use Illuminate\View\View;
use Statamic\Facades\Entry;

final class BlogController extends Controller
{
    public function index(string $locale): View
    {
        $page = Entry::query()
            ->where('collection', 'pages')
            ->where('slug', 'blog')
            ->first();
        $entries = Entry::query()
            ->where('collection', 'pages')
            ->where('parent', '=', $page->id)
            ->where('published', '=', true)
            ->orderBy('publication', 'desc')
            ->limit(12)
            //->take(10)
            ->get();

        return view('blog.index', ['entries' => $entries, 'page' => $page]);
    }
}
