<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Echo;

/**
 */
class EchoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Echo\EchoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function echo(\Echo\EchoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/echo.Echo/echo',
        $argument,
        ['\Echo\EchoResponse', 'decode'],
        $metadata, $options);
    }

}
