<?php

namespace Aton\Portfolio\Parse\Interfaces\File;

interface FileInterface
{
    public function getMoneyInOutIo();
    public function getTrades();
    public function getTradesRegRepo();
    public function getTradesNonRegRepo();
    public function getStockInOut();
    public function getMoneyInOut();
    public function getMoneyConvert();
    public function getClientMoneyConvert();
    public function getCorpActionIn();
    public function getCorpActionOut();
    public function getStockPayingOff();
    public function getMoneyOnDate();
    public function getCommonData();
    public function getMoneyOnDateSingle();
    public function getMoneyOnDateMarketPrc();
    public function getStockOnDate();
    public function getStockOnDateExg();
    public function getStockOnDateExgSum();
    public function getStockOnDateMtl();
    public function setTrades($trades);
    public function setMoneyInOutIo($moneyInOutIo);
    public function setTradesRegRepo($tradesRegRepo);
    public function setTradesNonRegRepo($TradesNonRegRepo);
    public function setStockInOut($stockInOut);
    public function setMoneyInOut($moneyInOut);
    public function setMoneyConvert($moneyConvert);
    public function setClientMoneyConvert($clientMoneyConvert);
    public function setCorpActionIn($corpActionIn);
    public function setCorpActionOut($corpActionOut);
    public function setStockPayingOff($stockPayingOff);
    public function setMoneyOnDate($moneyOnDate);
    public function setCommonData($commonData);
    public function setMoneyOnDateSingle($moneyOnDateSingle);
    public function setMoneyOnDateMarketPrc($moneyOnDateMarketPrc);
    public function setStockOnDate($stockOnDate);
    public function setStockOnDateExg($stockOnDateExg);
    public function setStockOnDateExgSum($stockOnDateExgSum);
    public function setStockOnDateMtl($stockOnDateMtl);
}