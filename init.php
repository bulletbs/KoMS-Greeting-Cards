<?php defined('SYSPATH') or die('No direct script access.');

if(!Route::cache()){
    Route::set('cards', 'cards(/<action>(/<id>))', array('action'=>'(card|sended)', 'alias'=>'[\w\d_\-]+', 'id'=>'\d+'))
        ->defaults(array(
            'controller' => 'cards',
            'action' => 'index',
        ));
    Route::set('cards_main', 'cards(/p<page>)', array('page'=>'\d+'))
        ->defaults(array(
            'controller' => 'cards',
            'action' => 'index',
        ));
    Route::set('cards_category', 'cards/<alias>(/p<page>)', array('alias'=>'[\w\d_\-]+', 'page'=>'\d+'))
        ->defaults(array(
            'controller' => 'cards',
            'action' => 'index',
        ));
    Route::set('card_receive', 'cards/receive/<key>', array('key'=>'[\w\d]+'))
        ->defaults(array(
            'controller' => 'cards',
            'action' => 'receive',
        ));
}