<?php

namespace Lab\Specification\Module\Contracts;
interface Register
{
    function registerKeyValue($key, $value): void;

    function registerClass($abstract, $class): void;

    function registerFactory($abstract, $factory): void;

    function resolve($abstract): mixed;
}