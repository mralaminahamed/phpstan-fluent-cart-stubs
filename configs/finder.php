<?php
/**
 * Which Fluent Cart files to read.
 *
 * Fluent Cart is an e-commerce plugin whose models, helpers and modules are reached through its own container, so a plugin building on it has nothing for static analysis to resolve without stubs.
 */

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/fluent-cart/app',
        'source/fluent-cart/boot',
        'source/fluent-cart/api',
        // Namespaced into FluentCart\Framework rather than left under its own vendor
        // namespace, so it is part of Fluent Cart's own API surface and has no separate
        // stub package. Without it every model inherits from a class that does not exist
        // here, and `Order::query()` — which resolves through the base model's
        // __callStatic — reads as a call to an undefined static method.
        'source/fluent-cart/vendor/wpfluent/framework/src',
    ) )
    ->append(
        Finder::create()
            ->in( array( 'source/fluent-cart' ) )
            ->files()
            ->depth( '< 1' )
            ->path( 'fluent-cart.php' )
    )
    ->sortByName( true )
;
