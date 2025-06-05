<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605011458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE limb_skill (id_limb_id INT NOT NULL, id_skill_id INT NOT NULL, rating INT NOT NULL, skill_trigger VARCHAR(255) NOT NULL, skill_occurence INT NOT NULL, INDEX IDX_EA91FA9949919E5B (id_limb_id), INDEX IDX_EA91FA9955E2DD7 (id_skill_id), PRIMARY KEY(id_limb_id, id_skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_skill ADD CONSTRAINT FK_EA91FA9949919E5B FOREIGN KEY (id_limb_id) REFERENCES limb (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_skill ADD CONSTRAINT FK_EA91FA9955E2DD7 FOREIGN KEY (id_skill_id) REFERENCES skill (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill ADD formula VARCHAR(255) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_skill DROP FOREIGN KEY FK_EA91FA9949919E5B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_skill DROP FOREIGN KEY FK_EA91FA9955E2DD7
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE limb_skill
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill DROP formula
        SQL);
    }
}
