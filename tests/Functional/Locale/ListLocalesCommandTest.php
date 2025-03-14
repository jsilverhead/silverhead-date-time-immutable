<?php

namespace App\Tests\Functional\Locale;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ListLocalesCommandTest extends KernelTestCase
{
    public function testCreateLocaleSuccess(): void
    {
        $kernel = self::bootKernel();
        $application = new Application($kernel);
        $command = $application->find("app:list-locale");
        $commandTester = new CommandTester($command);

        $commandTester->execute([]);

        $this->assertSame(expected: 0, actual: $commandTester->getStatusCode());
    }
}
