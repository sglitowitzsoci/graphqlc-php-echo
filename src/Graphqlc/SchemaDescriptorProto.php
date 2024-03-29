<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: graphqlc/descriptor.proto

namespace Graphqlc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>graphqlc.SchemaDescriptorProto</code>
 */
class SchemaDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .graphqlc.DirectiveDescriptorProto directives = 1;</code>
     */
    private $directives;
    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto query = 2;</code>
     */
    private $query = null;
    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto mutation = 3;</code>
     */
    private $mutation = null;
    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto subscription = 4;</code>
     */
    private $subscription = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Graphqlc\DirectiveDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $directives
     *     @type \Graphqlc\ObjectTypeDefinitionDescriptorProto $query
     *     @type \Graphqlc\ObjectTypeDefinitionDescriptorProto $mutation
     *     @type \Graphqlc\ObjectTypeDefinitionDescriptorProto $subscription
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Graphqlc\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .graphqlc.DirectiveDescriptorProto directives = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDirectives()
    {
        return $this->directives;
    }

    /**
     * Generated from protobuf field <code>repeated .graphqlc.DirectiveDescriptorProto directives = 1;</code>
     * @param \Graphqlc\DirectiveDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDirectives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Graphqlc\DirectiveDescriptorProto::class);
        $this->directives = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto query = 2;</code>
     * @return \Graphqlc\ObjectTypeDefinitionDescriptorProto
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto query = 2;</code>
     * @param \Graphqlc\ObjectTypeDefinitionDescriptorProto $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Graphqlc\ObjectTypeDefinitionDescriptorProto::class);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto mutation = 3;</code>
     * @return \Graphqlc\ObjectTypeDefinitionDescriptorProto
     */
    public function getMutation()
    {
        return $this->mutation;
    }

    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto mutation = 3;</code>
     * @param \Graphqlc\ObjectTypeDefinitionDescriptorProto $var
     * @return $this
     */
    public function setMutation($var)
    {
        GPBUtil::checkMessage($var, \Graphqlc\ObjectTypeDefinitionDescriptorProto::class);
        $this->mutation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto subscription = 4;</code>
     * @return \Graphqlc\ObjectTypeDefinitionDescriptorProto
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Generated from protobuf field <code>.graphqlc.ObjectTypeDefinitionDescriptorProto subscription = 4;</code>
     * @param \Graphqlc\ObjectTypeDefinitionDescriptorProto $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Graphqlc\ObjectTypeDefinitionDescriptorProto::class);
        $this->subscription = $var;

        return $this;
    }

}

