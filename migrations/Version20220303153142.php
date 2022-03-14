<?php

declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220303153142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'create new table: todo';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            'CREATE TABLE todo (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, task VARCHAR(255) NOT NULL, is_completed BOOLEAN NOT NULL, created_at DATETIME NOT NULL, completed_at DATETIME NOT NULL, deleted_at DATETIME NOT NULL)'
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE todo');
    }
}
