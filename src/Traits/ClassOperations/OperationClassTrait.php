<?php

namespace Aton\Portfolio\Parse\Traits\ClassOperations;

use Carbon\Carbon;

trait OperationClassTrait
{
    /**
     * @param $data
     * @return true
     */
    private function addSetData($data): bool
    {
        foreach ($data as $key => $value) {
            $setFuncName = 'set' . $key;
            self::$keys[] = $key;

            $this->$setFuncName($value);
        }

        return true;
    }

    /**
     * @return Carbon
     */
    private function searchOperDateTimeSort(): Carbon
    {
        if ($this->getOperDateSort() && $this->getOperTimeSort()) {
            $date = $this->getOperDateSort();
            $time = $this->getOperTimeSort();
        }else{
            [$date, $time] = $this->searchDateTimeInOperNum();
        }

        $date = Carbon::createFromFormat('d.m.Y H:i:s', $date)->format('Y-m-d');
        $time = Carbon::createFromFormat('d.m.Y H:i:s', $time)->format('H:i:s');
        return Carbon::parse($date . $time);
    }
}