<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605005823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE accessory_effect (id INT AUTO_INCREMENT NOT NULL, id_accessory_id INT NOT NULL, id_effect_id INT NOT NULL, value INT NOT NULL, INDEX IDX_603C4B8A429B90A (id_accessory_id), INDEX IDX_603C4B8A75DC041C (id_effect_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect ADD CONSTRAINT FK_603C4B8A429B90A FOREIGN KEY (id_accessory_id) REFERENCES accessory (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect ADD CONSTRAINT FK_603C4B8A75DC041C FOREIGN KEY (id_effect_id) REFERENCES effect (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect DROP FOREIGN KEY FK_603C4B8A429B90A
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect DROP FOREIGN KEY FK_603C4B8A75DC041C
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE accessory_effect
        SQL);
    }
}
