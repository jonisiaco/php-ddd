<?php

namespace App\User\Test;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser(): void
    {
        $model = new \App\User\Domain\Model\User();
        $this->assertTrue($model->createdAt() instanceof \DateTime);
    }
}