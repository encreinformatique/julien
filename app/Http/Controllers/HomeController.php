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

use Illuminate\Support\Facades\App;
use Illuminate\View\View;

final class HomeController extends Controller
{
    public function __invoke(string $locale): View
    {
        if (! in_array($locale, ['en', 'es', 'fr'])) {
            abort(400);
        }

        App::setLocale($locale);

        return view('welcome');
    }
}
