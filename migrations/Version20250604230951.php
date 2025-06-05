<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250604230951 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_element (weapon_id INT NOT NULL, element_id INT NOT NULL, INDEX IDX_E4771E7D95B82273 (weapon_id), INDEX IDX_E4771E7D1F1F2A24 (element_id), PRIMARY KEY(weapon_id, element_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_element ADD CONSTRAINT FK_E4771E7D95B82273 FOREIGN KEY (weapon_id) REFERENCES weapon (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_element ADD CONSTRAINT FK_E4771E7D1F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE weapon_element_element
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE weapon_element_weapon
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_element_element (weapon_element_id INT NOT NULL, element_id INT NOT NULL, INDEX IDX_FECF80F02048E597 (weapon_element_id), INDEX IDX_FECF80F01F1F2A24 (element_id), PRIMARY KEY(weapon_element_id, element_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_element_weapon (weapon_element_id INT NOT NULL, weapon_id INT NOT NULL, INDEX IDX_368C78D52048E597 (weapon_element_id), INDEX IDX_368C78D595B82273 (weapon_id), PRIMARY KEY(weapon_element_id, weapon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_element DROP FOREIGN KEY FK_E4771E7D95B82273
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_element DROP FOREIGN KEY FK_E4771E7D1F1F2A24
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE weapon_element
        SQL);
    }
}
