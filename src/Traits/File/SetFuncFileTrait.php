<?php

namespace Aton\Portfolio\Parse\Traits\File;

use Aton\Portfolio\Parse\ClassTypes\ClientMoneyConvert;
use Aton\Portfolio\Parse\ClassTypes\CommonData;
use Aton\Portfolio\Parse\ClassTypes\CorpActionIn;
use Aton\Portfolio\Parse\ClassTypes\CorpActionOut;
use Aton\Portfolio\Parse\ClassTypes\MoneyConvert;
use Aton\Portfolio\Parse\ClassTypes\MoneyInOut;
use Aton\Portfolio\Parse\ClassTypes\MoneyInOutIo;
use Aton\Portfolio\Parse\ClassTypes\MoneyOnDate;
use Aton\Portfolio\Parse\ClassTypes\MoneyOnDateMarketPrc;
use Aton\Portfolio\Parse\ClassTypes\MoneyOnDateSingle;
use Aton\Portfolio\Parse\ClassTypes\StockInOut;
use Aton\Portfolio\Parse\ClassTypes\StockOnDate;
use Aton\Portfolio\Parse\ClassTypes\StockOnDateExg;
use Aton\Portfolio\Parse\ClassTypes\StockOnDateExgSum;
use Aton\Portfolio\Parse\ClassTypes\StockOnDateMtl;
use Aton\Portfolio\Parse\ClassTypes\StockPayingOff;
use Aton\Portfolio\Parse\ClassTypes\Trades;
use Aton\Portfolio\Parse\ClassTypes\TradesNonRegRepo;
use Aton\Portfolio\Parse\ClassTypes\TradesRegRepo;

trait SetFuncFileTrait
{
    /**
     * Устанавливает объект Trades.
     *
     * @param Trades $trades Объект Trades.
     * @return $this Текущий объект.
     */
    public function setTrades($trades)
    {
        $this->trades = $trades;
        return $this;
    }

    /**
     * Устанавливает объект MoneyInOutIo.
     *
     * @param MoneyInOutIo $moneyInOutIo Объект MoneyInOutIo.
     * @return $this Текущий объект.
     */
    public function setMoneyInOutIo($moneyInOutIo)
    {
        $this->money_in_out_io = $moneyInOutIo;
        return $this;
    }

    /**
     * Устанавливает объект TradesRegRepo.
     *
     * @param TradesRegRepo $tradesRegRepo Объект TradesRegRepo.
     * @return $this Текущий объект.
     */
    public function setTradesRegRepo($tradesRegRepo)
    {
        $this->trades_reg_repo = $tradesRegRepo;
        return $this;
    }

    /**
     * Устанавливает объект TradesNonRegRepo.
     *
     * @param TradesNonRegRepo $TradesNonRegRepo Объект TradesNonRegRepo.
     * @return $this Текущий объект.
     */
    public function setTradesNonRegRepo($TradesNonRegRepo)
    {
        $this->trades_non_reg_repo = $TradesNonRegRepo;
        return $this;
    }

    /**
     * Устанавливает объект StockInOut.
     *
     * @param StockInOut $stockInOut Объект StockInOut.
     * @return $this Текущий объект.
     */
    public function setStockInOut($stockInOut)
    {
        $this->stock_in_out = $stockInOut;
        return $this;
    }

    /**
     * Устанавливает объект MoneyInOut.
     *
     * @param MoneyInOut $moneyInOut Объект MoneyInOut.
     * @return $this Текущий объект.
     */
    public function setMoneyInOut($moneyInOut)
    {
        $this->money_in_out = $moneyInOut;
        return $this;
    }

    /**
     * Устанавливает объект MoneyConvert.
     *
     * @param MoneyConvert $moneyConvert Объект MoneyConvert.
     * @return $this Текущий объект.
     */
    public function setMoneyConvert($moneyConvert)
    {
        $this->money_convert = $moneyConvert;
        return $this;
    }

