<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220313113850 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE country (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, code VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE country');
    }
}
