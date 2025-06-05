<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605004959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_restrict_type (id INT AUTO_INCREMENT NOT NULL, weapon_restrict VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` ADD armor_restrict_type_id INT NOT NULL, ADD weapon_restrict_type_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` ADD CONSTRAINT FK_937AB034A5DB102C FOREIGN KEY (armor_restrict_type_id) REFERENCES armor_restrict_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` ADD CONSTRAINT FK_937AB0347200557 FOREIGN KEY (weapon_restrict_type_id) REFERENCES weapon_restrict_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_937AB034A5DB102C ON `character` (armor_restrict_type_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_937AB0347200557 ON `character` (weapon_restrict_type_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` DROP FOREIGN KEY FK_937AB0347200557
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE weapon_restrict_type
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` DROP FOREIGN KEY FK_937AB034A5DB102C
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_937AB034A5DB102C ON `character`
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_937AB0347200557 ON `character`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` DROP armor_restrict_type_id, DROP weapon_restrict_type_id
        SQL);
    }
}
