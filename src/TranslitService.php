<?php
declare(strict_types=1);

namespace VictoriaBabikova\TranslitComposerPackage;

class TranslitService
{
    /**
     * @param string $value
     * @return string
     */
    public function translit_to_en(string $value): string
    {
        $converter = array(
            "а" => "a",    "б" => "b",    "в" => "v",    "г" => "g",    "д" => "d",
            "е" => "e",    "ё" => "yo",   "ж" => "zh",   "з" => "z",    "и" => "i",
            "й" => "y",    "к" => "k",    "л" => "l",    "м" => "m",    "н" => "n",
            "о" => "o",    "п" => "p",    "р" => "r",    "с" => "s",    "т" => "t",
            "у" => "u",    "ф" => "f",    "х" => "h",    "ц" => "c",    "ч" => "ch",
            "ш" => "sh",   "щ" => "sch",  "ь" => "",      "ы" => "y",    "ъ" => "",
            "э" => "e",    "ю" => "yu",   "я" => "ya",
        );

        $value = mb_strtolower($value);
        $value = strtr($value, $converter);
        $value = mb_ereg_replace('[^-0-9a-z\']', '-', $value);
        $value = mb_ereg_replace('[-]+', '-', $value);
        $value = trim($value, '-');
        return $value;
    }

    /**
     * @param string $value
     * @return string
     */
    public function translit_to_ru(string $value): string
    {
        $converter = array(
            "а" => "a",    "b" => "б",    "v" => "в",    "g" => "г",    "d" => "д",
            "е" => "e",    "yo" => "ё",   "zh" => "ж",   "z" => "з",    "i" => "и",
            "y" => "й",    "k" => "к",    "l" => "л",    "m" => "м",    "n" => "н",
            "o" => "о",    "p" => "п",    "r" => "р",    "s" => "с",    "t" => "т",
            "u" => "у",    "f" => "ф",    "h" => "х",    "c" => "ц",    "ch"=> "ч",
            "sh" => "ш",   "sch" => "щ",  "''" => "ь",   "y" => "ы",     "'" => "ъ",
            "e'" => "э",    "yu" => "ю",  "ya" => "я",
        );

        $value = mb_strtolower($value);
        $value = strtr($value, $converter);
        $value = mb_ereg_replace('[-]+', ' ', $value);
        return $value;
    }
}