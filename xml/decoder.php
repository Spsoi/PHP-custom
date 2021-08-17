<?php
$input = file_get_contents('php://input');
$p = xml_parser_create();
xml_parse_into_struct($p, $input, $valuess, $index);
xml_parser_free($p);
