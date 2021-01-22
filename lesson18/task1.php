<?php

include_once '../header.php';

/**
 * Транслитерация букв соответствует стандарту ГОСТ 7.79-2000
 */
function convertToTranslate(string $text): string
{
    $convertedText = '';
    
    for ($ruChar = 0; $ruChar < mb_strlen($text); $ruChar++) {
        $char = mb_substr($text, $ruChar, 1);
        $convertedText .= charConvert($char);
    }
    
    return $convertedText;
}

function charConvert(string $char): string
{
    $converterSet = [
        'а' => 'a', 
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'j',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n', 
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'x',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shh',
        'ъ' => ``,
        'ы' => 'y\'',
        'ь' => '`',
        'э' => 'e`',
        'ю' => 'yu',
        'я' => 'ya',
        'А' => 'A', 
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'G',
        'Е' => 'E',
        'Ё' => 'Yo',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'J',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N', 
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'X',
        'Ц' => 'C',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Shh',
        'Ъ' => ``,
        'Ы' => 'Y\'',
        'Ь' => '`',
        'Э' => 'E`',
        'Ю' => 'Yu',
        'Я' => 'Ya',
    ];
    
    return strtr($char, $converterSet);
}
