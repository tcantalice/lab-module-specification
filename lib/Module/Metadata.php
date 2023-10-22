<?php

namespace Lab\Specification\Module;

class Metadata
{
    private string $identifier;

    private string $name;

    private string $version;

    protected function __construct()
    {
    }

    /**
     * @return Metadata
     */
    public static function make(): Metadata
    {
        return new Metadata();
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
}