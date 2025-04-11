
    {{-- ページネーション --}}
    @if ($paginator->hasPages())
        <nav role="navigation" class="flex items-center space-x-1">
            {{-- 前のページ --}}
            @if ($paginator->onFirstPage())
                <span class="text-gray-400 px-2">&lt;</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-2 text-gray-700 hover:text-blue-500">&lt;</a>
            @endif

            {{-- ページ番号 --}}
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-1 text-white bg-blue-600 rounded">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-1 text-gray-700 hover:text-blue-600">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- 次のページ --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-2 text-gray-700 hover:text-blue-500">&gt;</a>
            @else
                <span class="text-gray-400 px-2">&gt;</span>
            @endif
        </nav>
    @endif
</div>