    /**
     * Устанавливает объект ClientMoneyConvert.
     *
     * @param ClientMoneyConvert $clientMoneyConvert Объект ClientMoneyConvert.
     * @return $this Текущий объект.
     */
    public function setClientMoneyConvert($clientMoneyConvert)
    {
        $this->client_money_convert = $clientMoneyConvert;
        return $this;
    }

    /**
     * Устанавливает объект CorpActionIn.
     *
     * @param CorpActionIn $corpActionIn Объект CorpActionIn.
     * @return $this Текущий объект.
     */
    public function setCorpActionIn($corpActionIn)
    {
        $this->corp_action_in = $corpActionIn;
        return $this;
    }

    /**
     * Устанавливает объект CorpActionOut.
     *
     * @param CorpActionOut $corpActionOut Объект CorpActionOut.
     * @return $this Текущий объект.
     */
    public function setCorpActionOut($corpActionOut)
    {
        $this->corp_action_out = $corpActionOut;
        return $this;
    }

    /**
     * Устанавливает объект StockPayingOff.
     *
     * @param StockPayingOff $stockPayingOff Объект StockPayingOff.
     * @return $this Текущий объект.
     */
    public function setStockPayingOff($stockPayingOff)
    {
        $this->stock_paying_off = $stockPayingOff;
        return $this;
    }

    /**
     * Устанавливает объект MoneyOnDate.
     *
     * @param MoneyOnDate $moneyOnDate Объект MoneyOnDate.
     * @return $this Текущий объект.
     */
    public function setMoneyOnDate($moneyOnDate)
    {
        $this->money_on_date = $moneyOnDate;
        return $this;
    }

    /**
     * Устанавливает объект CommonData.
     *
     * @param CommonData $commonData Объект CommonData.
     * @return $this Текущий объект.
     */
    public function setCommonData($commonData)
    {
        $this->common_data = $commonData;
        return $this;
    }

    /**
     * Устанавливает объект MoneyOnDateSingle.
     *
     * @param MoneyOnDateSingle $moneyOnDateSingle Объект MoneyOnDateSingle.
     * @return $this Текущий объект.
     */
    public function setMoneyOnDateSingle($moneyOnDateSingle)
    {
        $this->money_on_date_single = $moneyOnDateSingle;
        return $this;
    }

    /**
     * Устанавливает объект MoneyOnDateMarketPrc.
     *
     * @param MoneyOnDateMarketPrc $moneyOnDateMarketPrc Объект MoneyOnDateMarketPrc.
     * @return $this Текущий объект.
     */
    public function setMoneyOnDateMarketPrc($moneyOnDateMarketPrc)
    {
        $this->money_on_date_market_prc = $moneyOnDateMarketPrc;
        return $this;
    }

    /**
     * Устанавливает объект StockOnDate.
     *
     * @param StockOnDate $stockOnDate Объект StockOnDate.
     * @return $this Текущий объект.
     */
    public function setStockOnDate($stockOnDate)
    {
        $this->stock_on_date = $stockOnDate;
        return $this;
    }

    /**
     * Устанавливает объект StockOnDateExg.
     *
     * @param StockOnDateExg $stockOnDateExg Объект StockOnDateExg.
     * @return $this Текущий объект.
     */
    public function setStockOnDateExg($stockOnDateExg)
    {
        $this->stock_on_date_exg = $stockOnDateExg;
        return $this;
    }

    /**
     * Устанавливает объект StockOnDateExgSum.
     *
     * @param StockOnDateExgSum $stockOnDateExgSum Объект StockOnDateExgSum.
     * @return $this Текущий объект.
     */
    public function setStockOnDateExgSum($stockOnDateExgSum)
    {
        $this->stock_on_date_exg_sum = $stockOnDateExgSum;
        return $this;
    }

    /**
     * Устанавливает объект StockOnDateMtl.
     *
     * @param StockOnDateMtl $stockOnDateMtl Объект StockOnDateMtl.
     * @return $this Текущий объект.
     */
    public function setStockOnDateMtl($stockOnDateMtl)
    {
        $this->stock_on_date_mtl = $stockOnDateMtl;
        return $this;
    }

}