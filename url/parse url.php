<?php

$flinders = parse_url('https://test.ru/?utm_source=cmdf5-utm_source&utm_medium=cmdf5-utm_medium&utm_campaign=cmdf5-utm_campaign&utm_content=cmdf5-utm_content&utm_term=cmdf5-utm_term');
print_r($flinders);
// =====================================================================================
// Array
// (
//     [scheme] => https
//     [host] => test.ru
//     [path] => /
//     [query] => utm_source=cmdf5-utm_source&utm_medium=cmdf5-utm_medium&utm_campaign=cmdf5-utm_campaign&utm_content=cmdf5-utm_content&utm_term=cmdf5-utm_term
// )

parse_str($flinders['query'], $output);
print_r($output);
// =====================================================================================
// Array
// (
//     [utm_source] => cmdf5-utm_source
//     [utm_medium] => cmdf5-utm_medium
//     [utm_campaign] => cmdf5-utm_campaign
//     [utm_content] => cmdf5-utm_content
//     [utm_term] => cmdf5-utm_term
// )
