<?php

require __DIR__ . '/../App/FizzBuzz.php';

/**
 * @author joostvanveen
 */
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    private $fizzbuzz;

    public function setUp () {
        $this->fizzbuzz = new App\FizzBuzz;
    }

    /** @test */
    public function it_returns_the_value()
    {
        $this->assertSame(1, $this->fizzbuzz->parse(1));
    }
    
    /** @test */
    public function it_throws_exception_on_non_integer ()
    {
        $this->expectException('Exception');
        $this->fizzbuzz->parse('foobar');
    }

    /** @test */
    public function it_returns_fizz ()
    {
        $this->assertSame('fizz', $this->fizzbuzz->parse(3));
        $this->assertSame('fizz', $this->fizzbuzz->parse(18));
        $this->assertSame('fizz', $this->fizzbuzz->parse(33333693));
    }

    /** @test */
    public function it_returns_buzz ()
    {
        $this->assertSame('buzz', $this->fizzbuzz->parse(5));
        $this->assertSame('buzz', $this->fizzbuzz->parse(50));
    }

    /** @test */
    public function it_returns_fizzbuzz ()
    {
        $this->assertSame('fizzbuzz', $this->fizzbuzz->parse(15));
        $this->assertSame('fizzbuzz', $this->fizzbuzz->parse(45));
    }

    /** @test */
    public function it_returns_blackjack ()
    {
        $this->assertSame('Blackjack!', $this->fizzbuzz->parse(21));
    }


}
