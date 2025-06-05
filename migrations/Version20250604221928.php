<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250604221928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE accessory (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE armor (id INT AUTO_INCREMENT NOT NULL, armor_type_id INT NOT NULL, equipment_type_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, blunt_res INT NOT NULL, slashing_res INT NOT NULL, piercing_res INT NOT NULL, fire_res INT NOT NULL, otherworldly_res INT NOT NULL, INDEX IDX_BF27FEFCA5BF8724 (armor_type_id), INDEX IDX_BF27FEFCB337437C (equipment_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE armor_restrict_type (id INT AUTO_INCREMENT NOT NULL, armor_restrict VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE armor_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, back_image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, attack INT NOT NULL, agility INT NOT NULL, is_armor_restrict TINYINT(1) NOT NULL, is_weapon_restrict TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE damage_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE effect (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_dot TINYINT(1) NOT NULL, value INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE element (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE equipment_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE hit_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE limb (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, max_hp INT NOT NULL, blunt_res INT NOT NULL, slashing_res INT NOT NULL, piercing_res INT NOT NULL, fire_res INT NOT NULL, otherworldly_res INT NOT NULL, evasion INT NOT NULL, magical_evasion INT NOT NULL, hard_max_hp INT NOT NULL, accuracy INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE limb_effect (limb_id INT NOT NULL, effect_id INT NOT NULL, INDEX IDX_F166F293970C372B (limb_id), INDEX IDX_F166F293F5E9B83B (effect_id), PRIMARY KEY(limb_id, effect_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE limb_troop (limb_id INT NOT NULL, troop_id INT NOT NULL, INDEX IDX_4E014DA2970C372B (limb_id), INDEX IDX_4E014DA2263060AC (troop_id), PRIMARY KEY(limb_id, troop_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, headers LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, queue_name VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE occasion (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE scope (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, scope_id INT NOT NULL, occasion_id INT NOT NULL, element_id INT NOT NULL, damage_type_id INT NOT NULL, hit_type_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_enemy_only TINYINT(1) NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, success_rate INT NOT NULL, repeat_action INT NOT NULL, INDEX IDX_5E3DE4771F1F2A24 (element_id), INDEX IDX_5E3DE477D50BC975 (hit_type_id), INDEX IDX_5E3DE47741E13755 (damage_type_id), INDEX IDX_5E3DE4774034998F (occasion_id), INDEX IDX_5E3DE477682B5931 (scope_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE state (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, min_duration INT DEFAULT NULL, max_duration INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE troop (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_die_at_end_of_turn TINYINT(1) NOT NULL, torso_threshhold INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE weapon (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, attack INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_element_element (weapon_element_id INT NOT NULL, element_id INT NOT NULL, INDEX IDX_FECF80F02048E597 (weapon_element_id), INDEX IDX_FECF80F01F1F2A24 (element_id), PRIMARY KEY(weapon_element_id, element_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            CREATE TABLE weapon_element_weapon (weapon_element_id INT NOT NULL, weapon_id INT NOT NULL, INDEX IDX_368C78D52048E597 (weapon_element_id), INDEX IDX_368C78D595B82273 (weapon_id), PRIMARY KEY(weapon_element_id, weapon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE accessory
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE armor
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE armor_restrict_type
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE armor_type
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE `character`
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE damage_type
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE effect
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE element
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE equipment_type
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE hit_type
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE item
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE limb
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE limb_effect
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE limb_troop
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE occasion
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE scope
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE skill
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE state
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE troop
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE weapon
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE weapon_element_element
        SQL);
        $this->abortIf(
            !$this->connection->getDatabasePlatform() instanceof \Doctrine\DBAL\Platforms\MySQL84Platform,
            "Migration can only be executed safely on '\Doctrine\DBAL\Platforms\MySQL84Platform'."
        );

        $this->addSql(<<<'SQL'
            DROP TABLE weapon_element_weapon
        SQL);
    }
}
