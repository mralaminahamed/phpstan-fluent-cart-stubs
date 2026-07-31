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
