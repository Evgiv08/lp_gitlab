<div class="account-admin-pagination-wrapper">
    <div class="account-admin-pagination">
        @if( $statuses->onFirstPage())
            <a class="active" href="#">{{ $statuses->currentPage() }}</a>
        @else
            <a href="{{ Request::url() }}?page=1"><<</a>
            <a href="{{ $statuses->previousPageUrl() }}"><</a>
            <a class="active" href="#">{{ $statuses->currentPage() }}</a>
        @endif

        @if( $statuses->hasMorePages() )
            <a href="{{ $statuses->nextPageUrl() }}">></a>
            <a href="{{ Request::url() }}?page={{ $statuses->lastPage() }}">>></a>
        @endif
    </div>
</div>
