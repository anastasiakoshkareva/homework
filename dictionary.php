<?php
$englishToUkrainian = [
    "hello" => "привіт",
    "goodbye" => "до побачення",
    "please" => "будь ласка",
    "thank you" => "дякую",
    "yes" => "так",
    "no" => "ні",
    "cat" => "кіт",
    "dog" => "пес",
    "book" => "книга",
    "apple" => "яблуко"
];
echo "Англо-український словник:\n";
foreach ($englishToUkrainian as $english => $ukrainian) {
    echo "$english => $ukrainian\n";
}
$ukrainianToEnglish = array_flip($englishToUkrainian);

echo "\nУкраїнсько-англійський словник:\n";
foreach ($ukrainianToEnglish as $ukrainian => $english) {
    echo "$ukrainian => $english\n";
}
