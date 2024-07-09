@if ($page->render('sections', $section))
    {{$content}}
@else
    {{ $default }}
@endif