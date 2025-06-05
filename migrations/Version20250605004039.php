<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605004039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_effect (id_weapon_id INT NOT NULL, id_effect_id INT NOT NULL, value INT NOT NULL, INDEX IDX_8B95BED5158D9E54 (id_weapon_id), INDEX IDX_8B95BED575DC041C (id_effect_id), PRIMARY KEY(id_weapon_id, id_effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect ADD CONSTRAINT FK_8B95BED5158D9E54 FOREIGN KEY (id_weapon_id) REFERENCES weapon (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect ADD CONSTRAINT FK_8B95BED575DC041C FOREIGN KEY (id_effect_id) REFERENCES effect (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect DROP FOREIGN KEY FK_8B95BED5158D9E54
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect DROP FOREIGN KEY FK_8B95BED575DC041C
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE weapon_effect
        SQL);
    }
}
