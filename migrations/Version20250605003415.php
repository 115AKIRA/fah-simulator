<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605003415 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE state_effect (id INT AUTO_INCREMENT NOT NULL, id_state_id INT NOT NULL, id_effect_id INT NOT NULL, value INT NOT NULL, INDEX IDX_BFA44E5D5503D054 (id_state_id), INDEX IDX_BFA44E5D75DC041C (id_effect_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect ADD CONSTRAINT FK_BFA44E5D5503D054 FOREIGN KEY (id_state_id) REFERENCES state (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect ADD CONSTRAINT FK_BFA44E5D75DC041C FOREIGN KEY (id_effect_id) REFERENCES effect (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect DROP FOREIGN KEY FK_BFA44E5D5503D054
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect DROP FOREIGN KEY FK_BFA44E5D75DC041C
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE state_effect
        SQL);
    }
}
