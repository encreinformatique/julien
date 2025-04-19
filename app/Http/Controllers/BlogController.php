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

use App\Models\Post;
use Illuminate\View\View;

final class BlogController extends Controller
{
    public function __invoke(string $locale, string $slug): View
    {
        $article = Post::find(1)->translations()->where('slug', $slug)->where('locale', $locale)->firstOrFail();
        $content = $article->body;
        $content = str_replace('<a ', '<a class="text-sky-600 hover:text-sky-400 hover:underline" ', $content);
        $content = str_replace('<p>', '<p class="my-3 text-lg text-justify">', $content);
        $content = str_replace('<code>', '<code class="whitespace-pre text-green-800">', $content);

        return view('blog.detail', [
            'locale' => $locale,
            'slug' => $slug,
            'article' => $article,
            'content' => $content,
        ]);
    }
}
