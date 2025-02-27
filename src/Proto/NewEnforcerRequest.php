<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: casbin.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.NewEnforcerRequest</code>
 */
class NewEnforcerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string modelText = 1;</code>
     */
    private $modelText = '';
    /**
     * Generated from protobuf field <code>int32 adapterHandle = 2;</code>
     */
    private $adapterHandle = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $modelText
     *     @type int $adapterHandle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Casbin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string modelText = 1;</code>
     * @return string
     */
    public function getModelText()
    {
        return $this->modelText;
    }

    /**
     * Generated from protobuf field <code>string modelText = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModelText($var)
    {
        GPBUtil::checkString($var, True);
        $this->modelText = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 adapterHandle = 2;</code>
     * @return int
     */
    public function getAdapterHandle()
    {
        return $this->adapterHandle;
    }

    /**
     * Generated from protobuf field <code>int32 adapterHandle = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAdapterHandle($var)
    {
        GPBUtil::checkInt32($var);
        $this->adapterHandle = $var;

        return $this;
    }

}

