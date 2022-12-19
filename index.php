<?php

function getShapeCornersCount (...$params)
{
    $shapes = [
        'square' => 4,
        'circle' => 0
    ];

    foreach ($params as $shape) {
        if (array_key_exists(strtolower(trim($shape)), $shapes)) {
            echo ucfirst(trim($shape)) . ' - ' . $shapes[strtolower(trim($shape))] . '<br>';
        } else {
            echo ucfirst(trim($shape)) . ' - not defined <br>';
        }
    }
}

getShapeCornersCount('square', 'circle', 'triangle', 1);

