<?php
/** @noinspection ALL */

$burgerKingJson =
    json_decode(
        file_get_contents('https://burgerking.ru/middleware/bridge/cache/api/v1/menu/coupons?code='),
        true,
        512,
        JSON_THROW_ON_ERROR
    )['response']['dishes'];

echo "Найдено " . count($burgerKingJson) . " промокодов\n";
foreach ($burgerKingJson as $value) {
    if ("" !== $value['code']) {
        echo $str = $value['code'] . " " . $value['name'] . " за " . (int)$value['price'] / 100 . "\n";
    }
}