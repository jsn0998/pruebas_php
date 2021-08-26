<?

namespace Tests;
use PHPUnit\Framework\TestCase;
use App\Interfaces\CarrierInterface;
use App\Mobile;
use Mockery as m;
use Mockery\Adapter\Phpunit\MockeryTestCase;

// use PHPUnit\Framework\TestCase;
// declare(strict_types=1);

class MobileTest extends TestCase
{

	/** @test **/
	public function it_returns_null_when_name_empty():void
	{

		$mobile = new Mobile(new CarrierInterface());             
    
		$this->assertNull($mobile->makeCallByName(''));
		
	} 

	/** @test **/
	public function it_returns_error_when_contact_not_exit(): void
    {
		$mobile = new Mobile(new CarrierInterface());
        $this->assertIsObject($mobile->makeCallByName('Fernando'));
    }

	/** @test **/
	public function it_returns_error_when_message_not_send():void
	{

		$mobile = new Mobile(new CarrierInterface());             
		$this->assertIsObject($mobile->makeMessageByNumber('0951785541','mensaje nuevo'));
		
	} 

	/** @test **/
	public function text_contact():void
	{
		// Create a stub for the Mobile class.
		$stub = $this->createMock(Mobile::class);
		// Configure the stub.
        $stub->method('makeCallByName')
             ->will($this->returnArgument(0));

        $this->assertSame('Fernando', $stub->makeCallByName('Fernando'));
		
	} 

	/** @test **/
	public function it_returns_true_when_number_exist()
    {
		$mobile = new Mobile(new CarrierInterface());
        $this->assertNotFalse($mobile->validateNumber('0951785541'));
	}

	/** @test **/
	public function it_returns_true_when_number_contact_not_found()
    {
		$mobile = new Mobile(new CarrierInterface());
        $this->assertNotFalse($mobile->verifyContactNotFound('Pedro'));
	}

	


	

}
