<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509073816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD scope_id INT NOT NULL, ADD occasion_id INT NOT NULL, ADD element_id INT NOT NULL, ADD damage_type_id INT NOT NULL, ADD hit_type_id INT NOT NULL, ADD success_rate INT NOT NULL, ADD repeat_action INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D5311670682B5931 FOREIGN KEY (scope_id) REFERENCES scope (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D53116704034998F FOREIGN KEY (occasion_id) REFERENCES occasion (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D53116701F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D531167041E13755 FOREIGN KEY (damage_type_id) REFERENCES damage_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D5311670D50BC975 FOREIGN KEY (hit_type_id) REFERENCES hit_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D5311670682B5931 ON skills (scope_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D53116704034998F ON skills (occasion_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D53116701F1F2A24 ON skills (element_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D531167041E13755 ON skills (damage_type_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_D5311670D50BC975 ON skills (hit_type_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D5311670682B5931
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D53116704034998F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D53116701F1F2A24
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D531167041E13755
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D5311670D50BC975
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D5311670682B5931 ON skills
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D53116704034998F ON skills
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D53116701F1F2A24 ON skills
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D531167041E13755 ON skills
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_D5311670D50BC975 ON skills
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP scope_id, DROP occasion_id, DROP element_id, DROP damage_type_id, DROP hit_type_id, DROP success_rate, DROP repeat_action
        SQL);
    }
}
