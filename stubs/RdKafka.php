<?php

use RdKafka\ConsumerTopic;
use RdKafka\Exception;
use RdKafka\Metadata;
use RdKafka\Topic;
use RdKafka\TopicConf;
use RdKafka\Queue;

abstract class RdKafka
{
    /**
     * @param string $broker_list
     *
     * @return int
     */
    public function addBrokers($broker_list)
    {
    }

    /**
     * @param bool  $all_topics
     * @param Topic $only_topic
     * @param int   $timeout_ms
     *
     * @throws Exception
     * @return Metadata
     */
    public function getMetadata($all_topics, $only_topic = null, $timeout_ms)
    {
    }

    /**
     * @param bool  $all_topics
     * @param Topic $only_topic
     * @param int   $timeout_ms
     *
     * @throws Exception
     * @return Metadata
     *
     * @deprecated Please use getMetadata() instead
     */
    public function metadata($all_topics, $only_topic = null, $timeout_ms)
    {
    }

    /**
     * @return int
     */
    public function getOutQLen()
    {
    }

    /**
     * @return int
     *
     * @deprecated Please use getOutQLen() instead
     */
    public function outQLen()
    {
    }

    /**
     * @return Queue
     */
    public function newQueue()
    {
    }

    /**
     * @param string    $topic_name
     * @param TopicConf $topic_conf
     *
     * @return ConsumerTopic
     */
    public function newTopic($topic_name, TopicConf $topic_conf = null)
    {
    }

    /**
     * @param int $timeout_ms
     *
     * @return void
     */
    public function poll($timeout_ms)
    {
    }

    /**
     * @param int $level
     *
     * @return void
     */
    public function setLogLevel($level)
    {
    }
}
