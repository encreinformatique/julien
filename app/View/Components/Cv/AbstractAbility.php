<?php
/**
 * @package App\View\Components
 * @author Julien Devergnies <j.devergnies@tousleshoraires.fr>
 * @date   11/3/24
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\View\Components\Cv;

use Illuminate\View\Component;

abstract class AbstractAbility extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $ability,
        public string $details,
        public string $rate
    ) {
    }
}
