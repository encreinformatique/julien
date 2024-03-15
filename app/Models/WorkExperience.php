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

final class WorkExperience
{
    private string $jobTitle;
    private ?string $location = null;
    private int $from;
    private ?int $until;
    private array $feats;

    public function __construct(
        string $title,
        array $feats,
        int $from,
        ?int $until = null,
        ?string $location = null
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

    public function getFrom(): int
    {
        return $this->from;
    }

    public function getUntil(): ?int
    {
        return $this->until;
    }

    public function getFeats(): array
    {
        return $this->feats;
    }
}
