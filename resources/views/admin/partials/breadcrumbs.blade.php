@unless ($breadcrumbs->isEmpty())
<ol class="flex p-4 bg-gray-100 rounded">
    @foreach ($breadcrumbs as $breadcrumb)
        @if ($breadcrumb->url && !$loop->last)
            <li class="breadcrumb-item mr-2"><a href="{{ $breadcrumb->url }}" class="text-blue-500">{{ $breadcrumb->title }}</a></li>
        @else
            <li class="breadcrumb-item text-gray-500">{{ $breadcrumb->title }}</li>
        @endif
    @endforeach
</ol>

@endunless
