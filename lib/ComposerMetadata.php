<?php

namespace Lab\Specification\Module;

use Lab\Specification\Module\Contracts\Metadata as Contract;
use Nadar\PhpComposerReader\ComposerReader;

final class ComposerMetadata extends BasicMetadata
{
    public function __construct(
        string $file,
        string $name,
        array $provided,
    ) {
        $reader = new ComposerReader($file);

        $cantRead = !$reader->canRead();

        if ($cantRead) {
            throw new \Exception(); // TODO: Alterar para uma exception mais específica
        }

        parent::__construct(
            $reader->contentSection('name'),
            $name,
            $reader->contentSection('version'),
            $provided
        );
    }
}