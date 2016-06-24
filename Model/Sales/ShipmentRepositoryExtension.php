<?php
/**
 * @author Pizza Pizza Design Services GmbH
 * @copyright Copyright (c) 2016 Pizza Pizza Design Services GmbH (http://www.pizzapizza.io)
 * @package PizzaPizza_RestOrderCompletion
 */

namespace PizzaPizza\RestOrderCompletion\Model\Sales;

class ShipmentRepositoryExtension {

	/**
	 * @param \Magento\Checkout\Model\ShipmentRepository $subject
	 * @param \Magento\Sales\Model\Order\Shipment
	 */
	public function afterSave(
		\Magento\Sales\Model\Order\ShipmentRepository $subject,
		\Magento\Sales\Model\Order\Shipment $result
	) {
		
		foreach ($result->getAllItems() as $item) {

			$orderItem = $item->getOrderItem();
			$orderItem->setQtyShipped( $item->getQty() );
			$orderItem->save();

		}

		$order = $result->getOrder()->load( $result->getOrder()->getId() );
		$order->save();

		return $result;

	}

}
