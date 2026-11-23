<?php
/**
 * Zoogol Category Wheel — self-contained PHP partial.
 *
 * Plain PHP + CSS + vanilla JS. No React, Tailwind, build step or icon library.
 *
 * Usage (anywhere in a PHP page):
 *
 *   <?php require_once __DIR__ . '/category-wheel.php'; ?>
 *   <?php zgw_render(); ?>                          // Grocery active by default
 *   <?php zgw_render(['default_index' => 0]); ?>    // start on Online shopping
 *
 * Load the fonts once in your <head> (or swap for your own):
 *   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;600;700;800&display=swap">
 *
 * Every rendered wheel fires a DOM event when the category changes:
 *   el.addEventListener('zgw:change', e => console.log(e.detail.index, e.detail.id));
 *
 * Several wheels can live on one page; CSS and JS are printed only once.
 */

/* ======================================================================
 * 1. Geometry — every value is px inside the fixed 752×752 dial.
 *    Angles in degrees, 0° = 3 o'clock, increasing clockwise.
 * ==================================================================== */

const ZGW_SIZE    = 752;
const ZGW_C       = 376;      // dial centre
const ZGW_COUNT   = 10;
const ZGW_STEP    = 36;       // 360 / COUNT

const ZGW_R_OUT   = 344;      // outer edge of a segment
const ZGW_R_IN    = 248;      // inner edge of a segment
const ZGW_GAP     = 14;       // constant-width gap between segments
const ZGW_CORNER  = 10;       // corner rounding (round-join stroke)
const ZGW_POP     = 14;       // how far the active segment slides outwards

const ZGW_R_TRACK = 238;      // neumorphic track
const ZGW_R_DISC  = 198;      // centre disc
const ZGW_R_ARC   = 218;      // indicator arc
const ZGW_ARC_W   = 12;
const ZGW_R_ORBIT = 368;      // dotted orbit

const ZGW_BLEED   = 64;       // room around the dial for floating items
const ZGW_STAGE   = 880;      // SIZE + BLEED * 2

function zgw_angle_for(int $i): float { return -90 + $i * ZGW_STEP; }

function zgw_polar(float $r, float $deg): array {
    $a = deg2rad($deg);
    return ['x' => ZGW_C + $r * cos($a), 'y' => ZGW_C + $r * sin($a)];
}

function zgw_outward(float $deg, float $dist): array {
    $a = deg2rad($deg);
    return ['x' => cos($a) * $dist, 'y' => sin($a) * $dist];
}

function zgw_n(float $v): string { return rtrim(rtrim(number_format($v, 2, '.', ''), '0'), '.'); }

/**
 * Annular-sector path for segment $i. The gap has parallel edges (constant
 * width), so the angular inset is computed per radius. The path is shrunk by
 * CORNER/2; a round-join stroke of width CORNER grows it back with soft corners.
 */
function zgw_segment_path(int $i): string {
    $a     = zgw_angle_for($i);
    $half  = ZGW_STEP / 2;
    $inset = ZGW_CORNER / 2;
    $rOut  = ZGW_R_OUT - $inset;
    $rIn   = ZGW_R_IN + $inset;
    $g     = ZGW_GAP / 2 + $inset;
    $dOut  = rad2deg($g / $rOut);
    $dIn   = rad2deg($g / $rIn);

    $o1 = zgw_polar($rOut, $a - $half + $dOut);
    $o2 = zgw_polar($rOut, $a + $half - $dOut);
    $i2 = zgw_polar($rIn,  $a + $half - $dIn);
    $i1 = zgw_polar($rIn,  $a - $half + $dIn);

    return sprintf(
        'M%s %s A%s %s 0 0 1 %s %s L%s %s A%s %s 0 0 0 %s %s Z',
        zgw_n($o1['x']), zgw_n($o1['y']), $rOut, $rOut, zgw_n($o2['x']), zgw_n($o2['y']),
        zgw_n($i2['x']), zgw_n($i2['y']), $rIn, $rIn, zgw_n($i1['x']), zgw_n($i1['y'])
    );
}

/** Indicator arc: one segment wide on its own radius, minus gap and round caps. */
function zgw_arc(): array {
    $span = ZGW_STEP - rad2deg(ZGW_GAP / ZGW_R_ARC) - rad2deg(ZGW_ARC_W / ZGW_R_ARC);
    return [
        'span' => $span,
        'len'  => deg2rad($span) * ZGW_R_ARC,
        'circ' => 2 * M_PI * ZGW_R_ARC,
    ];
}

/* ======================================================================
 * 2. Icons — lucide (ISC licence), 24×24, stroke = currentColor.
 * ==================================================================== */

function zgw_icon(string $name, string $class = 'zgw-icon', string $style = ''): string {
    static $icons = [
        'shopping-bag' => '<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path>',
        'plane' => '<path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"></path>',
        'shopping-cart' => '<circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>',
        'shield-check' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path>',
        'smartphone' => '<rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path>',
        'dumbbell' => '<path d="M14.4 14.4 9.6 9.6"></path><path d="M18.657 21.485a2 2 0 1 1-2.829-2.828l-1.767 1.768a2 2 0 1 1-2.829-2.829l6.364-6.364a2 2 0 1 1 2.829 2.829l-1.768 1.767a2 2 0 1 1 2.828 2.829z"></path><path d="m21.5 21.5-1.4-1.4"></path><path d="M3.9 3.9 2.5 2.5"></path><path d="M6.404 12.768a2 2 0 1 1-2.829-2.829l1.768-1.767a2 2 0 1 1-2.828-2.829l2.828-2.828a2 2 0 1 1 2.829 2.828l1.767-1.768a2 2 0 1 1 2.829 2.829z"></path>',
        'graduation-cap' => '<path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>',
        'car' => '<path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path><circle cx="7" cy="17" r="2"></circle><path d="M9 17h6"></path><circle cx="17" cy="17" r="2"></circle>',
        'heart-pulse' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"></path>',
        'scissors' => '<circle cx="6" cy="6" r="3"></circle><path d="M8.12 8.12 12 12"></path><path d="M20 4 8.12 15.88"></path><circle cx="6" cy="18" r="3"></circle><path d="M14.8 14.8 20 20"></path>',
        'tag' => '<path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"></path><circle cx="7.5" cy="7.5" r=".5" fill="currentColor"></circle>',
        'globe-2' => '<path d="M21.54 15H17a2 2 0 0 0-2 2v4.54"></path><path d="M7 3.34V5a3 3 0 0 0 3 3a2 2 0 0 1 2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2c0-1.1.9-2 2-2h3.17"></path><path d="M11 21.95V18a2 2 0 0 0-2-2a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05"></path><circle cx="12" cy="12" r="10"></circle>',
        'umbrella' => '<path d="M22 12a10.06 10.06 1 0 0-20 0Z"></path><path d="M12 12v8a2 2 0 0 0 4 0"></path><path d="M12 2v1"></path>',
        'zap' => '<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>',
        'receipt' => '<path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><path d="M12 17.5v-11"></path>',
        'timer' => '<line x1="10" x2="14" y1="2" y2="2"></line><line x1="12" x2="15" y1="14" y2="11"></line><circle cx="12" cy="14" r="8"></circle>',
        'book-open' => '<path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>',
        'fuel' => '<line x1="3" x2="15" y1="22" y2="22"></line><line x1="4" x2="14" y1="9" y2="9"></line><path d="M14 22V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v18"></path><path d="M14 13h2a2 2 0 0 1 2 2v2a2 2 0 0 0 2 2a2 2 0 0 0 2-2V9.83a2 2 0 0 0-.59-1.42L18 5"></path>',
        'pill' => '<path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path><path d="m8.5 8.5 7 7"></path>',
        'sparkles' => '<path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path><path d="M20 3v4"></path><path d="M22 5h-4"></path><path d="M4 17v2"></path><path d="M5 18H3"></path>',
    ];
    $inner = $icons[$name] ?? '';
    return '<svg class="' . $class . '" style="' . $style . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
}

