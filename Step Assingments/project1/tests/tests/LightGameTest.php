<?php

use LightGame\LightGame as lightgame;

class LightGameTest extends \PHPUnit\Framework\TestCase
{
    public function test_lightgame(){

        $lights = new \LightGame\Lights();
        $lights->addLight(1,1);
        $lights->addLight(1,2);

        $result = $lights->lightExists(1,1);
        $this->assertEquals(true, $result);

        $result = $lights->lightExists(1,2);
        $this->assertEquals(true, $result);

        $result = $lights->lightExists(1,3);
        $this->assertEquals(false, $result);

        $result = $lights->lightExists(2,3);
        $this->assertEquals(false, $result);

        $game = new \LightGame\LightGame($lights, __DIR__.'/', '5x5easy-1.json', 'player name');
        $player_name = $game->getPlayerName();
        $height = $game->getHeight();
        $width = $game->getWidth();

        $this->assertEquals('player name', $player_name);
        $this->assertEquals($height, 5);
        $this->assertEquals($width,5);

        $game_lights = $game->getLights();
        $game_lights_result = $game_lights->lightExists(1,1);
        $this->assertEquals(true, $game_lights_result);

        $game_lights_result = $game_lights->lightExists(2,1);
        $this->assertEquals(false, $game_lights_result);
    }

}