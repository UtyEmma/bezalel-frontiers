<?php

namespace App\Filament\Pages\PageContent;

use Filament\Pages\Page;

class AboutUs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationGroup = 'Pages';



    protected static string $view = 'filament.pages.pages.about-us';


}