/* ======================================================================
 * 3. Content — edit categories, copy, colours and floating items here.
 *
 * Floating item spec:
 *   kind  coin | card | ticket | tile | orb | badge
 *   da    angle offset (deg) from the segment's centre angle
 *   r     distance from the dial centre (px)
 *   size  base size (px) for coin / tile / orb / badge
 *   tilt  resting rotation (deg)
 *   delay float-cycle phase offset (s)
 *   icon, from, to, dark   for tile / orb
 * ==================================================================== */

function zgw_categories(): array {
    return [
        [
            'id' => 'online-shopping', 'label' => 'Online shopping', 'icon' => 'shopping-bag',
            'stroke' => '#E8590C', 'fill' => '#FFB57A',
            'description' => 'Shop from 300+ websites and brands through Zoogol and earn extra cashback on every order.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'shopping-bag', 'from' => '#FFB347', 'to' => '#FF7A00', 'da' => -15, 'r' => 392, 'size' => 58, 'tilt' => -10, 'delay' => 0],
                ['kind' => 'tile', 'icon' => 'tag', 'from' => '#FF6FA0', 'to' => '#E5266B', 'da' => 14, 'r' => 396, 'size' => 46, 'tilt' => 12, 'delay' => 0.8],
                ['kind' => 'coin', 'da' => 1, 'r' => 418, 'size' => 34, 'tilt' => 8, 'delay' => 1.4],
            ],
        ],
        [
            'id' => 'travel', 'label' => 'Travel', 'icon' => 'plane',
            'stroke' => '#1E40AF', 'fill' => '#DCE8FF',
            'description' => 'Book flights, hotels and buses through Zoogol and earn cashback and rewards on every trip.',
            'assets' => [
                ['kind' => 'ticket', 'da' => -12, 'r' => 404, 'tilt' => -14, 'delay' => 0],
                ['kind' => 'orb', 'icon' => 'globe-2', 'from' => '#5AA9FF', 'to' => '#024AA3', 'da' => 15, 'r' => 392, 'size' => 56, 'tilt' => 0, 'delay' => 0.9],
            ],
        ],
        [
            'id' => 'grocery', 'label' => 'Grocery', 'icon' => 'shopping-cart',
            'stroke' => '#C2410C', 'fill' => '#FDBA74',
            'description' => 'Earn extra cashback and rewards on your everyday grocery runs, online or at local stores.',
            'assets' => [
                ['kind' => 'card', 'da' => -8, 'r' => 180, 'tilt' => -18, 'delay' => 0],
                ['kind' => 'coin', 'da' => -17, 'r' => 140, 'size' => 34, 'tilt' => -20, 'delay' => 1.1],
                ['kind' => 'coin', 'da' => -18, 'r' => 372, 'size' => 48, 'tilt' => -14, 'delay' => 0.3],
                ['kind' => 'coin', 'da' => -10, 'r' => 396, 'size' => 44, 'tilt' => 18, 'delay' => 1.6],
                ['kind' => 'coin', 'da' => -2, 'r' => 386, 'size' => 48, 'tilt' => -8, 'delay' => 0.8],
                ['kind' => 'coin', 'da' => 6, 'r' => 366, 'size' => 42, 'tilt' => 22, 'delay' => 2.1],
                ['kind' => 'coin', 'da' => 11, 'r' => 244, 'size' => 34, 'tilt' => -16, 'delay' => 1.3],
                ['kind' => 'coin', 'da' => 16, 'r' => 206, 'size' => 36, 'tilt' => 10, 'delay' => 0.5],
                ['kind' => 'badge', 'da' => -15, 'r' => 420, 'size' => 40, 'tilt' => 12, 'delay' => 1.8],
            ],
        ],
        [
            'id' => 'insurance', 'label' => 'Insurance', 'icon' => 'shield-check',
            'stroke' => '#B91C1C', 'fill' => '#FCA5A5',
            'description' => 'Buy or renew health, motor and life cover and get rewarded for protecting what matters.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'shield-check', 'from' => '#34D3B4', 'to' => '#0D9488', 'da' => -13, 'r' => 400, 'size' => 58, 'tilt' => -8, 'delay' => 0],
                ['kind' => 'orb', 'icon' => 'umbrella', 'from' => '#7FB6FF', 'to' => '#2563EB', 'da' => 15, 'r' => 392, 'size' => 46, 'tilt' => 10, 'delay' => 1],
            ],
        ],
        [
            'id' => 'bills', 'label' => 'Bills & recharges', 'icon' => 'smartphone',
            'stroke' => '#374151', 'fill' => '#E5E7EB',
            'description' => 'Pay electricity, broadband and mobile bills on time and earn on every single recharge.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'smartphone', 'from' => '#A78BFA', 'to' => '#6D28D9', 'da' => -14, 'r' => 398, 'size' => 56, 'tilt' => -10, 'delay' => 0],
                ['kind' => 'orb', 'icon' => 'zap', 'from' => '#FFE066', 'to' => '#F59E0B', 'da' => 14, 'r' => 390, 'size' => 44, 'tilt' => 0, 'delay' => 0.7],
                ['kind' => 'tile', 'icon' => 'receipt', 'from' => '#FFFFFF', 'to' => '#E9E3DD', 'dark' => true, 'da' => -24, 'r' => 400, 'size' => 38, 'tilt' => 12, 'delay' => 1.4],
            ],
        ],
        [
            'id' => 'fitness', 'label' => 'Fitness', 'icon' => 'dumbbell',
            'stroke' => '#374151', 'fill' => '#9CA3AF',
            'description' => 'Gym memberships, classes and gear. Keep moving and earn cashback while you do it.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'dumbbell', 'from' => '#4B4B4B', 'to' => '#1F1E1E', 'da' => -14, 'r' => 398, 'size' => 58, 'tilt' => -16, 'delay' => 0],
                ['kind' => 'orb', 'icon' => 'timer', 'from' => '#FFB347', 'to' => '#FF7A00', 'da' => 15, 'r' => 394, 'size' => 50, 'tilt' => 8, 'delay' => 0.8],
            ],
        ],
        [
            'id' => 'education', 'label' => 'Education', 'icon' => 'graduation-cap',
            'stroke' => '#1F2937', 'fill' => '#6B7280',
            'description' => 'Courses, tuition and books. Invest in learning and earn lifetime rewards back on it.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'graduation-cap', 'from' => '#3B82F6', 'to' => '#024AA3', 'da' => -14, 'r' => 398, 'size' => 58, 'tilt' => -10, 'delay' => 0],
                ['kind' => 'tile', 'icon' => 'book-open', 'from' => '#FFB347', 'to' => '#FF7A00', 'da' => 14, 'r' => 394, 'size' => 46, 'tilt' => 12, 'delay' => 0.9],
            ],
        ],
        [
            'id' => 'automobile', 'label' => 'Automobile', 'icon' => 'car',
            'stroke' => '#C2410C', 'fill' => '#FDBA74',
            'description' => 'Fuel, servicing and accessories for your ride, with cashback on every kilometre you drive.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'car', 'from' => '#FF6B6B', 'to' => '#DC2626', 'da' => -13, 'r' => 400, 'size' => 58, 'tilt' => -8, 'delay' => 0],
                ['kind' => 'orb', 'icon' => 'fuel', 'from' => '#4ADE80', 'to' => '#15803D', 'da' => 15, 'r' => 392, 'size' => 46, 'tilt' => 6, 'delay' => 1],
            ],
        ],
        [
            'id' => 'health', 'label' => 'Health', 'icon' => 'heart-pulse',
            'stroke' => '#B91C1C', 'fill' => '#FCA5A5',
            'description' => 'Pharmacy orders, lab tests and doctor visits that pay you back while you take care of you.',
            'assets' => [
                ['kind' => 'orb', 'icon' => 'heart-pulse', 'from' => '#FF7A90', 'to' => '#E11D48', 'da' => -14, 'r' => 396, 'size' => 56, 'tilt' => 0, 'delay' => 0],
                ['kind' => 'tile', 'icon' => 'pill', 'from' => '#FFFFFF', 'to' => '#E9E3DD', 'dark' => true, 'da' => 14, 'r' => 396, 'size' => 46, 'tilt' => -14, 'delay' => 0.8],
            ],
        ],
        [
            'id' => 'salon', 'label' => 'Salon', 'icon' => 'scissors',
            'stroke' => '#C2410C', 'fill' => '#FECACA',
            'description' => 'Haircuts, spa days and grooming at partner salons, with rewards on every single visit.',
            'assets' => [
                ['kind' => 'tile', 'icon' => 'scissors', 'from' => '#F472B6', 'to' => '#BE185D', 'da' => -14, 'r' => 398, 'size' => 56, 'tilt' => -12, 'delay' => 0],
                ['kind' => 'orb', 'icon' => 'sparkles', 'from' => '#FFE066', 'to' => '#F59E0B', 'da' => 15, 'r' => 392, 'size' => 44, 'tilt' => 0, 'delay' => 0.7],
            ],
        ],
    ];
}

