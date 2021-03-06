<?php
namespace Imi\Server\Event\Param;

use Imi\Event\EventParam;

class BufferEventParam extends EventParam
{
    /**
     * 服务器对象
     * @var \Imi\Server\Base
     */
    public $server;

    /**
     * 客户端连接的标识符
     * @var int
     */
    public $fd;
}