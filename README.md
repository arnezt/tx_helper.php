# waves-tx-helper
Transaction and matcher conversion helper for Waves DEX

Source of all oderbooks: https://matcher.wavesplatform.com/matcher/orderbook

Orderbook for single asset pair:
https://matcher.wavesplatform.com/matcher/orderbook/' . `{$priceAsset}` . '/' . `{$assetAmount}` . '/status

where _$asset1_ and _$asset2_ replace with the _assetAmount_ and _priceAsset_ fetched

Information of transaction by address:
https://nodes.wavesnodes.com/transactions/address/' . `$address` . '/limit/' . `$limit`

where the _$address_ is a wallet address and _$limit_ is the number of record to fetch. Default is 100 records
https://nodes.wavesnodes.com/transactions/address/' . $address . '/limit/' . $limit
