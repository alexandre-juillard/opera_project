<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305071135 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE profile ADD personal_id INT DEFAULT NULL');
        // $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0F5D430949 FOREIGN KEY (personal_id) REFERENCES profile (id)');
        // $this->addSql('CREATE UNIQUE INDEX UNIQ_8157AA0F5D430949 ON profile (personal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0F5D430949');
        $this->addSql('DROP INDEX UNIQ_8157AA0F5D430949 ON profile');
        $this->addSql('ALTER TABLE profile DROP personal_id');
    }
}
