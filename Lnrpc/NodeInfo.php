<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NodeInfo</code>
 */
class NodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *An individual vertex/node within the channel graph. A node is
     *connected to other nodes by one or more channel edges emanating from it. As
     *the graph is directed, a node will also have an incoming edge attached to
     *it for each outgoing edge.
     *
     * Generated from protobuf field <code>.lnrpc.LightningNode node = 1;</code>
     */
    private $node = null;
    /**
     *&#47; The total number of channels for the node.
     *
     * Generated from protobuf field <code>uint32 num_channels = 2;</code>
     */
    private $num_channels = 0;
    /**
     *&#47; The sum of all channels capacity for the node, denominated in satoshis.
     *
     * Generated from protobuf field <code>int64 total_capacity = 3;</code>
     */
    private $total_capacity = 0;
    /**
     *&#47; A list of all public channels for the node.
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelEdge channels = 4;</code>
     */
    private $channels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\LightningNode $node
     *          *
     *          An individual vertex/node within the channel graph. A node is
     *          connected to other nodes by one or more channel edges emanating from it. As
     *          the graph is directed, a node will also have an incoming edge attached to
     *          it for each outgoing edge.
     *     @type int $num_channels
     *          &#47; The total number of channels for the node.
     *     @type int|string $total_capacity
     *          &#47; The sum of all channels capacity for the node, denominated in satoshis.
     *     @type \Lnrpc\ChannelEdge[]|\Google\Protobuf\Internal\RepeatedField $channels
     *          &#47; A list of all public channels for the node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *An individual vertex/node within the channel graph. A node is
     *connected to other nodes by one or more channel edges emanating from it. As
     *the graph is directed, a node will also have an incoming edge attached to
     *it for each outgoing edge.
     *
     * Generated from protobuf field <code>.lnrpc.LightningNode node = 1;</code>
     * @return \Lnrpc\LightningNode
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     **
     *An individual vertex/node within the channel graph. A node is
     *connected to other nodes by one or more channel edges emanating from it. As
     *the graph is directed, a node will also have an incoming edge attached to
     *it for each outgoing edge.
     *
     * Generated from protobuf field <code>.lnrpc.LightningNode node = 1;</code>
     * @param \Lnrpc\LightningNode $var
     * @return $this
     */
    public function setNode($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\LightningNode::class);
        $this->node = $var;

        return $this;
    }

    /**
     *&#47; The total number of channels for the node.
     *
     * Generated from protobuf field <code>uint32 num_channels = 2;</code>
     * @return int
     */
    public function getNumChannels()
    {
        return $this->num_channels;
    }

    /**
     *&#47; The total number of channels for the node.
     *
     * Generated from protobuf field <code>uint32 num_channels = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_channels = $var;

        return $this;
    }

    /**
     *&#47; The sum of all channels capacity for the node, denominated in satoshis.
     *
     * Generated from protobuf field <code>int64 total_capacity = 3;</code>
     * @return int|string
     */
    public function getTotalCapacity()
    {
        return $this->total_capacity;
    }

    /**
     *&#47; The sum of all channels capacity for the node, denominated in satoshis.
     *
     * Generated from protobuf field <code>int64 total_capacity = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_capacity = $var;

        return $this;
    }

    /**
     *&#47; A list of all public channels for the node.
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelEdge channels = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     *&#47; A list of all public channels for the node.
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelEdge channels = 4;</code>
     * @param \Lnrpc\ChannelEdge[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\ChannelEdge::class);
        $this->channels = $arr;

        return $this;
    }

}

