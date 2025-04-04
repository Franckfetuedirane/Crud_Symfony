<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250404175158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Supprimez la colonne roles
        $this->addSql('ALTER TABLE user DROP roles');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_8D93D649E7927C74 ON `user`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `user` DROP roles, CHANGE email email VARCHAR(255) NOT NULL
        SQL);
    }
}
