<?php

namespace App\Forms\Components;

use App\Enums\Pages;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Route;

class SelectRoute extends Select {

    protected function setUp() : void {
        parent::setUp();
        $this->options = Pages::routes();
    }



}
