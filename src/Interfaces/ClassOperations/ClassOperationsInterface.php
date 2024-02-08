<?php

namespace Aton\Portfolio\Parse\Interfaces\ClassOperations;

interface ClassOperationsInterface
{
    public function setOperID($OperId);

    public function setisComplete($IsComplete);

    public function setOperPlace($OperPlace);

    public function setIntOperNum($IntOperNum);

    public function setTradeType($TradeType);

    public function setAssetName($AssetName);

    public function setQuantity($Quantity);

    public function setPrice($Price);

    public function setPriceCurr($PriceCurr);

    public function setPaymentCurr($PaymentCurr);

    public function setPayment($Payment);

    public function setPayment_RUR($PaymentRur);

    public function setNKD($Nkd);

    public function setNKD_RUR($NkdRur);

    public function setPaymentDate($PaymentDate);

    public function setSettlementDate($SettlementDate);

    public function setComExg($ComExg);

    public function setComTS($ComTs);

    public function setComDlr($ComDlr);

    public function setOrderTerm($OrderTerm);

    public function setPortfolio($Portfolio);

    public function setisRPS($IsRps);

    public function setOperDateSort($OperDateSort);

    public function setOperTimeSort($OperTimeSort);

    public function setIsOperWithoutPrice($IsOperWithoutPrice);

    public function setIsPif($IsPif);

    public function setIsIB($IsIb);

    public function getOperID();

    public function getisComplete();

    public function getOperPlace();

    public function getIntOperNum();

    public function getTradeType();

    public function getAssetName();

    public function getQuantity();

    public function getPrice();

    public function getPriceCurr();

    public function getPaymentCurr();

    public function getPayment();

    public function getPayment_RUR();

    public function getNKD();

    public function getNKD_RUR();

    public function getPaymentDate();

    public function getSettlementDate();

    public function getComExg();

    public function getComTS();

    public function getComDlr();

    public function getOrderTerm();

    public function getPortfolio();

    public function getisRPS();

    public function getOperDateSort();

    public function getOperTimeSort();

    public function getIsOperWithoutPrice();

    public function getIsPif();

    public function getIsIB();
}