/** Ambient decorations, in STAGE px (880×880, dial centre at 440,440). */
function zgw_decorations(): array {
    return [
        ['type' => 'pill',  'x' => 150, 'y' => 128, 'rot' => -12, 'delay' => 0],
        ['type' => 'pill',  'x' => 730, 'y' => 102, 'rot' => 10,  'delay' => 1.2],
        ['type' => 'pill',  'x' => 726, 'y' => 790, 'rot' => 6,   'delay' => 2.1],
        ['type' => 'pct',   'x' => 230, 'y' => 84,  'size' => 28, 'delay' => 0.4],
        ['type' => 'pct',   'x' => 752, 'y' => 176, 'size' => 28, 'delay' => 1.6],
        ['type' => 'pct',   'x' => 92,  'y' => 676, 'size' => 28, 'delay' => 0.9],
        ['type' => 'pct',   'x' => 760, 'y' => 718, 'size' => 28, 'delay' => 2.4],
        ['type' => 'spark', 'x' => 640, 'y' => 64,  'size' => 26, 'color' => '#FF9A1F', 'delay' => 0.6],
        ['type' => 'spark', 'x' => 96,  'y' => 218, 'size' => 26, 'color' => '#E07A5F', 'delay' => 1.4],
        ['type' => 'spark', 'x' => 130, 'y' => 724, 'size' => 18, 'color' => '#FF9A1F', 'delay' => 2.2],
        ['type' => 'spark', 'x' => 642, 'y' => 826, 'size' => 24, 'color' => '#FF9A1F', 'delay' => 0.2],
        ['type' => 'spark', 'x' => 790, 'y' => 868, 'size' => 52, 'color' => '#FFFFFF', 'opacity' => 0.8, 'delay' => 1.8],
        ['type' => 'dot',   'x' => 78,  'y' => 734, 'size' => 12, 'color' => '#F4A487', 'delay' => 1],
        ['type' => 'dot',   'x' => 676, 'y' => 166, 'size' => 18, 'color' => '#FF9A1F', 'delay' => 0.5],
    ];
}

/* ======================================================================
 * 4. Floating "3D" shapes — CSS depth only. Swap for real renders
 *    (<img src="coin.webp">) inside zgw_asset_shape() whenever ready.
 * ==================================================================== */

