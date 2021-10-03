<?php

namespace tests\Unit;

use tests\TestCase;
use Takuya\GithubActionSampleTestingCode\MySample;

class MyFirstTest  extends  TestCase {
  public function test_sample_function(){
  
    
    $obj = new MySample();
    $this->assertEquals('Hello', $obj->name);
    
  }
}