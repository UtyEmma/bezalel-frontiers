<?php

namespace App\Filament\Pages\PageContent;

use App\Enums\Pages;
use App\Forms\Components\SelectRoute;
use App\Models\Content;
use Filament\Forms\Components;
use Filament\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\HtmlString;

class AboutUs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Pages';
    protected static string $view = 'filament.pages.pages.about-us';

    public ?array $data = [];

    public ?Content $page;

    public $pages = Pages::ABOUT;

    function mount(){     
        if(!$this->page = Content::wherePage($this->pages)->first()){
            $this->page = Content::create([
                'page' => $this->pages
            ]);
        } 

        $this->form->fill($this->page->content);
    }

    protected function getHeaderActions(): array {
        return [
            Action::make('visit_page')
                ->icon('heroicon-o-computer-desktop')
                ->url(route('home')),
        ];
    }

    function form(Form $form) : Form{
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('meta_tags'),
                Textarea::make('meta_description'),
                Builder::make('sections')
                    ->label('Page Sections')
                    ->blocks([
                        Block::make('mission_section')
                            ->schema([
                                Textarea::make('our_mission'),
                                Textarea::make('our_vision'),
                            ]),
                        Block::make('about_section')
                            ->schema([
                                Grid::make()
                                    ->columns(2)
                                    ->schema([
                                        FileUpload::make('main_image')
                                            ->image(),
                                        FileUpload::make('inner_image')
                                            ->image(),
                                    ]),
                                TextInput::make('caption')
                                    ->label('Top Caption'),
                                TextInput::make('title')
                                    ->helperText(new HtmlString("To empasize a text, wrap it as follows <code>**text**</code>.")),
                                RichEditor::make('description'),
                                TagsInput::make('corevalues'),
                                Grid::make()
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('button_text'),
                                        SelectRoute::make('button_link')
                                            ->searchable()
                                    ]),
                                Toggle::make('status')
                                    ->label('Display Status')
                                    ->default(true)
                            ]),
                        Block::make('manager_section')
                            ->schema([
                                TextInput::make('title'),
                                RichEditor::make('description'),
                                TextInput::make('name')
                                    ->label("Manager's Name"),
                                TextInput::make('position'),
                                Toggle::make('status')
                                    ->label('Display Status')
                                    ->default(true)
                            ]),
                        
                    ])
                    ->addable(false)
                    ->reorderable(false)
                    ->deletable(false)
                    ->collapsible()
                    ->deleteAction(fn (Components\Actions\Action $action) => $action->requiresConfirmation(),)
            ])
            ->statePath('data');
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        if(!isset($this->page)) {
            $this->page = new Content([
                'page' => $this->pages
            ]);
        }

        $this->page->content = $state;
        $this->page->save();
       
        Notification::make()->success()
            ->title('Page Updated Successfully')->send();
    }


}
