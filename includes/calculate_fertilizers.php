<?php
function calculateFertilizers($data, $crops, $fertilizers) {  // Добавляем параметр $fertilizers
    // Получаем данные из формы
    $area = floatval($data['area']); // га
    $planned_yield = floatval($data['planned_yield']) * 10; // переводим т/га в ц/га
    
    // Получаем содержание веществ в почве
    $humus = floatval($data['humus']);
    $ph = floatval($data['ph']);
    $p2o5_soil = floatval($data['p2o5']); // мг/кг
    $k2o_soil = floatval($data['k2o']); // мг/кг

    // Переводим мг/кг в кг/га (умножаем на 3, т.к. в пахотном слое примерно 3000 т/га почвы)
    $p2o5_soil = $p2o5_soil * 3;
    $k2o_soil = $k2o_soil * 3;

    // Если есть органические удобрения
    $organic_dose = isset($data['fertilizer_amount']) ? floatval($data['fertilizer_amount']) * 10 : 0; // переводим т/га в ц/га
    
    // Получаем значения выноса веществ для выбранной и предыдущей культуры из БД
    $current_crop = $crops[$data['current_crop']];
    $previous_crop = $crops[$data['previous_crop']];
    
    $n_removal = $current_crop['n_removal'];
    $p_removal = $current_crop['p2o5_removal'];
    $k_removal = $current_crop['k2o_removal'];
    $s_removal = $current_crop['s_removal'];

    // Учитываем влияние предшественника (вычитаем 20% от выноса предыдущей культуры)
    $n_previous = $previous_crop['n_removal'] * 0.2;
    $p_previous = $previous_crop['p2o5_removal'] * 0.2;
    $k_previous = $previous_crop['k2o_removal'] * 0.2;
    $s_previous = $previous_crop['s_removal'] * 0.2;

    // Содержание в органических удобрениях
    if (isset($data['fertilizer_type']) && isset($fertilizers[$data['fertilizer_type']])) {
        $fertilizer = $fertilizers[$data['fertilizer_type']];
        $n_organic = $fertilizer['n_content'] / 100; // переводим проценты в доли
        $p_organic = $fertilizer['p2o5_content'] / 100;
        $k_organic = $fertilizer['k2o_content'] / 100;
        $s_organic = $fertilizer['s_content'] / 100;
    } else {
        $n_organic = 0;
        $p_organic = 0;
        $k_organic = 0;
        $s_organic = 0;
    }

    // Расчет по формулам с учетом предшественника
    $n_needed = ($n_removal * $planned_yield) - ($humus * 50) - ($organic_dose * $n_organic) - ($n_previous * $planned_yield);
    $p_needed = ($p_removal * $planned_yield) - $p2o5_soil - ($organic_dose * $p_organic) - ($p_previous * $planned_yield);
    $k_needed = ($k_removal * $planned_yield) - $k2o_soil - ($organic_dose * $k_organic) - ($k_previous * $planned_yield);
    $s_needed = ($s_removal * $planned_yield) - ($humus * 10) - ($organic_dose * $s_organic) - ($s_previous * $planned_yield);

    // Расчет на все поле
    $n_total = $n_needed * $area;
    $p_total = $p_needed * $area;
    $k_total = $k_needed * $area;
    $s_total = $s_needed * $area;

    return [
        'per_hectare' => [
            'N' => max(0, round($n_needed, 2)),
            'P' => max(0, round($p_needed, 2)),
            'K' => max(0, round($k_needed, 2)),
            'S' => max(0, round($s_needed, 2))
        ],
        'total' => [
            'N' => max(0, round($n_total, 2)),
            'P' => max(0, round($p_total, 2)),
            'K' => max(0, round($k_total, 2)),
            'S' => max(0, round($s_total, 2))
        ]
    ];
}
