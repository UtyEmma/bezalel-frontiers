<?php

namespace App\Filament\Pages\PageContent;

use Filament\Pages\Page;

class Home extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.pages.home';

    protected static ?string $navigationGroup = 'Pages';
}
