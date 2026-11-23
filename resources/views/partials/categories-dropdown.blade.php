@php
    // ======================================================================
    // MANUAL IMAGE SETUP:
    // To add an image manually, replace the empty '' with your image path:
    // e.g. 'image' => 'images/categories/fashion.png'
    // Leaving 'image' => '' displays the circular checkerboard pattern from the design.
    // ======================================================================

    // SHOP - Row 1
    $shopRow1 = [
        ['name' => 'Fashion', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Electronics', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Groceries', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Travel', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Home & Kitchen', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Beauty', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Baby & Kids', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Fine Dine', 'image' => '', 'route' => route('home') . '#categories'],
    ];

    // SHOP - Row 2
    $shopRow2 = [
        ['name' => 'Fashion', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Electronics', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Groceries', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Travel', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Home & Kitchen', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Beauty', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Baby & Kids', 'image' => '', 'route' => route('home') . '#categories'],
        ['name' => 'Fine Dine', 'image' => '', 'route' => route('home') . '#categories'],
    ];

    // SERVICES - Row 3
    $servicesRow = [
        ['name' => 'AC Service', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Yoga', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Advocate', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Dry Cleaning', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Insurance', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Plumber', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Tax Lawyer', 'image' => '', 'route' => route('home') . '#services'],
        ['name' => 'Advertising', 'image' => '', 'route' => route('home') . '#services'],
    ];
@endphp

<div class="dropdown-cat-inner">
    <!-- Section 1: SHOP -->
    <div class="dropdown-cat-section">
        <div class="dropdown-cat-section-title">SHOP</div>
        
        <!-- Row 1 -->
        <div class="dropdown-cat-grid" style="margin-bottom: 20px;">
            @foreach($shopRow1 as $item)
                <a href="{{ $item['route'] }}" class="cat-drop-item" aria-label="{{ $item['name'] }}">
                    <div class="cat-drop-icon-wrap">
                        @if(!empty($item['image']))
                            <img src="{{ str_starts_with($item['image'], 'http') ? $item['image'] : asset($item['image']) }}" 
                                 alt="{{ $item['name'] }}" 
                                 class="cat-drop-img"
                                 onerror="this.style.display='none';">
                        @endif
                    </div>
                    <span class="cat-drop-label">{!! $item['name'] === 'Home & Kitchen' ? 'Home &<br>Kitchen' : e($item['name']) !!}</span>
                </a>
            @endforeach
        </div>

        <!-- Row 2 -->
        <div class="dropdown-cat-grid">
            @foreach($shopRow2 as $item)
                <a href="{{ $item['route'] }}" class="cat-drop-item" aria-label="{{ $item['name'] }}">
                    <div class="cat-drop-icon-wrap">
                        @if(!empty($item['image']))
                            <img src="{{ str_starts_with($item['image'], 'http') ? $item['image'] : asset($item['image']) }}" 
                                 alt="{{ $item['name'] }}" 
                                 class="cat-drop-img"
                                 onerror="this.style.display='none';">
                        @endif
                    </div>
                    <span class="cat-drop-label">{!! $item['name'] === 'Home & Kitchen' ? 'Home &<br>Kitchen' : e($item['name']) !!}</span>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Section 2: SERVICES -->
    <div class="dropdown-cat-section dropdown-cat-section-services">
        <div class="dropdown-cat-section-title">SERVICES</div>
        
        <!-- Row 3 -->
        <div class="dropdown-cat-grid">
            @foreach($servicesRow as $item)
                <a href="{{ $item['route'] }}" class="cat-drop-item" aria-label="{{ $item['name'] }}">
                    <div class="cat-drop-icon-wrap">
                        @if(!empty($item['image']))
                            <img src="{{ str_starts_with($item['image'], 'http') ? $item['image'] : asset($item['image']) }}" 
                                 alt="{{ $item['name'] }}" 
                                 class="cat-drop-img"
                                 onerror="this.style.display='none';">
                        @endif
                    </div>
                    <span class="cat-drop-label">{{ $item['name'] }}</span>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Section 3: Bottom Footer -->
    <div class="dropdown-cat-footer">
        <a href="{{ route('home') }}#categories" class="dropdown-cat-view-all">
            <span>View all categories</span>
            <span class="view-all-arrow" aria-hidden="true">&rarr;</span>
        </a>
    </div>
</div>

