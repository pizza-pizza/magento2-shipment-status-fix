## Magento2 Fix for Order Status Changes on Shipment Creation via API
An issue in Magento2 through 2.1.0 (MAGETWO-50299) causes an order's status to remain unchanged when the order is shipped via the API: shipment creation does not update the `qty_shipped` for an order's `sales_order_item`s, preventing the order state and status from changing.

###1 - Installation 
#####Using Composer

```
composer config repositories.magento2-shipment-status-fix git git@github.com:pizza-pizza/magento2-shipment-status-fix.git
composer require pizza-pizza/magento2-shipment-status-fix
```

##### Manual Installation
 * Download the extension
 * Unzip the file
 * Create a folder {Magento root}/app/code/PizzaPizza/Magento2ShipmentStatusFix
 * Copy the content from the unzip folder
