```
<?php
/** Converting price for matcher [default WAVES: 8 decimal]
* $n = amount or price
* $asset1_dec = amountAsset
* $asset2_dec = priceAsset
*/
function convert_price($n, $asset2_dec, $asset1_dec = 8)
{
    $price = ($n / 10 ** (8 - ($asset2_dec - $asset1_dec)));

    return number_format($price, 8, '.', ',');
}

/** Converting amount for matcher */
function convert_amount($n, $asset2_dec, $asset1_dec = 8)
{
    $amount = ($n / 10 ** (8 + ($asset2_dec - $asset1_dec)));

    return number_format($amount, 8, '.', ',');
}

/** Rounded amount for transaction */
function convert_amount_tx($n, $asset2_dec, $asset1_dec = 8)
{
    $amount = ($n / 10 ** (8 - ($asset2_dec - $asset1_dec)));

    return $amount;
    //then number_format($amount, 8, '.', ',');
}

/** Rounded price for transaction */
function convert_price_tx($n, $asset2_dec, $asset1_dec = 8)
{
    $price = ($n / 10 ** (8 + ($asset2_dec - $asset1_dec)));

    return $price;
    //then number_format($price, 8, '.', ',');
}```
