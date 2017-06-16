<?php
/**
 * @author joostvanveen
 */

namespace App;

class FizzBuzz
{

    public function parse ($integer) {

        if ((int) $integer <= 0) {
            throw new \Exception('You need to pass a natural number!');
        }

        $integer = (int) $integer;
        if ($integer === 21) {
            return 'Blackjack!';
        }
        if ($integer % 3 == 0 && $integer % 5 == 0) {
            return 'fizzbuzz';
        }
        if ($integer % 3 == 0) {
            return 'fizz';
        }
        if ($integer % 5 == 0) {
            return 'buzz';
        }

        return $integer;
    }
}
