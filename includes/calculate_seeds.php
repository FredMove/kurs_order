<?php
function calculateSeeds($data) {
    $crop = htmlspecialchars($data['crop']);
    $density = floatval($data['density']);
    $area = floatval($data['area']);
    $thousand_weight = floatval($data['thousand_weight']);
    $germination = floatval($data['germination']) / 100;

    $seeds_per_m2 = $density * (1 / $germination);
    $total_seeds = $seeds_per_m2 * $area * 10000;
    $total_weight = ($total_seeds / 1000) * $thousand_weight;

    return [
        'crop' => $crop,
        'seeds_per_m2' => round($seeds_per_m2, 2),
        'total_seeds' => round($total_seeds),
        'total_weight' => round($total_weight, 2)
    ];
}
