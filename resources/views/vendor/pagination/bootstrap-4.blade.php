@if ($paginator->hasPages())
    <nav class="pagination" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous" title="This is the first page" disabled>Anterior</a>
        @else
            <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Anterior</a>
        @endif
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                Siguiente página
            </a>
        @else
            <a class="pagination-next" disabled>
                Siguiente página
            </a>
        @endif
        <ul class="pagination-list">

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true">
                        <a class="pagination-link is-current" aria-current="page">
                            {{ $element }}
                        </a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li >
                                <a class="pagination-link is-current " >{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a class="pagination-link " href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach


        </ul>
    </nav>
@endif
