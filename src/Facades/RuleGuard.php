<?php

namespace Holdmyglass\RuleGuard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Holdmyglass\RuleGuard\RuleGuard
 */
class RuleGuard extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Holdmyglass\RuleGuard\RuleGuard::class;
    }
}
