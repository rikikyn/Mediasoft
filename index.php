<?php

$str = 'Под ними спит сей властелин,
Сей идол северных дружин,
Маститый страж страны державной,
Смиритель всех ее врагов,
Сей остальной из стаи славной
Екатерининских орлов.';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) {

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}


foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}" . PHP_EOL;
}

echo "Всего слов: {$count}";