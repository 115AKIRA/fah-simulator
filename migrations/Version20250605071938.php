<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605071938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_skill CHANGE id_limb_id id_limb_id INT DEFAULT NULL, CHANGE id_skill_id id_skill_id INT DEFAULT NULL, CHANGE skill_occurence skill_occurence INT DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_skill CHANGE id_limb_id id_limb_id INT NOT NULL, CHANGE id_skill_id id_skill_id INT NOT NULL, CHANGE skill_occurence skill_occurence INT NOT NULL
        SQL);
    }
}
