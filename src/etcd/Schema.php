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
// | Version: 2.0 2021/11/8 17:48
// +----------------------------------------------------------------------
namespace V2dmIM\Core\etcd;

use V2dmIM\Core\Enum;

/**
 * 服务目录
 * @method static GATEWAY()
 * @method static HTTP()
 */
class Schema extends Enum
{

    // 长连接网关服务
    const GATEWAY = 'gateway';

    // 短连接API服务
    const HTTP = 'http';

}