function zgw_asset_shape(array $a): string {
    $e = 'htmlspecialchars';
    $size = $a['size'] ?? 52;
    switch ($a['kind']) {
        case 'coin':
            return sprintf(
                '<div class="zgw-coin" style="--s:%dpx"><div class="zgw-coin-face">&#8377;</div></div>',
                $size
            );
        case 'card':
            return '<div class="zgw-card"><span class="zgw-card-shine"></span><span class="zgw-card-chip"></span>'
                 . '<span class="zgw-card-line zgw-card-line--a"></span><span class="zgw-card-line zgw-card-line--b"></span>'
                 . '<span class="zgw-card-logo"><i></i><i></i></span></div>';
        case 'ticket':
            return '<div class="zgw-ticket"><div class="zgw-ticket-stub">' . zgw_icon('plane', 'zgw-ticket-icon') . '</div>'
                 . '<span class="zgw-ticket-notch zgw-ticket-notch--t"></span><span class="zgw-ticket-notch zgw-ticket-notch--b"></span>'
                 . '<div class="zgw-ticket-body"><span class="zgw-ticket-route">BLR &rarr; GOA</span><i></i><i></i></div></div>';
        case 'badge':
            $pts = [];
            for ($k = 0; $k < 24; $k++) {
                $r = $k % 2 ? 0.42 : 0.5;
                $t = ($k / 24) * M_PI * 2;
                $pts[] = zgw_n(50 + cos($t) * $r * 100) . ',' . zgw_n(50 + sin($t) * $r * 100);
            }
            return sprintf(
                '<div class="zgw-badge" style="--s:%dpx"><svg viewBox="0 0 100 100"><polygon points="%s" fill="#EF5B5B" stroke="#EF5B5B" stroke-width="6" stroke-linejoin="round"/></svg><span>%%</span></div>',
                $size, implode(' ', $pts)
            );
        default: // tile, orb
            $dark = !empty($a['dark']);
            return sprintf(
                '<div class="zgw-tile%s%s" style="--s:%dpx;--from:%s;--to:%s">%s</div>',
                $a['kind'] === 'orb' ? ' zgw-tile--round' : '',
                $dark ? ' zgw-tile--light' : '',
                $size, $e($a['from']), $e($a['to']),
                zgw_icon($a['icon'], 'zgw-tile-icon')
            );
    }
}

/* ======================================================================
 * 5. Render
 * ==================================================================== */

