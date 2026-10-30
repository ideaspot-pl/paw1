<?php

declare(strict_types=1);

namespace App\Model;

use App\Entity\Measurement;

class WeatherResponseDTO implements \JsonSerializable {
    public function __construct(
        public bool $success,
        public string $name,
        public LocationDTO $location,
        /** @var array<MeasurementDTO> */
        public array $measurements,
    )
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'success' => $this->success,
            'query' => [
                'name' => $this->name,
            ],
            'location' => $this->location->jsonSerialize(),
            'measurements' => array_map(fn(MeasurementDTO $m) => $m->jsonSerialize(), $this->measurements),
        ];
    }
}
