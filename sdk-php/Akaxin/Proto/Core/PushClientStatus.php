<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/config.proto

namespace Akaxin\Proto\Core;

/**
 *站点发送PUSH给客户端的三种状态
 *
 * Protobuf enum <code>Core\PushClientStatus</code>
 */
class PushClientStatus
{
    /**
     *站点不发送push给客户端
     *
     * Generated from protobuf enum <code>PUSH_NO = 0;</code>
     */
    const PUSH_NO = 0;
    /**
     *站点发送PUSH不展示文本内容
     *
     * Generated from protobuf enum <code>PUSH_HIDDEN_TEXT = 1;</code>
     */
    const PUSH_HIDDEN_TEXT = 1;
    /**
     *站点发送PUSH显示文本内容
     *
     * Generated from protobuf enum <code>PUSH_DISPLAY_TEXT = 2;</code>
     */
    const PUSH_DISPLAY_TEXT = 2;
}

