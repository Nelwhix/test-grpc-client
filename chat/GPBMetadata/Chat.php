<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: chat.proto

namespace GPBMetadata;

class Chat
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x93\x01\x0A\x0Achat.proto\x12\x04chat\"\x17\x0A\x07Message\x12\x0C\x0A\x04body\x18\x01 \x01(\x0929\x0A\x0BChatService\x12*\x0A\x08SayHello\x12\x0D.chat.Message\x1A\x0D.chat.Message\"\x00B#Z!github.com/Nelwhix/grpc-tuts/chatb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

