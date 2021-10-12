<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
@if (Request::is('/'))
    <a class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>
@else
    <a href="{{ url('/') }}"
       class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
@endif
@if (Request::is('articles'))
    <a class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Articles</a>
@else
    <a href="{{ url('articles/') }}"
       class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Articles</a>
@endif
