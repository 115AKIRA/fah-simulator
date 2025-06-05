<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605011052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD scope_id_id INT NOT NULL, ADD element_id_id INT NOT NULL, ADD damage_type_id_id INT NOT NULL, ADD hit_type_id_id INT NOT NULL, ADD is_consumed TINYINT(1) NOT NULL, ADD success_rate INT NOT NULL, ADD formula VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD CONSTRAINT FK_1F1B251E842D55A2 FOREIGN KEY (scope_id_id) REFERENCES scope (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD CONSTRAINT FK_1F1B251EBB66EACE FOREIGN KEY (element_id_id) REFERENCES element (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD CONSTRAINT FK_1F1B251E4B3C5BF0 FOREIGN KEY (damage_type_id_id) REFERENCES damage_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item ADD CONSTRAINT FK_1F1B251EB991DAD1 FOREIGN KEY (hit_type_id_id) REFERENCES hit_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1F1B251E842D55A2 ON item (scope_id_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1F1B251EBB66EACE ON item (element_id_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1F1B251E4B3C5BF0 ON item (damage_type_id_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1F1B251EB991DAD1 ON item (hit_type_id_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E842D55A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EBB66EACE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E4B3C5BF0
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EB991DAD1
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1F1B251E842D55A2 ON item
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1F1B251EBB66EACE ON item
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1F1B251E4B3C5BF0 ON item
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1F1B251EB991DAD1 ON item
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE item DROP scope_id_id, DROP element_id_id, DROP damage_type_id_id, DROP hit_type_id_id, DROP is_consumed, DROP success_rate, DROP formula
        SQL);
    }
}
