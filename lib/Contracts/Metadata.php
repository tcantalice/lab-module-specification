<?php

namespace Lab\Specification\Module\Contracts;

/**
 * Contrato dos metadados do módulo
 *
 * @version 1.0
 * @author Tarcisio Cantalice <tarcisiocantalice@gmail.com>
 */
interface Metadata
{
    /**
     * Identificação única do módulo. Cada módulo deve possuir essa identificação que
     * irá diferenciar dos demais durante a instalação.
     *
     * @return string
     */
    public function getIdentifier(): string;

    /**
     * @return string
     */
    public function getVersion(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string[]
     */
    public function providedServices(): array;
}