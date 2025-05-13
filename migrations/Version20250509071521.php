<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250509071521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE limbs ADD blunt_res INT NOT NULL, ADD slashing_res INT NOT NULL, ADD piercing_res INT NOT NULL, ADD fire_res INT NOT NULL, ADD otherworldly_res INT NOT NULL, ADD evasion INT NOT NULL, ADD magical_evasion INT NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE limbs DROP blunt_res, DROP slashing_res, DROP piercing_res, DROP fire_res, DROP otherworldly_res, DROP evasion, DROP magical_evasion
        SQL);
    }
}
