<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605010102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE armor_effect (id_armor_id INT NOT NULL, id_effect_id INT NOT NULL, value INT NOT NULL, INDEX IDX_F5E5F36DA571DAF6 (id_armor_id), INDEX IDX_F5E5F36D75DC041C (id_effect_id), PRIMARY KEY(id_armor_id, id_effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect ADD CONSTRAINT FK_F5E5F36DA571DAF6 FOREIGN KEY (id_armor_id) REFERENCES armor (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect ADD CONSTRAINT FK_F5E5F36D75DC041C FOREIGN KEY (id_effect_id) REFERENCES effect (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect DROP FOREIGN KEY FK_F5E5F36DA571DAF6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect DROP FOREIGN KEY FK_F5E5F36D75DC041C
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE armor_effect
        SQL);
    }
}
