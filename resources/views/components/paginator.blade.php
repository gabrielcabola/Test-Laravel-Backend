
@if ($items->hasPages())
    Showing {{ $items->count() }} of {{ $items->total() }}
    @if ($items->onFirstPage())
        <li class="disabled"><span>← Previous</span></li>
    @else
        <li><a href="{{ $items->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif
    Page {{ $items->currentpage() }} / {{ $items->lastPage()   }}

    @if ($items->hasMorePages())
        <li><a href="{{ $items->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
        <li class="disabled"><span>Next →</span></li>
    @endif
@endif
