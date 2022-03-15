<?php

declare(strict_types = 1);

namespace App\Service;

use App\Entity\Order;
use App\Entity\Voucher;

final class VoucherRedeemer
{
    public function redeem(Voucher $voucher, Order $order): Order
    {
        /**
         * rule logic for Customer segment: normal, silver, gold customer
         */
        dump('Checking Rule: customer segment');


        /**
         * rule logic for order structure: only Cosmetic products
         */
        dump('Checking Rule: order structure');


        /**
         * rule logic for order volume: minimal order volume
         */
        dump('Checking Rule: order volume');


        /**
         * rule logic for discount: discounted productions are not for redeeming voucher
         */
        dump('Checking Rule: discount');


        /**
         * rule logic for budget: 15% discount; -5€ for each order
         */
        dump('Checking Rule: budget');

        /**
         * 🔥 Open-closed principle 🔥
         * -> add new rules
         * -> delete expired rules
         * -> update rules
         */

        /**
         * 🔥 Single responsibility 🔥
         * this method has to take care too much business logic related to rules
         */

        return $order;
    }
}
