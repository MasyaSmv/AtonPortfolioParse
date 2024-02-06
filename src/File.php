<?php

namespace Aton\Portfolio\Parse;

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
use Aton\Portfolio\Parse\Interfaces\File\FileInterface;
use Aton\Portfolio\Parse\Traits\File\GetFuncFileTrait;
use Aton\Portfolio\Parse\Traits\File\SetFuncFileTrait;
use Exception;
use RuntimeException;
use SimpleXMLElement;

class File implements FileInterface
{
    use GetFuncFileTrait;
    use SetFuncFileTrait;
    
    /**
     * @var array Массив с данными файла.
     */
    private array $default_file;
    
    /**
     * @var Trades|null Объект Trades.
     */
    private ?Trades $trades = null;
    
    /**
     * @var MoneyInOutIo|null Объект MoneyInOutIo.
     */
    private ?MoneyInOutIo $money_in_out_io = null;
    
    /**
     * @var TradesRegRepo|null Объект TradesRegRepo.
     */
    private ?TradesRegRepo $trades_reg_repo = null;
    
    /**
     * @var TradesNonRegRepo|null Объект TradesNonRegRepo.
     */
    private ?TradesNonRegRepo $trades_non_reg_repo = null;
    
    /**
     * @var StockInOut|null Объект StockInOut.
     */
    private ?StockInOut $stock_in_out = null;
    
    /**
     * @var MoneyInOut|null Объект MoneyInOut.
     */
    private ?MoneyInOut $money_in_out = null;
    
    /**
     * @var MoneyConvert|null Объект MoneyConvert.
     */
    private ?MoneyConvert $money_convert = null;
    
    /**
     * @var ClientMoneyConvert|null Объект ClientMoneyConvert.
     */
    private ?ClientMoneyConvert $client_money_convert = null;
    
    /**
     * @var CorpActionIn|null Объект CorpActionIn.
     */
    private ?CorpActionIn $corp_action_in = null;
    
    /**
     * @var CorpActionOut|null Объект CorpActionOut.
     */
    private ?CorpActionOut $corp_action_out = null;
    
    /**
     * @var StockPayingOff|null Объект StockPayingOff.
     */
    private ?StockPayingOff $stock_paying_off = null;
    
    /**
     * @var MoneyOnDate|null Объект MoneyOnDate.
     */
    private ?MoneyOnDate $money_on_date = null;
    
    /**
     * @var CommonData|null Объект CommonData.
     */
    private ?CommonData $common_data = null;
    
    /**
     * @var MoneyOnDateSingle|null Объект MoneyOnDateSingle.
     */
    private ?MoneyOnDateSingle $money_on_date_single = null;
    
    /**
     * @var MoneyOnDateMarketPrc|null Объект MoneyOnDateMarketPrc.
     */
    private ?MoneyOnDateMarketPrc $money_on_date_market_prc = null;
    
    /**
     * @var StockOnDate|null Объект StockOnDate.
     */
    private ?StockOnDate $stock_on_date = null;
    
    /**
     * @var StockOnDateExg|null Объект StockOnDateExg.
     */
    private ?StockOnDateExg $stock_on_date_exg = null;
    
    /**
     * @var StockOnDateExgSum|null Объект StockOnDateExgSum.
     */
    private ?StockOnDateExgSum $stock_on_date_exg_sum = null;
    
    /**
     * @var StockOnDateMTL|null Объект StockOnDateMTL.
     */
    private ?StockOnDateMTL $stock_on_date_mtl = null;
    
    /**
     * Конструктор.
     *
     * @param string $file Путь к файлу.
     */
    public function __construct(string $file)
    {
        $this->setDefaultFile($file);
        $this->createSwitchClassTypeFile();
    }