function zgw_render(array $opts = []): void {
    static $instance = 0;
    $instance++;
    $uid    = 'zgw' . $instance;
    $cats   = zgw_categories();
    $active = max(0, min(ZGW_COUNT - 1, (int)($opts['default_index'] ?? 2)));
    $arc    = zgw_arc();
    $e      = fn($s) => htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
    $pad    = fn($n) => str_pad((string)$n, 2, '0', STR_PAD_LEFT);
    $cur    = $cats[$active];
    $glow   = zgw_polar(ZGW_R_OUT - 20, zgw_angle_for($active));
    $arcRot = zgw_angle_for($active) - $arc['span'] / 2;

    // Data for the JS controller
    $jsData = [
        'active' => $active,
        'arcSpan' => $arc['span'],
        'glowR' => ZGW_R_OUT - 20,
        'c' => ZGW_C,
        'step' => ZGW_STEP,
        'items' => array_map(fn($c) => [
            'id' => $c['id'], 'label' => $c['label'], 'description' => $c['description'],
        ], $cats),
    ];

    zgw_print_assets_once();
    ?>
<div class="zgw" id="<?= $uid ?>" data-zgw>
  <script type="application/json" class="zgw-data"><?= json_encode($jsData, JSON_HEX_TAG | JSON_UNESCAPED_UNICODE) ?></script>
  <div class="zgw-stage">

    <!-- Ambient decorations -->
    <div class="zgw-decor" aria-hidden="true">
      <?php foreach (zgw_decorations() as $k => $d): ?>
        <div class="zgw-decor-item" style="left:<?= $d['x'] ?>px;top:<?= $d['y'] ?>px">
          <div class="zgw-float zgw-float--soft" style="--delay:-<?= $d['delay'] ?>s;--dur:<?= 5 + ($k % 4) * 0.7 ?>s">
            <?php if ($d['type'] === 'pill'): ?>
              <div class="zgw-cashback" style="transform:rotate(<?= $d['rot'] ?>deg)">+ Cashback</div>
            <?php elseif ($d['type'] === 'pct'): ?>
              <span class="zgw-pct" style="font-size:<?= $d['size'] ?>px">%</span>
            <?php elseif ($d['type'] === 'spark'): ?>
              <svg width="<?= $d['size'] ?>" height="<?= $d['size'] ?>" viewBox="0 0 24 24" style="opacity:<?= $d['opacity'] ?? 1 ?>"><path d="M12 0c.6 6.2 5.8 11.4 12 12-6.2.6-11.4 5.8-12 12C11.4 17.8 6.2 12.6 0 12 6.2 11.4 11.4 6.2 12 0Z" fill="<?= $d['color'] ?>"/></svg>
            <?php else: ?>
              <span class="zgw-dot" style="width:<?= $d['size'] ?>px;height:<?= $d['size'] ?>px;background:<?= $d['color'] ?>"></span>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- The 752×752 dial -->
    <div class="zgw-dial">
      <div class="zgw-glow" style="left:<?= zgw_n($glow['x'] - 130) ?>px;top:<?= zgw_n($glow['y'] - 130) ?>px"></div>

      <svg class="zgw-ring" width="<?= ZGW_SIZE ?>" height="<?= ZGW_SIZE ?>" viewBox="0 0 <?= ZGW_SIZE ?> <?= ZGW_SIZE ?>" role="tablist" aria-label="Spending categories">
        <defs>
          <linearGradient id="<?= $uid ?>-seg-grad" x1="0" y1="0" x2="0.4" y2="1">
            <stop offset="0%" stop-color="#FF9A1F"/><stop offset="55%" stop-color="#FF8C00"/><stop offset="100%" stop-color="#FF6A00"/>
          </linearGradient>
        </defs>
        <circle class="zgw-orbit" cx="<?= ZGW_C ?>" cy="<?= ZGW_C ?>" r="<?= ZGW_R_ORBIT ?>" fill="none" stroke="#FF8C00" stroke-opacity="0.55" stroke-width="4" stroke-dasharray="0.1 13" stroke-linecap="round"/>
        <?php foreach ($cats as $i => $c):
            $d = zgw_segment_path($i);
            $pop = zgw_outward(zgw_angle_for($i), ZGW_POP);
            $isActive = $i === $active; ?>
          <g class="zgw-seg<?= $isActive ? ' is-active' : '' ?>" data-index="<?= $i ?>"
             role="tab" id="<?= $uid ?>-tab-<?= $e($c['id']) ?>" aria-selected="<?= $isActive ? 'true' : 'false' ?>"
             aria-controls="<?= $uid ?>-panel" aria-label="<?= $e($c['label']) ?>" tabindex="<?= $isActive ? '0' : '-1' ?>"
             style="--px:<?= zgw_n($pop['x']) ?>px;--py:<?= zgw_n($pop['y']) ?>px">
            <path class="zgw-seg-ring" d="<?= $d ?>" stroke-width="<?= ZGW_CORNER + 5 ?>"/>
            <path class="zgw-seg-shape" d="<?= $d ?>" stroke-width="<?= ZGW_CORNER ?>"/>
            <path class="zgw-seg-sheen" d="<?= $d ?>" stroke-width="<?= ZGW_CORNER ?>" fill="url(#<?= $uid ?>-seg-grad)" stroke="url(#<?= $uid ?>-seg-grad)"/>
          </g>
        <?php endforeach; ?>
      </svg>

      <!-- Labels (kept upright, ride along with their segment) -->
      <?php foreach ($cats as $i => $c):
          $ang = zgw_angle_for($i);
          $p = zgw_polar((ZGW_R_OUT + ZGW_R_IN) / 2, $ang);
          $pop = zgw_outward($ang, ZGW_POP); ?>
        <div class="zgw-label<?= $i === $active ? ' is-active' : '' ?>" data-index="<?= $i ?>" aria-hidden="true"
             style="left:<?= zgw_n($p['x']) ?>px;top:<?= zgw_n($p['y']) ?>px;--px:<?= zgw_n($pop['x']) ?>px;--py:<?= zgw_n($pop['y']) ?>px;--stroke:<?= $c['stroke'] ?>;--fill:<?= $c['fill'] ?>">
          <div class="zgw-label-inner">
            <?= zgw_icon($c['icon'], 'zgw-label-icon') ?>
            <span class="zgw-label-text"><?= $e($c['label']) ?></span>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Neumorphic track + rotating arc -->
      <div class="zgw-track"></div>
      <div class="zgw-arc" style="transform:rotate(<?= zgw_n($arcRot) ?>deg)">
        <svg width="<?= ZGW_SIZE ?>" height="<?= ZGW_SIZE ?>" viewBox="0 0 <?= ZGW_SIZE ?> <?= ZGW_SIZE ?>">
          <defs>
            <linearGradient id="<?= $uid ?>-arc-grad" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#FFB347"/><stop offset="100%" stop-color="#FF8C00"/>
            </linearGradient>
          </defs>
          <circle class="zgw-arc-glow" cx="<?= ZGW_C ?>" cy="<?= ZGW_C ?>" r="<?= ZGW_R_ARC ?>" fill="none" stroke="#FF8C00" stroke-opacity="0.45" stroke-width="<?= ZGW_ARC_W + 10 ?>" stroke-linecap="round" stroke-dasharray="<?= zgw_n($arc['len']) ?> <?= zgw_n($arc['circ']) ?>"/>
          <circle cx="<?= ZGW_C ?>" cy="<?= ZGW_C ?>" r="<?= ZGW_R_ARC ?>" fill="none" stroke="url(#<?= $uid ?>-arc-grad)" stroke-width="<?= ZGW_ARC_W ?>" stroke-linecap="round" stroke-dasharray="<?= zgw_n($arc['len']) ?> <?= zgw_n($arc['circ']) ?>"/>
        </svg>
      </div>

      <!-- Centre content: fixed slots, only the text changes -->
      <div class="zgw-disc" id="<?= $uid ?>-panel" role="tabpanel" aria-live="polite" aria-labelledby="<?= $uid ?>-tab-<?= $e($cur['id']) ?>">
        <div class="zgw-center">
          <div class="zgw-index"><span class="zgw-index-num zgw-swap"><?= $pad($active + 1) ?></span><span class="zgw-index-total"> / <?= $pad(ZGW_COUNT) ?></span></div>
          <div class="zgw-title-slot">
            <h3 class="zgw-title zgw-swap<?= strlen($cur['label']) > 12 ? ' is-long' : '' ?>"><?= $e($cur['label']) ?></h3>
          </div>
          <div class="zgw-desc-slot">
            <p class="zgw-desc zgw-swap"><?= $e($cur['description']) ?></p>
          </div>
          <div class="zgw-pills">
            <span class="zgw-pill zgw-pill--online">Online</span>
            <span class="zgw-pill zgw-pill--local">Local stores</span>
          </div>
        </div>
      </div>

      <!-- Floating items: one group per category, only the active one shows -->
      <?php foreach ($cats as $i => $c): ?>
        <div class="zgw-assets<?= $i === $active ? ' is-active' : '' ?>" data-index="<?= $i ?>" aria-hidden="true">
          <?php foreach ($c['assets'] as $order => $a):
              $p = zgw_polar($a['r'], zgw_angle_for($i) + $a['da']);
              $pullX = (ZGW_C - $p['x']) * 0.08;
              $pullY = (ZGW_C - $p['y']) * 0.08;
              $dur = 3.6 + $order * 0.5; ?>
            <div class="zgw-asset" style="left:<?= zgw_n($p['x']) ?>px;top:<?= zgw_n($p['y']) ?>px">
              <div class="zgw-asset-enter" style="--pull-x:<?= zgw_n($pullX) ?>px;--pull-y:<?= zgw_n($pullY) ?>px;--order:<?= $order ?>">
                <div class="zgw-float" style="--delay:-<?= $a['delay'] ?>s;--dur:<?= $dur ?>s">
                  <div style="transform:rotate(<?= $a['tilt'] ?>deg)"><?= zgw_asset_shape($a) ?></div>
                </div>
                <div class="zgw-float-shadow" style="--delay:-<?= $a['delay'] ?>s;--dur:<?= $dur ?>s"></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php
}

/* ======================================================================
 * 6. CSS + JS (printed once per page)
 * ==================================================================== */

