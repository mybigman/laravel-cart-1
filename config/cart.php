<?php

return [
    
    'store_in_database'     => true,
    'default_auth_guard'    => 'web',
    'default_cart_instance' => 'default',
    'allow_zero_price'      => false,
    'session_root_key'      => 'cart-bags',
    /*
    |--------------------------------------------------------------------------
    | Shoppingcart database settings
    |--------------------------------------------------------------------------
    |
    | Here you can set the connection that the shoppingcart should use when
    | storing and restoring a cart.
    |
    */
    
    'database' => [
        
        'connection' => null,
        
        'table' => 'laravel-cart',
    
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Destroy the cart on user logout
    |--------------------------------------------------------------------------
    |
    | When this option is set to 'true' the cart will automatically
    | destroy all cart instances when the user logs out.
    |
    */
    
    'destroy_on_logout' => false,
    
    /*
    |--------------------------------------------------------------------------
    | Default number format
    |--------------------------------------------------------------------------
    |
    | This defaults will be used for the formated numbers if you don't
    | set them in the method call.
    |
    */
    
    'format' => [
        
        'decimals' => 0,
        
        'decimal_point' => '.',
        
        'thousand_separator' => ' ',
    ],

];