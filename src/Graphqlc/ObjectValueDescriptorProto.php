<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphqlc/descriptor.proto

namespace Graphqlc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>graphqlc.ObjectValueDescriptorProto</code>
 */
class ObjectValueDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .graphqlc.ObjectFieldDescriptorProto fields = 1;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Graphqlc\ObjectFieldDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Graphqlc\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .graphqlc.ObjectFieldDescriptorProto fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Generated from protobuf field <code>repeated .graphqlc.ObjectFieldDescriptorProto fields = 1;</code>
     * @param \Graphqlc\ObjectFieldDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Graphqlc\ObjectFieldDescriptorProto::class);
        $this->fields = $arr;

        return $this;
    }

}

