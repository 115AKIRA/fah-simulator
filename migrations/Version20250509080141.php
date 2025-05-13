<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509080141 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE effect (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, is_do_t TINYINT(1) NOT NULL, value INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE equipment_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE characters
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor ADD equipment_type_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor ADD CONSTRAINT FK_BF27FEFCB337437C FOREIGN KEY (equipment_type_id) REFERENCES equipment_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BF27FEFCB337437C ON armor (equipment_type_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` ADD image VARCHAR(255) NOT NULL, ADD back_image VARCHAR(255) NOT NULL, ADD attack INT NOT NULL, ADD agility INT NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE armor DROP FOREIGN KEY FK_BF27FEFCB337437C
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE characters (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, back_image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, attack INT NOT NULL, agility INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE effect
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE equipment_type
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE item
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `character` DROP image, DROP back_image, DROP attack, DROP agility
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_BF27FEFCB337437C ON armor
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor DROP equipment_type_id
        SQL);
    }
}
