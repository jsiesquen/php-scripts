<?php
/**
 * Class for sum each digit recursively from an data entry. For MB Soft (Bryan).
 * Support: PHP 5/7
 * Execution:
 *      $recursiveSum = new RecursiveSum();
 *      echo $recursiveSum->build(93473);
 *      // Result
 *      // 1° iteration: 26
 *      // 2° final iteration: 8
 */
class RecursiveSum
{
    var $sumNumbers = 0;
    /**
     * RecursiveSum constructor.
     */
    function __construct()
    {
    }

    /**
     * @param null $inputString
     */
    function sumDigits($inputString = null) {
        $digits = str_split($inputString);

        $this->sumNumbers = 0;
        foreach ($digits as $item) {
            $this->sumNumbers += $item;
        }
    }

    /**
     * @param null $inputString
     * @return string
     */
    function build($inputString = null)
    {
        $input = str_split($inputString);
        if (count($input) > 1) {
            $this->sumDigits($inputString);
            $this->build($this->sumNumbers);
        }
        return sprintf("%s\n", $this->sumNumbers);
    }
}

/** @var RecursiveSum $recursiveSum */
$recursiveSum = new RecursiveSum();
echo $recursiveSum->build(93473);