<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509084019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE limb_troop (limb_id INT NOT NULL, troop_id INT NOT NULL, INDEX IDX_4E014DA2970C372B (limb_id), INDEX IDX_4E014DA2263060AC (troop_id), PRIMARY KEY(limb_id, troop_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE limb_effect (limb_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_F166F293970C372B (limb_id), INDEX IDX_F166F293F5E9B83B (effect_id), PRIMARY KEY(limb_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_troop ADD CONSTRAINT FK_4E014DA2970C372B FOREIGN KEY (limb_id) REFERENCES limb (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_troop ADD CONSTRAINT FK_4E014DA2263060AC FOREIGN KEY (troop_id) REFERENCES troop (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect ADD CONSTRAINT FK_F166F293970C372B FOREIGN KEY (limb_id) REFERENCES limb (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect ADD CONSTRAINT FK_F166F293F5E9B83B FOREIGN KEY (effect_id) REFERENCES effect (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_troop DROP FOREIGN KEY FK_4E014DA2970C372B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_troop DROP FOREIGN KEY FK_4E014DA2263060AC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect DROP FOREIGN KEY FK_F166F293970C372B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect DROP FOREIGN KEY FK_F166F293F5E9B83B
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE limb_troop
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE limb_effect
        SQL);
    }
}
