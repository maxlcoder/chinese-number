<?php

namespace Maxlcoder\ChineseNumber;


class ChineseNumber
{
    /**
     * @param $input
     */
    public function trans($input)
    {
        // 检测是否是数字类型
        if (!is_numeric($input)) {
            throw new \Exception('input error');
        }
        $input = (int) $input;
        if ($input > 1) {
            return 'Yes';
        }
    }

}