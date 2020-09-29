<?php
use PHPUnit\Framework\TestCase;
use \App\model\GetCon;
use \App\controller\classes\Account;
use \App\controller\classes\Album;
use \App\controller\classes\Author;
use \App\controller\classes\User;

class ModelTest extends TestCase
{
  protected $account,$con,$c,$album,$artist,$user;
  public function test_model(){

    $this->c = new GetCon;
    $con= $this->c->cont();

    $this->account =  new Account($con);
    $this->author =  new Author($con,1);
    $this->album =  new Album($con,2);
    $this->user = new User($con,'masrur');
    require(dirname(__FILE__)."/../../app/model/nowPlayingBar.php");

    $v = timeFromOffset();
    $this->assertEquals($v,0);
  }
}
?>
