<?php

declare(strict_types = 1);

namespace App\Tests\Service\User;

use App\Service\User\UserClientGitHub;
use App\Service\User\UserClientMock;
use App\Service\User\UserManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

class UserManagerTest extends KernelTestCase
{
    protected function setUp(): void
    {
        self::bootKernel();
    }

    public function testUserManagerByCreatingMock(): void
    {
        $mockedUserClient = $this->createMock(UserClientGitHub::class);
        $mockedUserClient
            ->expects(self::once())
            ->method('fetchProfile')
            ->willReturn([
                'avatar_url' => 'http://my_url',
            ]);

        $manager = new UserManager($mockedUserClient);
        $avatarUrl = $manager->getAvatar('symfony');

        $this->assertEquals('http://my_url', $avatarUrl);
    }

    public function testUserManagerByUsingMockResponse(): void
    {
        $mockedHttpClient = new MockHttpClient(
            new MockResponse(
                json_encode([
                    'avatar_url' => 'http://my_url',
                ])
            )
        );

        $manager = new UserManager(new UserClientGitHub($mockedHttpClient));
        $avatarUrl = $manager->getAvatar('symfony');

        $this->assertEquals('http://my_url', $avatarUrl);
    }

    /**
     * functional
     */
    public function testUserManagerByCreatingNewInstance(): void
    {
        $manager = new UserManager(new UserClientMock());
        $avatarUrl = $manager->getAvatar('symfony');

        $this->assertEquals('http://my_url', $avatarUrl);
    }

    /**
     * integration
     */
    public function testUerManagerByLoadingServiceFromContainer(): void
    {
        $manager = self::$kernel->getContainer()->get(UserManager::class);
        $avatarUrl = $manager->getAvatar('symfony');

        $this->assertEquals('http://my_url', $avatarUrl);
    }
}
