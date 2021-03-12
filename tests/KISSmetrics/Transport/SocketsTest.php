<?php

namespace KISSmetrics\Transport;

class SocketsTest extends \PHPUnit_Framework_TestCase {
  public function testDefaults() {
    $km_api = Sockets::initDefault();
    $this->assertEquals('php.kissmetrics.io', $km_api->getHost());
    $this->assertEquals(80, $km_api->getPort());
  }
}
