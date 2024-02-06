<?php

namespace Aton\Portfolio\Parse\Interfaces\File;

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

trait GetFuncFileTrait
{
    /**
     * Получает свойство файла.
     *
     * @return array Свойство файла.
     */
    public function getDefaultFile(): array
    {
        return $this->default_file;
    }

    /**
     * Получает объект Trades.
     *
     * @return Trades|null Объект Trades.
     */
    public function getTrades(): ?Trades
    {
        return $this->trades;
    }

    /**
     * Получает объект MoneyInOutIo.
     *
     * @return MoneyInOutIo|null Объект MoneyInOutIo.
     */
    public function getMoneyInOutIo(): ?MoneyInOutIo
    {
        return $this->money_in_out_io;
    }

    /**
     * Получает объект TradesRegRepo.
     *
     * @return TradesRegRepo|null Объект TradesRegRepo.
     */
    public function getTradesRegRepo(): ?TradesRegRepo
    {
        return $this->trades_reg_repo;
    }

    /**
     * Получает объект TradesNonRegRepo.
     *
     * @return TradesNonRegRepo|null Объект TradesNonRegRepo.
     */
    public function getTradesNonRegRepo(): ?TradesNonRegRepo
    {
        return $this->trades_non_reg_repo;
    }

    /**
     * Получает объект StockInOut.
     *
     * @return StockInOut|null Объект StockInOut.
     */
    public function getStockInOut(): ?StockInOut
    {
        return $this->stock_in_out;
    }

    /**
     * Получает объект MoneyInOut.
     *
     * @return MoneyInOut|null Объект MoneyInOut.
     */
    public function getMoneyInOut(): ?MoneyInOut
    {
        return $this->money_in_out;
    }

    /**
     * Получает объект MoneyConvert.
     *
     * @return MoneyConvert|null Объект MoneyConvert.
     */
    public function getMoneyConvert(): ?MoneyConvert
    {
        return $this->money_convert;
    }

    /**
     * Получает объект ClientMoneyConvert.
     *
     * @return ClientMoneyConvert|null Объект ClientMoneyConvert.
     */
    public function getClientMoneyConvert(): ?ClientMoneyConvert
    {
        return $this->client_money_convert;
    }

    /**
     * Получает объект CorpActionIn.
     *
     * @return CorpActionIn|null Объект CorpActionIn.
     */
    public function getCorpActionIn(): ?CorpActionIn
    {
        return $this->corp_action_in;
    }

    /**
     * Получает объект CorpActionOut.
     *
     * @return CorpActionOut|null Объект CorpActionOut.
     */
    public function getCorpActionOut(): ?CorpActionOut
    {
        return $this->corp_action_out;
    }

    /**
     * Получает объект StockPayingOff.
     *
     * @return StockPayingOff|null Объект StockPayingOff.
     */
    public function getStockPayingOff(): ?StockPayingOff
    {
        return $this->stock_paying_off;
    }

    /**
     * Получает объект MoneyOnDate.
     *
     * @return MoneyOnDate|null Объект MoneyOnDate.
     */
    public function getMoneyOnDate(): ?MoneyOnDate
    {
        return $this->money_on_date;
    }

    /**
     * Получает объект CommonData.
     *
     * @return CommonData|null Объект CommonData.
     */
    public function getCommonData(): ?CommonData
    {
        return $this->common_data;
    }

    /**
     * Получает объект MoneyOnDateSingle.
     *
     * @return MoneyOnDateSingle|null Объект MoneyOnDateSingle.
     */
    public function getMoneyOnDateSingle(): ?MoneyOnDateSingle
    {
        return $this->money_on_date_single;
    }

    /**
     * Получает объект MoneyOnDateMarketPrc.
     *
     * @return MoneyOnDateMarketPrc|null Объект MoneyOnDateMarketPrc.
     */
    public function getMoneyOnDateMarketPrc(): ?MoneyOnDateMarketPrc
    {
        return $this->money_on_date_market_prc;
    }

    /**
     * Получает объект StockOnDate.
     *
     * @return StockOnDate|null Объект StockOnDate.
     */
    public function getStockOnDate(): ?StockOnDate
    {
        return $this->stock_on_date;
    }

    /**
     * Получает объект StockOnDateExg.
     *
     * @return StockOnDateExg|null Объект StockOnDateExg.
     */
    public function getStockOnDateExg(): ?StockOnDateExg
    {
        return $this->stock_on_date_exg;
    }

    /**
     * Получает объект StockOnDateExgSum.
     *
     * @return StockOnDateExgSum|null Объект StockOnDateExgSum.
     */
    public function getStockOnDateExgSum(): ?StockOnDateExgSum
    {
        return $this->stock_on_date_exg_sum;
    }

    /**
     * Получает объект StockOnDateMtl.
     *
     * @return StockOnDateMtl|null Объект StockOnDateMtl.
     */
    public function getStockOnDateMtl(): ?StockOnDateMtl
    {
        return $this->stock_on_date_mtl;
    }

}