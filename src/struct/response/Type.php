<?php
declare(strict_types=1);
// +----------------------------------------------------------------------
// | CodeEngine
// +----------------------------------------------------------------------
// | Copyright 艾邦
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: TaoGe <liangtao.gz@foxmail.com>
// +----------------------------------------------------------------------
// | Version: 2.0 2021/6/2 14:12
// +----------------------------------------------------------------------

namespace V2dmIM\Core\struct\response;

use V2dmIM\Core\Enum;

class Type extends Enum
{
    // 应答报文
    const ASK = 0;
    // 通知报文
    const NOTIFY = 1;
}
