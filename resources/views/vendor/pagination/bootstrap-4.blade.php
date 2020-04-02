@if ($paginator->hasPages())
<ul class="pagination-blog">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li >
            <a>
                <i class="fas fa-angle-left"></i>
            </a>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}">
                <i class="fas fa-angle-left"></i>
            </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li><a>{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li><a class="active">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}">
                <i class="fas fa-angle-right"></i>
            </a>
        </li>
    @else
        <li>
            <a>
                <i class="fas fa-angle-right"></i>
            </a>
        </li>
    @endif
</ul>
@endif
