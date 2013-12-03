<?php
use Silex\WebTestCase;
use Silex\Application;

class WineControllerWebTest extends WebTestCase{
  function createApplication(){
    include __DIR__.'/../web/index.php';
    return $app;
  }

  function testRoot(){
    $client = $this->createClient();
  }
  function testHelloBumBimz(){
    $expected = 'Hello tdd';
    $client = $this->createClient();
    $crawler = $client->request('GET','/hello/tdd');
    $this->assertTrue($client->getResponse()->isOk());
    $actual = $client->getResponse()->getContent();
    $this->assertEquals($expected,$actual);

    
  }
}
?>
