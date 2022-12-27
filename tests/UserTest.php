<?php

use PHPUnit\Framework\TestCase;
use PhpUnitTesting\User;

class UserTest extends TestCase
{
    public function test_user_olish()
    {
        $user = new User(20, "Abdulloh");
        $this->assertSame(20,$user->age);
        $this->assertSame('Abdulloh',$user->name);
    }

    public function test_filime_boshmi()
    {
        $user = new User(20, "Abdulloh");

        $this->assertEmpty($user->favorite_movies);
    }

    public function test_user_ism_qaytarobtim()
    {
        $user = new User(20, "Abdulloh");

        $this->assertStringContainsString('Abdulloh', $user->tellName());
    }


    public function test_tellName_string_qaytarobti()
    {
        $user = new User(20, "Abdulloh");

        $this->assertIsString($user->tellName());
    }

    public function test_men_shoshim()
    {
        $user = new User(20, "Abdulloh");

        $this->assertIsString($user->tellAge());
        $this->assertStringContainsString(20,$user->tellAge());
    }

    public function test_yaxshi_korgan_kino()
    {
        $user = new User(20, "Abdulloh");
        $ish = $user->addFavoriteMovie('cinema');
        $this->assertTrue($ish);

        $this->assertContains('cinema',$user->favorite_movies);
    }

    public function test_yaxshi_korgan_kinosi()
    {
        $user = new User(20, "Abdulloh");
         $user->addFavoriteMovie('cinema2');
         $user->addFavoriteMovie('cinema3');

        $act = $user->removeFavoriteMovie('cinema2');
        $this->assertTrue($act);
        $this->assertNotContains('cinema2',$user->favorite_movies);
        $this->assertCount(1,$user->favorite_movies);


    }
}














