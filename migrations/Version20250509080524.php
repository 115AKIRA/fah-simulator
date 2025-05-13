<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509080524 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE limb (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, max_hp INT NOT NULL, blunt_res INT NOT NULL, slashing_res INT NOT NULL, piercing_res INT NOT NULL, fire_res INT NOT NULL, otherworldly_res INT NOT NULL, evasion INT NOT NULL, magical_evasion INT NOT NULL, hard_max_hp INT NOT NULL, accuracy INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, scope_id INT NOT NULL, occasion_id INT NOT NULL, element_id INT NOT NULL, damage_type_id INT NOT NULL, hit_type_id INT NOT NULL, name VARCHAR(255) NOT NULL, is_enemy_only TINYINT(1) NOT NULL, description VARCHAR(255) DEFAULT NULL, success_rate INT NOT NULL, repeat_action INT NOT NULL, INDEX IDX_5E3DE477682B5931 (scope_id), INDEX IDX_5E3DE4774034998F (occasion_id), INDEX IDX_5E3DE4771F1F2A24 (element_id), INDEX IDX_5E3DE47741E13755 (damage_type_id), INDEX IDX_5E3DE477D50BC975 (hit_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE state (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, min_duration INT DEFAULT NULL, max_duration INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE troop (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, is_die_at_end_of_turn TINYINT(1) NOT NULL, torso_threshhold INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477682B5931 FOREIGN KEY (scope_id) REFERENCES scope (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill ADD CONSTRAINT FK_5E3DE4774034998F FOREIGN KEY (occasion_id) REFERENCES occasion (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill ADD CONSTRAINT FK_5E3DE4771F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill ADD CONSTRAINT FK_5E3DE47741E13755 FOREIGN KEY (damage_type_id) REFERENCES damage_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477D50BC975 FOREIGN KEY (hit_type_id) REFERENCES hit_type (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D53116701F1F2A24
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D53116704034998F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D531167041E13755
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D5311670682B5931
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills DROP FOREIGN KEY FK_D5311670D50BC975
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE troops
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE states
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE skills
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE limbs
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE effect CHANGE is_do_t is_dot TINYINT(1) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE troops (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_die_at_end_of_turn TINYINT(1) NOT NULL, torso_threshhold INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE states (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, min_duration INT DEFAULT NULL, max_duration INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, scope_id INT NOT NULL, occasion_id INT NOT NULL, element_id INT NOT NULL, damage_type_id INT NOT NULL, hit_type_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_enemy_only TINYINT(1) NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, success_rate INT NOT NULL, repeat_action INT NOT NULL, INDEX IDX_D5311670682B5931 (scope_id), INDEX IDX_D5311670D50BC975 (hit_type_id), INDEX IDX_D531167041E13755 (damage_type_id), INDEX IDX_D53116701F1F2A24 (element_id), INDEX IDX_D53116704034998F (occasion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE limbs (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, max_hp INT NOT NULL, blunt_res INT NOT NULL, slashing_res INT NOT NULL, piercing_res INT NOT NULL, fire_res INT NOT NULL, otherworldly_res INT NOT NULL, evasion INT NOT NULL, magical_evasion INT NOT NULL, hard_max_hp INT NOT NULL, accuracy INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D53116701F1F2A24 FOREIGN KEY (element_id) REFERENCES element (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D53116704034998F FOREIGN KEY (occasion_id) REFERENCES occasion (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D531167041E13755 FOREIGN KEY (damage_type_id) REFERENCES damage_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D5311670682B5931 FOREIGN KEY (scope_id) REFERENCES scope (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skills ADD CONSTRAINT FK_D5311670D50BC975 FOREIGN KEY (hit_type_id) REFERENCES hit_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477682B5931
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE4774034998F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE4771F1F2A24
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE47741E13755
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477D50BC975
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE limb
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE skill
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE state
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE troop
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE effect CHANGE is_dot is_do_t TINYINT(1) NOT NULL
        SQL);
    }
}
