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
// | Version: 2.0 2021/5/28 13:36
// +----------------------------------------------------------------------

namespace V2dmIM\Core\model;

use V2dmIM\Core\enum\DeviceType;
use V2dmIM\Core\Model;

/**
 * 用户在线记录模型
 * @package app\model
 */
class OnlineModel extends Model
{

    // 用户 userID
    private string $userId;
    // 连接 ID
    private int $fd;
    // 登录设备
    private DeviceType $device;
    // 网关服务器 IP
    private string $gatewayIp;
    // 客户端登录 IP
    private string $loginIp;
    // 登录时间
    private int $loginTime;
    // 最后一次活动时间
    private int $lastActiveTime;

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getFd(): int
    {
        return $this->fd;
    }

    /**
     * @param int $fd
     */
    public function setFd(int $fd): void
    {
        $this->fd = $fd;
    }

    /**
     * @return \V2dmIM\Core\enum\DeviceType
     */
    public function getDevice(): DeviceType
    {
        return $this->device;
    }

    /**
     * @param \V2dmIM\Core\enum\DeviceType $device
     */
    public function setDevice(DeviceType $device): void
    {
        $this->device = $device;
    }

    /**
     * @return string
     */
    public function getGatewayIp(): string
    {
        return $this->gatewayIp;
    }

    /**
     * @param string $gatewayIp
     */
    public function setGatewayIp(string $gatewayIp): void
    {
        $this->gatewayIp = $gatewayIp;
    }

    /**
     * @return string
     */
    public function getLoginIp(): string
    {
        return $this->loginIp;
    }

    /**
     * @param string $loginIp
     */
    public function setLoginIp(string $loginIp): void
    {
        $this->loginIp = $loginIp;
    }

    /**
     * @return int
     */
    public function getLoginTime(): int
    {
        return $this->loginTime;
    }

    /**
     * @param int $loginTime
     */
    public function setLoginTime(int $loginTime): void
    {
        $this->loginTime = $loginTime;
    }

    /**
     * @return int
     */
    public function getLastActiveTime(): int
    {
        return $this->lastActiveTime;
    }

    /**
     * @param int $lastActiveTime
     */
    public function setLastActiveTime(int $lastActiveTime): void
    {
        $this->lastActiveTime = $lastActiveTime;
    }


}
