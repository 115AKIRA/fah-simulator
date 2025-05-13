<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509074520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE armor (id INT AUTO_INCREMENT NOT NULL, armor_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, blunt_res INT NOT NULL, slashing_res INT NOT NULL, piercing_res INT NOT NULL, fire_res INT NOT NULL, otherworldly_res INT NOT NULL, INDEX IDX_BF27FEFCA5BF8724 (armor_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE armor_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE weapon (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, attack INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor ADD CONSTRAINT FK_BF27FEFCA5BF8724 FOREIGN KEY (armor_type_id) REFERENCES armor_type (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE armor DROP FOREIGN KEY FK_BF27FEFCA5BF8724
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE armor
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE armor_type
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE weapon
        SQL);
    }
}
