<?php

namespace Lab\Specification\Module;

use Lab\Specification\Module\Contracts\Metadata;

class BasicMetadata implements Metadata
{
    public function __construct(
        private string $identifier,
        private string $name,
        private string $version,
        private array $provided
    ) {
        //
    }

    function getIdentifier(): string
    {
        return $this->identifier;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getVersion(): string
    {
        return $this->version;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->getIdentifier(),
            "name" => $this->getName(),
            "version" => $this->getVersion(),
        ];
    }

    public function providedServices(): array
    {
        return $this->provided;
    }
}