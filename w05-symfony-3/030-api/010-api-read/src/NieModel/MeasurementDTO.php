<?php

declare(strict_types=1);

namespace App\Model;

class MeasurementDTO implements \JsonSerializable {
    public function __construct(
        public string $date,
        public int $celsius,
    )
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'date' => $this->date,
            'celsius' => $this->celsius,
        ];
    }
}
