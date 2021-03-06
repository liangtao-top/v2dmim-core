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
// | Version: 2.0 2021/5/28 12:22
// +----------------------------------------------------------------------

namespace V2dmIM\Core\enum;

use V2dmIM\Core\Enum;

/**
 * 设备类型
 * @package app\struct
 */
class DeviceType extends Enum
{
    const WEB = 'Web';

    const APP = 'App';

    const CLIENT = 'Client';
}
