<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Entity\Order;
use App\Entity\Voucher;
use App\Service\VoucherRedeemer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoucherRedeemController extends AbstractController
{
    #[Route('/redeem', name: 'app_voucher_redeem')]
    public function __invoke(VoucherRedeemer $redeemer): Response
    {
        $testVoucher = new Voucher();
        $testOrder = new Order(100);
        $testOrder->setCustomer(new Customer());

        dump($testOrder);

        $redeemer->redeem($testVoucher, $testOrder);

        dump($testOrder);

        return new Response('Done');
    }
}
