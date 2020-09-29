<?php
use PHPUnit\Framework\TestCase;
use \App\model\GetCon;
use \App\controller\classes\Account;
use \App\controller\classes\Album;
use \App\controller\classes\Author;
use \App\controller\classes\User;

class ControllerTest extends \PHPUnit\Framework\TestCase
{

  protected $account,$con,$c,$album,$artist,$user;

  public function setUp(): void{
    $this->c = new GetCon;
    $this->con= $this->c->cont();

    $this->account =  new Account($this->con);
    $this->author =  new Author($this->con,1);
    $this->album =  new Album($this->con,2);
    $this->user = new User($this->con,'masrur');

  }

  public function test_login_account(){
    $this->assertTrue($this->account->login('masrur','123456'));
    $this->assertFalse($this->account->login('masrur',md5('123456')));

  }

  public function test_register_account(){
    $this->assertFalse($this->account->register('masrur','ahmed','abir','email@gmail.com','email@gmail.com','123','123'));
    $this->assertFalse($this->account->register('masrur','ahmed','abir','email@gmail.com','email@gmail.com','123456','123456'));
    $this->assertFalse($this->account->register('masrur','ahmed','abir','email@gmail.com','12email@gmail.com','123456','123456'));
    $this->assertFalse($this->account->register('masrur','ahmed','abir','email11@gmail.com','email@gmail.com','123456','123456'));
    $this->assertFalse($this->account->register('             masrur1        ','ahmed','abir','email12@gmail.com','email12@gmail.com','123456','123456'));

  }

  public function test_album(){
    $this->assertEquals($this->album->getTitle(),'A Study in Scarlet');
    $this->assertEquals($this->album->getAuthor()->getName(),'Bruce Lee');
    $this->assertEquals($this->album->getGenre(),'10');
    $this->assertEquals($this->album->getNumberOfSongs(),5);

  }
  public function test_author_nameID(){
    $this->assertEquals($this->author->getName(), 'Mickey Mouse');
    $this->assertEquals($this->author->getID(), 1);

  }

  public function test_author_books(){
    $this->assertEquals(sizeof($this->author->getSongIds()),5);
    $this->assertEquals($this->author->getSongIds(),[2,5,1,3,4]);

  }

  public function test_user_ID_Name_Owner(){
    $this->assertEquals($this->user->getUsername(), 'masrur');
    $this->assertEquals($this->user->getEmail(), 'masrur.abeer@gmail.com');
    $this->assertEquals($this->user->getFirstAndLastName(), 'Masrur Ahmed');
    //fwrite(STDERR, print_r($this->user->getFirstAndLastName(), TRUE));

  }


}
?>
