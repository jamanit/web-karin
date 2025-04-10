@if ($paginator->hasPages())
    <div class="mt-8 grid grid-cols-1 md:grid-cols-12">
        <div class="text-center md:col-span-12">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center -space-x-px">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li>
                            <span class="inline-flex h-[40px] w-[40px] items-center justify-center rounded-s-3xl border border-gray-100 bg-white text-slate-400 dark:border-gray-800 dark:bg-slate-800">
                                <i class="uil uil-angle-left text-[20px] rtl:-mt-1 rtl:rotate-180"></i>
                            </span>
                        </li>
                    @else
                        <li>
                            <a
                                href="{{ $paginator->previousPageUrl() }}"
                                class="hover:!border-{{ $primary_color }}-500 dark:hover:!border-{{ $primary_color }}-500 hover:!bg-{{ $primary_color }}-500 dark:hover:!bg-{{ $primary_color }}-500 inline-flex h-[40px] w-[40px] items-center justify-center rounded-s-3xl border border-gray-100 bg-white text-slate-400 hover:!text-white dark:border-gray-800 dark:bg-slate-800"
                            >
                                <i class="uil uil-angle-left text-[20px] rtl:-mt-1 rtl:rotate-180"></i>
                            </a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li>
                                <span class="inline-flex h-[40px] w-[40px] items-center justify-center">
                                    {{ $element }}
                                </span>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li>
                                        <span class="bg-{{ $primary_color }}-500 border-{{ $primary_color }}-500 z-10 inline-flex h-[40px] w-[40px] items-center justify-center border text-white">
                                            {{ $page }}
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}" class="hover:!border-{{ $primary_color }}-500 dark:hover:!border-{{ $primary_color }}-500 hover:!bg-{{ $primary_color }}-500 dark:hover:!bg-{{ $primary_color }}-500 inline-flex h-[40px] w-[40px] items-center justify-center border border-gray-100 bg-white text-slate-400 hover:!text-white dark:border-gray-800 dark:bg-slate-800">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}

                    @if ($paginator->hasMorePages())
                        <li>
                            <a
                                href="{{ $paginator->nextPageUrl() }}"
                                class="hover:!border-{{ $primary_color }}-500 dark:hover:!border-{{ $primary_color }}-500 hover:!bg-{{ $primary_color }}-500 dark:hover:!bg-{{ $primary_color }}-500 inline-flex h-[40px] w-[40px] items-center justify-center rounded-e-3xl border border-gray-100 bg-white text-slate-400 hover:!text-white dark:border-gray-800 dark:bg-slate-800"
                            >
                                <i class="uil uil-angle-right text-[20px] rtl:-mt-1 rtl:rotate-180"></i>
                            </a>
                        </li>
                    @else
                        <li>
                            <span class="inline-flex h-[40px] w-[40px] items-center justify-center rounded-e-3xl border border-gray-100 bg-white text-slate-400 dark:border-gray-800 dark:bg-slate-800">
                                <i class="uil uil-angle-right text-[20px] rtl:-mt-1 rtl:rotate-180"></i>
                            </span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endif
