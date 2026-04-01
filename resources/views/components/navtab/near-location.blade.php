@props([
    'tabs' => [] // format: [['id'=>'kampus','label'=>'Kampus','items'=>[]]]
])

<div class="space-y-4 pt-2" data-tab-container>
    <!-- Nav Tabs -->
    <div class="overflow-x-auto hide-scrollbar">
        <div class="flex gap-2 w-max">
            @foreach ($tabs as $index => $tab)
                <button
                    type="button"
                    data-tab-btn="{{ $tab['id'] }}"
                    class="tab-btn px-3 py-1.5 text-sm border rounded-full whitespace-nowrap transition-all duration-200
                        {{ $index === 0 
                            ? 'bg-white border-gray-900 text-primary' 
                            : 'bg-gray-50 border-gray-300 text-secondary' }}">
                    {{ $tab['label'] }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- TAB CONTENT -->
    <div class="pt-4">
        @foreach ($tabs as $index => $tab)
            <div
                data-tab-content="{{ $tab['id'] }}"
                class="tab-content space-y-3 {{ $index !== 0 ? 'hidden' : '' }}"
            >
                @foreach ($tab['items'] as $item)
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                            <i class="text-secondary fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <p class="font-medium text-primary">{{ $item['title'] }}</p>
                            <p class="text-sm text-secondary">{{ $item['distance'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>