    /**
     * Проверяет, существует ли файл, доступен ли он для чтения и имеет ли расширение xml.
     *
     * @param string $fileName Имя файла.
     * @return string Имя файла.
     * @throws RuntimeException Если файл не существует, не может быть прочитан или не имеет расширения xml.
     */
    public function assertFile(string $fileName): string
    {
        if (!is_file($fileName)) {
            throw new RuntimeException('Файл "' . $fileName . '" не существует.');
        }

        if (!is_readable($fileName)) {
            throw new RuntimeException('Не удалось открыть "' . $fileName . '" для чтения.');
        }

        if (pathinfo($fileName, PATHINFO_EXTENSION) != 'xml') {
            throw new RuntimeException('Ожидается тип файла xml вместо "' . pathinfo($fileName, PATHINFO_EXTENSION));
        }

        return $fileName;
    }

    /**
     * Преобразует xml-файл в массив.
     *
     * @param string $file Путь к файлу.
     * @return array Преобразованный массив.
     * @throws Exception
     */
    public function fileXmlToArray(string $file): array
    {
        libxml_use_internal_errors(true);
        return $this->objToArray(new SimpleXMLElement($file, 0, true, 'BIS', true));
    }

    /**
     * Устанавливает свойство файла.
     *
     * @param string $defaultFile Путь к файлу.
     * @return $this Текущий объект.
     * @throws Exception
     */
    public function setDefaultFile(string $defaultFile): File
    {
        $this->default_file = $this->fileXmlToArray($this->assertFile($defaultFile));
        return $this;
    }

    /**
     * Создает объекты классов в зависимости от данных файла.
     *
     * @return void
     */
    public function createSwitchClassTypeFile()
    {
        foreach ($this->getDefaultFile() as $key => $type) {
            switch ($type) {
                case 'Trades':
                    $this->setTrades(new Trades($type));
                    break;
                case 'MoneyInOut_io':
                    $this->setMoneyInOutIo(new MoneyInOutIo($type));
                    break;
                case 'TradesRegRepo':
                    $this->setTradesRegRepo(new TradesRegRepo($type));
                    break;
                case 'TradesNonRegRepo':
                    $this->setTradesNonRegRepo(new TradesNonRegRepo($type));
                    break;
                case 'StockInOut':
                    $this->setStockInOut(new StockInOut($type));
                    break;
                case 'MoneyInOut':
                    $this->setMoneyInOut(new MoneyInOut($type));
                    break;
                case 'MoneyConvert':
                    $this->setMoneyConvert(new MoneyConvert($type));
                    break;
                case 'ClientMoneyConvert':
                    $this->setClientMoneyConvert(new ClientMoneyConvert($type));
                    break;
                case 'CorpActionIn':
                    $this->setCorpActionIn(new CorpActionIn($type));
                    break;
                case 'CorpActionOut':
                    $this->setCorpActionOut(new CorpActionOut($type));
                    break;
                case 'StockPayingOff':
                    $this->setStockPayingOff(new StockPayingOff($type));
                    break;
                case 'MoneyOnDate':
                    $this->setMoneyOnDate(new MoneyOnDate($type));
                    break;
                case 'CommonData':
                    $this->setCommonData(new CommonData($type));
                    break;
                case 'MoneyOnDate_single':
                    $this->setMoneyOnDateSingle(new MoneyOnDateSingle($type));
                    break;
                case 'MoneyOnDate_MarketPrc':
                    $this->setMoneyOnDateMarketPrc(new MoneyOnDateMarketPrc($type));
                    break;
                case 'StockOnDate':
                    $this->setStockOnDate(new StockOnDate($type));
                    break;
                case 'StockOnDate_Exg':
                    $this->setStockOnDateExg(new StockOnDateExg($type));
                    break;
                case 'StockOnDate_Exg_Sum':
                    $this->setStockOnDateExgSum(new StockOnDateExgSum($type));
                    break;
                case 'StockOnDate_MTL':
                    $this->setStockOnDateMtl(new StockOnDateMTL($type));
                    break;
            }
        }
    }

    /**
     * Преобразует объект в массив.
     *
     * @param mixed $obj Преобразуемый объект.
     * @return array|mixed Преобразованный массив.
     */
    public function objToArray($obj)
    {
        if (is_object($obj) || is_array($obj)) {
            $ret = (array)$obj;
            foreach ($ret as &$item) {
                $item = $this->objToArray($item);
            }
            return $ret;
        }
        return $obj;
    }
}