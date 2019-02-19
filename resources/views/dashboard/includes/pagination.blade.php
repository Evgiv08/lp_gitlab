<div class="account-admin-pagination-wrapper">
    <div class="account-admin-pagination">
        @if( $charities->onFirstPage())
            <a class="active" href="#">{{ $charities->currentPage() }}</a>
        @else
            <a href="{{ Request::url() }}?page=1"><<</a>
            <a href="{{ $charities->previousPageUrl() }}"><</a>
            <a class="active" href="#">{{ $charities->currentPage() }}</a>
        @endif

        @if( $charities->hasMorePages() )
            <a href="{{ $charities->nextPageUrl() }}">></a>
            <a href="{{ Request::url() }}?page={{ $charities->lastPage() }}">>></a>
        @endif
    </div>
</div>
