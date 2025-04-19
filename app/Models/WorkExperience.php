<?php
/**
 * @package App\Models
 * @author Julien Devergnies <j.devergnies@tousleshoraires.fr>
 * @date   11/3/24
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Models;

use DateTime;

final class WorkExperience
{
    private string $jobTitle;
    private ?string $location = null;
    private DateTime $from;
    private ?DateTime $until;
    private array $feats;

    public function __construct(
        string $title,
        array $feats,
        DateTime $from,
        ?DateTime $until = null,
        ?string $location = null,
        private array $stack = []
    ) {
        $this->jobTitle = $title;
        $this->location = $location;
        $this->from = $from;
        $this->until = $until;
        $this->feats = $feats;
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function getFrom(): DateTime
    {
        return $this->from;
    }

    public function getUntil(): ?DateTime
    {
        return $this->until;
    }

    public function getFeats(): array
    {
        return $this->feats;
    }

    public function getStack(): array
    {
        return $this->stack;
    }
}
