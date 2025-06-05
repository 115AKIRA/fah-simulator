<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250605014408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON accessory_effect
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect DROP id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE accessory_effect ADD PRIMARY KEY (id_accessory_id, id_effect_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON armor_effect
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect DROP id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE armor_effect ADD PRIMARY KEY (id_armor_id, id_effect_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON limb_effect
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect DROP id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE limb_effect ADD PRIMARY KEY (id_limb_id, id_effect_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON state_effect
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect DROP id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE state_effect ADD PRIMARY KEY (id_state_id, id_effect_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON weapon_effect
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect DROP id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE weapon_effect ADD PRIMARY KEY (id_weapon_id, id_effect_id)
        SQL);
    }
}
