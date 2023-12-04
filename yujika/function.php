<?php

// json
function loadJson($path) {
    $file = file_get_contents($path);
    return json_decode($file, true);
}

function saveJson($path, $data) {
    $data = json_encode($data, JSON_PRETTY_PRINT);
    $file = file_put_contents($path, $data);
}

// urutkan data
function sortData($data, $target, $asc, $num) {
    function sortByKey($key) {
        return function ($a, $b) use ($key) {
            return strcmp($a[$key], $b[$key]);
        };
    }

    function sortByKeyReverse($key) {
        return function ($a, $b) use ($key) {
            return -strcmp($a[$key], $b[$key]);
        };
    }

    function sortByNumber($key) {
        return function ($a, $b) use ($key) {
            if ($a[$key] === $b[$key]) {return 0;}
            return ($a[$key] < $b[$key]) ? -1 : 1;
        };
    }

    function sortByNumberReverse($key) {
        return function ($a, $b) use ($key) {
            if ($a[$key] === $b[$key]) {return 0;}
            return ($a[$key] > $b[$key]) ? -1 : 1;
        };
    }

    // Sort
    if ($asc) {
        if ($num) {
            usort($data, sortByNumber($target));
        } else {
            usort($data, sortByKey($target));
        }
    } else {
        if ($num) {
            usort($data, sortByNumberReverse($target));
        } else {
            usort($data, sortByKeyReverse($target));
        }
    }
    return $data;
}

// konversi tanggal
// contoh 'Y-m-d' -> 'd M Y'
function dateCvt($date, $format_1, $format_2) {
    $originalDate = DateTime::createFromFormat($format_1, $date);
    $formattedDate = $originalDate->format($format_2);
    return $formattedDate;
}
?>