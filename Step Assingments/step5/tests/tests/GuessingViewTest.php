<?php


namespace Guessing;

use Guessing\Guessing as Guessing;
//use Guessing\GuessingController as Controller;


class GuessingTest extends \PHPUnit\Framework\TestCase {

    const SEED = 1234;

//    public function test_reset() {
//        $guessing = new Guessing(self::SEED);
//        $controller = new Controller($guessing, array('value' => 12));
//        $this->assertFalse($controller->isReset());
//
//        $guessing = new Guessing(self::SEED);
//        $controller = new Controller($guessing, array('clear' => 'New Game'));
//        $this->assertTrue($controller->isReset());
//    }

    public function test_start_screen(){

        $guessing = new Guessing(self::SEED);
        $game_view = new GuessingView($guessing);

        // game start
        $view = $game_view->present();
        $this->assertContains('guess the number', $view);

        // too low
        $guessing->guess(22);
        $this->assertContains('low', $game_view->present());

        //too high
        $guessing->guess(55);
        $this->assertContains('high', $game_view->present());

        //invalid guess
        $guessing->guess(999);
        $this->assertContains('invalid!', $game_view->present());

        //invalid guess
        $guessing->guess('asdfasd');
        $this->assertContains('invalid!', $game_view->present());

        //invalid guess
        $guessing->guess(-3);
        $this->assertContains('invalid!', $game_view->present());

        //too high
        $guessing->guess(55);
        $this->assertContains('high', $game_view->present());

        // correct
        $guessing->guess(23);
        $this->assertContains('correct', $game_view->present());
    }

}