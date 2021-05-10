<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CalDuskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit(env('APP_URL').'/')
                ->type('a', 3)
                ->type('b', 1)
                ->press('Execute')
                ->assertPathIs(env('APP_URL').'/calc')
                ->assertSee('4');
        });
    }
}
