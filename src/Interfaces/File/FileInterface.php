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
    public function setMoneyInOutIo();
    public function setTrades();
    public function setTradesRegRepo();
    public function setTradesNonRegRepo();
    public function setStockInOut();
    public function setMoneyInOut();
    public function setMoneyConvert();
    public function setClientMoneyConvert();
    public function setCorpActionIn();
    public function setCorpActionOut();
    public function setStockPayingOff();
    public function setMoneyOnDate();
    public function setCommonData();
    public function setMoneyOnDateSingle();
    public function setMoneyOnDateMarketPrc();
    public function setStockOnDate();
    public function setStockOnDateExg();
    public function setStockOnDateExgSum();
    public function setStockOnDateMtl();
}