function zgw_print_assets_once(): void {
    static $done = false;
    if ($done) return;
    $done = true;
    ?>
<style>
.zgw {
  --zgw-orange: #FF8C00;
  --zgw-ink: #1F1E1E;
  --zgw-cream: #FFF9F4;
  --zgw-ease: cubic-bezier(.22, 1, .36, 1);
  --zgw-spring: cubic-bezier(.34, 1.45, .64, 1);
  --zgw-scale: 1;
  position: relative;
  width: 100%;
  max-width: 880px;
  aspect-ratio: 1 / 1;
  margin: 0 auto;
  font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif;
  color: var(--zgw-ink);
  -webkit-user-select: none;
  user-select: none;
}
.zgw.is-scaled { overflow-x: clip; }
.zgw *, .zgw *::before, .zgw *::after { box-sizing: border-box; }
.zgw-stage {
  position: absolute; left: 50%; top: 0;
  width: 880px; height: 880px;
  transform: translateX(-50%) scale(var(--zgw-scale));
  transform-origin: top center;
}
.zgw-dial { position: absolute; left: 64px; top: 64px; width: 752px; height: 752px; }

/* ---- floating / bobbing ---- */
@keyframes zgw-float { 0%,100% { transform: translate3d(0,0,0) rotate(-3deg); } 50% { transform: translate3d(0,-12px,0) rotate(3deg); } }
@keyframes zgw-float-soft { 0%,100% { transform: translate3d(0,0,0); } 50% { transform: translate3d(0,-8px,0); } }
@keyframes zgw-float-shadow { 0%,100% { transform: scaleX(1); opacity: .9; } 50% { transform: scaleX(.72); opacity: .45; } }
@keyframes zgw-spin { to { transform: rotate(360deg); } }
@keyframes zgw-fade { from { opacity: 0; } to { opacity: 1; } }
.zgw-float { animation: zgw-float var(--dur, 4s) ease-in-out var(--delay, 0s) infinite; will-change: transform; }
.zgw-float--soft { animation-name: zgw-float-soft; }
.zgw-float-shadow {
  width: 75%; height: 8px; margin: 8px auto 0; border-radius: 50%;
  background: rgba(180, 105, 42, .2); filter: blur(3px);
  animation: zgw-float-shadow var(--dur, 4s) ease-in-out var(--delay, 0s) infinite;
}

/* ---- decorations ---- */
.zgw-decor { position: absolute; inset: 0; pointer-events: none; }
.zgw-decor-item { position: absolute; transform: translate(-50%, -50%); }
.zgw-cashback {
  white-space: nowrap; padding: 8px 16px; border-radius: 999px;
  background: rgba(255,255,255,.9);
  font: 600 17px/1.2 Poppins, Inter, ui-sans-serif, sans-serif; color: var(--zgw-ink);
  box-shadow: 0 14px 30px -12px rgba(143,90,40,.35), inset 0 1px 0 #fff;
}
.zgw-pct { font-family: Poppins, Inter, sans-serif; font-weight: 700; color: rgba(240,138,108,.45); }
.zgw-dot { display: block; border-radius: 50%; opacity: .85; }

/* ---- ambient glow ---- */
.zgw-glow {
  position: absolute; width: 260px; height: 260px; border-radius: 50%;
  background: rgba(255,140,0,.25); filter: blur(70px); pointer-events: none;
  transition: left .6s var(--zgw-ease), top .6s var(--zgw-ease);
}

/* ---- segments ---- */
.zgw-ring { position: absolute; inset: 0; overflow: visible; }
.zgw-orbit { transform-box: view-box; transform-origin: 376px 376px; animation: zgw-spin 120s linear infinite; }
.zgw-seg {
  cursor: pointer; outline: none;
  transform-box: fill-box; transform-origin: center;
  transition: transform .55s var(--zgw-spring);
}
.zgw-seg.is-active { transform: translate(var(--px), var(--py)) scale(1.045); }
.zgw-seg-shape, .zgw-seg-sheen, .zgw-seg-ring { stroke-linejoin: round; }
.zgw-seg-shape {
  fill: #fff; stroke: #fff;
  filter: drop-shadow(0 10px 18px rgba(143,90,40,.07)) drop-shadow(0 1px 1px rgba(143,90,40,.06));
  transition: fill .35s var(--zgw-ease), stroke .35s var(--zgw-ease), filter .35s var(--zgw-ease);
}
.zgw-seg.is-active .zgw-seg-shape {
  fill: var(--zgw-orange); stroke: var(--zgw-orange);
  filter: drop-shadow(0 18px 28px rgba(255,140,0,.42)) drop-shadow(0 4px 8px rgba(255,140,0,.3));
}
.zgw-seg-sheen { opacity: 0; pointer-events: none; transition: opacity .35s var(--zgw-ease); }
.zgw-seg.is-active .zgw-seg-sheen { opacity: 1; }
.zgw-seg-ring { fill: none; stroke: var(--zgw-ink); opacity: 0; transition: opacity .15s; }
.zgw-seg:focus-visible .zgw-seg-ring { opacity: 1; }

/* ---- labels ---- */
.zgw-label { position: absolute; z-index: 20; transform: translate(-50%, -50%); pointer-events: none; }
.zgw-label-inner {
  display: flex; flex-direction: column; align-items: center; gap: 6px;
  width: 88px; text-align: center;
  transition: transform .55s var(--zgw-spring);
}
.zgw-label.is-active .zgw-label-inner { transform: translate(var(--px), var(--py)) scale(1.04); }
.zgw-label-icon {
  width: 28px; height: 28px; stroke-width: 1.6;
  color: var(--stroke); fill: var(--fill);
  filter: drop-shadow(0 3px 3px rgba(31,30,30,.12));
  transition: color .3s, fill .3s, filter .3s;
}
.zgw-label.is-active .zgw-label-icon { color: #fff; fill: rgba(255,255,255,.28); filter: drop-shadow(0 3px 4px rgba(160,60,0,.35)); }
.zgw-label-text { font-size: 13.5px; line-height: 1.25; font-weight: 500; color: rgba(31,30,30,.85); transition: color .3s; }
.zgw-label.is-active .zgw-label-text { color: #fff; font-weight: 600; }

/* ---- track + arc ---- */
.zgw-track {
  position: absolute; left: 138px; top: 138px; width: 476px; height: 476px; /* r = 238 */
  border-radius: 50%; background: var(--zgw-cream);
  box-shadow: inset 7px 7px 16px rgba(214,186,160,.45), inset -7px -7px 16px rgba(255,255,255,.95),
              0 0 0 1px rgba(255,140,0,.06), 0 20px 40px -24px rgba(143,90,40,.25);
}
.zgw-arc { position: absolute; inset: 0; pointer-events: none; transition: transform .8s var(--zgw-spring); }
.zgw-arc svg { overflow: visible; display: block; }
.zgw-arc-glow { filter: blur(8px); }

/* ---- centre disc ---- */
.zgw-disc {
  position: absolute; left: 178px; top: 178px; width: 396px; height: 396px; /* r = 198 */
  display: grid; place-items: center; border-radius: 50%;
  background: radial-gradient(circle at 50% 35%, #fff 0%, #FFFCF9 60%, #FFF6EE 100%);
  box-shadow: 0 30px 60px -28px rgba(143,90,40,.35), 0 2px 6px rgba(143,90,40,.06), inset 0 -12px 28px rgba(255,140,0,.06);
}
.zgw-center { width: 300px; display: flex; flex-direction: column; align-items: center; text-align: center; }
.zgw-index { height: 28px; display: flex; align-items: center; font: 400 26px/1 Poppins, Inter, sans-serif; font-variant-numeric: tabular-nums; }
.zgw-index-num { font-weight: 700; color: var(--zgw-orange); }
.zgw-index-total { white-space: pre; }
.zgw-title-slot { margin-top: 12px; height: 52px; width: 100%; display: flex; align-items: center; justify-content: center; }
.zgw-title { margin: 0; white-space: nowrap; font: 700 42px/1 Poppins, Inter, sans-serif; letter-spacing: -.02em; color: var(--zgw-ink); }
.zgw-title.is-long { font-size: 32px; }
.zgw-desc-slot { margin-top: 12px; height: 72px; width: 100%; }
.zgw-desc {
  margin: 0; font-size: 15px; line-height: 24px; color: rgba(31,30,30,.75);
  display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;
}
.zgw-swap.is-swapping { animation: zgw-fade .25s ease-out; }
.zgw-pills { margin-top: 20px; display: flex; gap: 10px; }
.zgw-pill { padding: 6px 16px; border-radius: 999px; font-size: 14px; font-weight: 600; color: #fff; }
.zgw-pill--online { background: linear-gradient(180deg, #FFA53A, #FF7A00); box-shadow: 0 10px 20px -6px rgba(255,122,0,.65); }
.zgw-pill--local { background: linear-gradient(90deg, #E9568C, #F08A6C); box-shadow: 0 10px 20px -6px rgba(168,85,247,.55); }

/* ---- floating items ---- */
.zgw-assets { position: absolute; inset: 0; z-index: 30; pointer-events: none; }
.zgw-asset { position: absolute; transform: translate(-50%, -50%); }
.zgw-asset-enter {
  opacity: 0;
  transform: translate(var(--pull-x), var(--pull-y)) scale(.6);
  transition: opacity .2s ease, transform .25s ease;
}
.zgw-assets.is-active .zgw-asset-enter {
  opacity: 1; transform: none;
  transition: opacity .25s ease calc(.06s + var(--order) * .06s),
              transform .6s var(--zgw-spring) calc(.06s + var(--order) * .06s);
}
.zgw-assets:not(.is-active) .zgw-float,
.zgw-assets:not(.is-active) .zgw-float-shadow { animation-play-state: paused; }

.zgw-coin {
  width: var(--s); height: var(--s); border-radius: 50%; display: grid; place-items: center;
  background: radial-gradient(circle at 32% 28%, #FFF3C4 0%, #FFD45C 32%, #F5A800 68%, #C77A00 100%);
  box-shadow: 0 calc(var(--s) * .09) 0 #B26A00, 0 calc(var(--s) * .35) calc(var(--s) * .5) calc(var(--s) * -.15) rgba(201,122,0,.55),
              inset 0 2px 0 rgba(255,255,255,.55), inset 0 -8px 16px rgba(0,0,0,.18);
}
.zgw-coin-face {
  width: 70%; height: 70%; border-radius: 50%; display: grid; place-items: center;
  font: 700 calc(var(--s) * .4)/1 Poppins, Inter, sans-serif; color: #A65F00;
  border: 1.5px solid rgba(166,95,0,.35); background: linear-gradient(160deg, #FFE38A, #F7B500);
}
.zgw-card {
  position: relative; width: 120px; height: 76px; padding: 12px; overflow: hidden; border-radius: 14px;
  background: linear-gradient(135deg, #7FD8CF 0%, #3BA9A6 50%, #23808A 100%);
  box-shadow: 0 4px 0 #1C6670, 0 22px 34px -12px rgba(35,128,138,.55), inset 0 2px 0 rgba(255,255,255,.55), inset 0 -8px 16px rgba(0,0,0,.18);
}
.zgw-card-shine { position: absolute; right: -32px; top: -40px; width: 96px; height: 96px; border-radius: 50%; background: rgba(255,255,255,.15); }
.zgw-card-chip { display: block; width: 19px; height: 14px; border-radius: 4px; background: linear-gradient(135deg, #FFE9A8, #E8B23A); }
.zgw-card-line { display: block; border-radius: 999px; }
.zgw-card-line--a { margin-top: 16px; width: 70px; height: 5px; background: rgba(255,255,255,.7); }
.zgw-card-line--b { margin-top: 6px; width: 44px; height: 4px; background: rgba(255,255,255,.45); }
.zgw-card-logo { position: absolute; right: 12px; top: 12px; display: flex; }
.zgw-card-logo i { width: 16px; height: 16px; border-radius: 50%; background: #EF4444; }
.zgw-card-logo i + i { margin-left: -8px; background: rgba(245,158,11,.9); }
.zgw-ticket {
  position: relative; display: flex; width: 108px; height: 54px; overflow: hidden; border-radius: 10px; background: #fff;
  box-shadow: 0 3px 0 #EADFD5, 0 18px 28px -12px rgba(120,70,20,.35), inset 0 -6px 12px rgba(0,0,0,.04);
}
.zgw-ticket-stub { width: 36px; display: grid; place-items: center; background: linear-gradient(180deg, #FFB347, #FF7A00); }
.zgw-ticket-icon { width: 16px; height: 16px; color: #fff; stroke-width: 2.5; transform: rotate(45deg); }
.zgw-ticket-notch { position: absolute; left: 36px; width: 8px; height: 8px; border-radius: 50%; background: var(--zgw-cream); transform: translateX(-50%); }
.zgw-ticket-notch--t { top: -4px; }
.zgw-ticket-notch--b { bottom: -4px; }
.zgw-ticket-body { flex: 1; display: flex; flex-direction: column; justify-content: center; gap: 4px; padding: 0 8px; border-left: 1px dashed #F1E4D8; }
.zgw-ticket-route { font-size: 9px; font-weight: 600; letter-spacing: .04em; color: var(--zgw-ink); }
.zgw-ticket-body i { display: block; height: 3px; width: 40px; border-radius: 999px; background: #F1E4D8; }
.zgw-ticket-body i + i { width: 28px; }
.zgw-tile {
  width: var(--s); height: var(--s); border-radius: 30%; display: grid; place-items: center;
  background: linear-gradient(145deg, var(--from) 0%, var(--to) 100%);
  box-shadow: 0 calc(var(--s) * .07) 0 rgba(0,0,0,.18), 0 calc(var(--s) * .35) calc(var(--s) * .55) calc(var(--s) * -.2) var(--to),
              inset 0 2px 0 rgba(255,255,255,.55), inset 0 -8px 16px rgba(0,0,0,.18);
}
.zgw-tile--round { border-radius: 50%; }
.zgw-tile--light { box-shadow: 0 calc(var(--s) * .07) 0 #DCD2C8, 0 calc(var(--s) * .35) calc(var(--s) * .55) calc(var(--s) * -.2) rgba(120,70,20,.3),
                   inset 0 2px 0 rgba(255,255,255,.55), inset 0 -8px 16px rgba(0,0,0,.18); }
.zgw-tile-icon { width: 46%; height: 46%; color: #fff; stroke-width: 2.2; filter: drop-shadow(0 2px 2px rgba(0,0,0,.18)); }
.zgw-tile--light .zgw-tile-icon { color: var(--zgw-orange); }
.zgw-badge { position: relative; width: var(--s); height: var(--s); display: grid; place-items: center; }
.zgw-badge svg { position: absolute; inset: 0; width: 100%; height: 100%; filter: drop-shadow(0 8px 10px rgba(239,68,68,.4)); }
.zgw-badge span { position: relative; font: 700 calc(var(--s) * .42)/1 Poppins, Inter, sans-serif; color: #fff; }

@media (prefers-reduced-motion: reduce) {
  .zgw-float, .zgw-float-shadow, .zgw-orbit { animation: none; }
  .zgw-seg, .zgw-label-inner, .zgw-arc, .zgw-glow, .zgw-asset-enter,
  .zgw-assets.is-active .zgw-asset-enter { transition: opacity .2s ease !important; }
  .zgw-swap.is-swapping { animation: none; }
}
</style>
<script>
(function () {
  function initWheel(root) {
    var data = JSON.parse(root.querySelector('.zgw-data').textContent);
    var items = data.items, count = items.length, active = data.active;
    var segs = root.querySelectorAll('.zgw-seg');
    var labels = root.querySelectorAll('.zgw-label');
    var groups = root.querySelectorAll('.zgw-assets');
    var arc = root.querySelector('.zgw-arc');
    var glow = root.querySelector('.zgw-glow');
    var panel = root.querySelector('.zgw-disc');
    var numEl = root.querySelector('.zgw-index-num');
    var titleEl = root.querySelector('.zgw-title');
    var descEl = root.querySelector('.zgw-desc');
    var arcRotation = (-90 + active * data.step) - data.arcSpan / 2;

    function pad(n) { return (n < 10 ? '0' : '') + n; }
    function toggle(list, i) { list.forEach(function (el, k) { el.classList.toggle('is-active', k === i); }); }
    function swap(el, text) {
      el.textContent = text;
      el.classList.remove('is-swapping');
      void el.offsetWidth; // restart the fade
      el.classList.add('is-swapping');
    }

    function activate(i) {
      if (i === active) return;
      active = i;
      var item = items[i];

      toggle(segs, i); toggle(labels, i); toggle(groups, i);
      segs.forEach(function (s, k) {
        s.setAttribute('aria-selected', k === i ? 'true' : 'false');
        s.setAttribute('tabindex', k === i ? '0' : '-1');
      });
      panel.setAttribute('aria-labelledby', segs[i].id);

      // Arc: always rotate the short way round
      var target = (-90 + i * data.step) - data.arcSpan / 2;
      var delta = ((((target - arcRotation) % 360) + 540) % 360) - 180;
      arcRotation += delta;
      arc.style.transform = 'rotate(' + arcRotation + 'deg)';

      // Glow follows the active segment
      var rad = (-90 + i * data.step) * Math.PI / 180;
      glow.style.left = (data.c + data.glowR * Math.cos(rad) - 130) + 'px';
      glow.style.top = (data.c + data.glowR * Math.sin(rad) - 130) + 'px';

      // Centre text (slots are fixed, so nothing moves)
      swap(numEl, pad(i + 1));
      swap(titleEl, item.label);
      titleEl.classList.toggle('is-long', item.label.length > 12);
      swap(descEl, item.description);

      root.dispatchEvent(new CustomEvent('zgw:change', { detail: { index: i, id: item.id, label: item.label } }));
    }

    segs.forEach(function (seg, i) {
      seg.addEventListener('pointerenter', function (e) { if (e.pointerType === 'mouse') activate(i); });
      seg.addEventListener('click', function () { activate(i); });
      seg.addEventListener('focus', function () { activate(i); });
      seg.addEventListener('keydown', function (e) {
        var map = { ArrowRight: 1, ArrowDown: 1, ArrowLeft: -1, ArrowUp: -1 };
        var next = null;
        if (e.key in map) next = (active + map[e.key] + count) % count;
        if (e.key === 'Home') next = 0;
        if (e.key === 'End') next = count - 1;
        if (e.key === 'Enter' || e.key === ' ') e.preventDefault();
        if (next !== null) { e.preventDefault(); segs[next].focus(); }
      });
    });

    // Scale the fixed 880px stage to fit its container
    function fit() {
      var w = root.clientWidth;
      var s = Math.min(1, w / 880);
      root.style.setProperty('--zgw-scale', s);
      root.classList.toggle('is-scaled', s < 1);
    }
    if ('ResizeObserver' in window) new ResizeObserver(fit).observe(root);
    else window.addEventListener('resize', fit);
    fit();
  }

  function boot() { document.querySelectorAll('[data-zgw]:not([data-zgw-ready])').forEach(function (el) { el.setAttribute('data-zgw-ready', ''); initWheel(el); }); }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', boot);
  else boot();
})();
</script>
<?php
}
