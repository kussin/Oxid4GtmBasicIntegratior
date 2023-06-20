<!-- WMDK::TRACKING['thankyou.tpl'] -->

[{assign var=iOrderNr value=$order->oxorder__oxordernr->value}]
[{assign var=sOrderEmail value=$order->oxorder__oxbillemail->value}]
[{assign var=dTotalOrderSum value=$order->oxorder__oxtotalordersum->value}]
[{assign var=dTotalOrderNetSum value=$order->oxorder__oxtotalnetsum->value}]
[{assign var=dTotalOrderBrutSum value=$order->oxorder__oxtotalbrutsum->value}]
[{assign var=dOrderDelCost value=$order->oxorder__oxdelcost->value}]
[{assign var=dOrderPayCost value=$order->oxorder__oxpaycost->value}]
[{assign var=aOrderdArticles value=$order->getOrderArticles()}]
[{assign var=sOrderVoucherList value=$order->getOrderVouchers()}]