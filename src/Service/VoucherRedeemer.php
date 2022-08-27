<?php

declare(strict_types = 1);

namespace App\Service;

use App\Domain\Voucher\Rule\RedeemableInterface;
use App\Entity\Order;
use App\Entity\Voucher;

/**
 * Business logic for redeeming voucher is one of most complex issue in Online shops
 * The logic behind vouchers will be oft changed based on marketing strategy.
 *
 * is there any better way without changing Service "VoucherRedeemer::redeem()", if we
 * -> add new rules
 * -> delete expired rules
 * -> update rules
 *
 *
 *
 * 🔥 Open-closed principle 🔥
 */
final class VoucherRedeemer
{
    private iterable $voucherRules;

    public function __construct(iterable $voucherRules)
    {
        $this->voucherRules = $voucherRules;
    }

    public function redeem(Voucher $voucher, Order $order): Order
    {
        /**
         * rule logic for Customer segment: normal, silver, gold customer
         * 👉 CustomerSegment.php
         */



        /**
         * rule logic for order structure: only Cosmetic products
         * 👉 OrderStructure.php
         */



        /**
         * rule logic for order volume: minimal order volume
         * 👉 OrderVolume
         */



        /**
         * rule logic for discount: discounted productions are not for redeeming voucher
         * 👉 Discount.php
         */



        /**
         * rule logic for budget: 15% discount; -5€ for each order
         * 👉 Budget.php
         */

        /** @var RedeemableInterface $rule */
        foreach ($this->voucherRules as $rule) {
            $rule->redeem($voucher, $order);
        }

        /**
         * ✅ Open-closed principle
         * create a new rule: just create a new rule in Voucher/Rule/NewRule.php
         * remove the expired rule: just remove the class from /Rule
         * update the rule logic: just apply the change in corresponding class
         */

        /**
         * ✅ Single responsibility
         * Each Rule class takes care of only the logic for that rule.
         */

        return $order;
    }
}
