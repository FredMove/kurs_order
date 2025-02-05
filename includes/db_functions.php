<?php
require_once('db.php');

//Функция для получения наших типов почв с содержанием
function getSoilTypes() {
    global $conn;
    $sql = "SELECT * FROM soil_types ORDER BY name";
    $result = $conn->query($sql);
    
    $soils = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $key = 'soil_' . $row['id'];
            $soils[$key] = [
                'name' => $row['name'],
                'humus' => $row['humus'],
                'ph' => $row['ph'],
                'p2o5' => $row['p2o5'],
                'k2o' => $row['k2o']
            ];
        }
    }
    return $soils;
}

//Функция для получения культур с соответствующими значениями выноса
function getCrops() {
    global $conn;
    $sql = "SELECT * FROM crops ORDER BY name";
    $result = $conn->query($sql);
    
    $crops = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $key = 'crop_' . $row['id'];
            $crops[$key] = [
                'name' => $row['name'],
                'n_removal' => $row['n_removal'],
                'p2o5_removal' => $row['p2o5_removal'],
                'k2o_removal' => $row['k2o_removal'],
                's_removal' => $row['s_removal']
            ];
        }
    }
    return $crops;
}

//Функция для получения удобрений с соответствующими значениями минералов
function getFertilizers() {
    global $conn;
    $sql = "SELECT * FROM fertilizers ORDER BY name";
    $result = $conn->query($sql);
    
    $fertilizers = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $key = 'fert_' . $row['id'];
            $fertilizers[$key] = [
                'name' => $row['name'],
                'n_content' => $row['n_content'],
                'p2o5_content' => $row['p2o5_content'],
                'k2o_content' => $row['k2o_content'],
                's_content' => $row['s_content']
            ];
        }
    }
    return $fertilizers;
}
