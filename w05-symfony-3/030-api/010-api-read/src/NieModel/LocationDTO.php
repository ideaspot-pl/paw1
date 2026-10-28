<?php

declare(strict_types=1);

namespace App\Model;

class LocationDTO implements \JsonSerializable {
    public function __construct(
        public string $name,
        public string $country,
        public float $latitude,
        public float $longitude,
    )
    {
    }

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'country' => $this->country,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}
