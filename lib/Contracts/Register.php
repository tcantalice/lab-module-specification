<?php

namespace Lab\Specification\Module\Contracts;

/**
 * @version 1.0
 * @author Tarcisio Cantalice <tarcisiocantalice@gmail.com>
 */
interface Register
{
    public function registerService(string $contract, string $implementation): void;

    public function unregisterService(string $contract): void;

    public function resolve(string $contract): void;
}