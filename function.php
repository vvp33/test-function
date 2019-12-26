<?php

function getFivePopularWords(string $input): array
{
    $words = preg_split('#[^a-zа-я0-9-]+#iu', $input);
    $wordsFiltered = array_filter($words);
    $wordsFilteredToLower = array_map('mb_strtolower', $wordsFiltered);
    $frequencyWords = array_count_values($wordsFilteredToLower);
    
    return array_slice($frequencyWords, 0 ,5);
}
