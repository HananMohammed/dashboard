@if ($paginator->hasPages())
    <div class="col-12 m-auto text-center d-flex justify-content-center" >
    <ul class="page-pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
{{--            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--            </li>--}}
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
        @else
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--            </li>--}}
            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))

                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
{{--                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>--}}
                        <li class="active"><a href="#" aria-current="page">{{ $page }}</a></li>
                    @else
{{--                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
{{--            <li class= " " >--}}
{{--                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--            </li>--}}
                                    <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
        @else
{{--            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--            </li>--}}
            <li class="disabled"><a ><i class="fa fa-angle-right"></i></a></li>
        @endif
    </ul>
    </div>
@endif
