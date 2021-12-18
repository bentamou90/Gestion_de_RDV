<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211217160716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_1BDA53C686CC499D ON medecin');
        $this->addSql('ALTER TABLE medecin ADD id_admin VARCHAR(255) NOT NULL, ADD nom_admin VARCHAR(255) NOT NULL, ADD contact INT NOT NULL, DROP pseudo, DROP roles, DROP password, DROP tel, DROP datenaissance, DROP nom, DROP prenom, DROP adresse');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1BDA53C6668B4C46 ON medecin (id_admin)');
        $this->addSql('ALTER TABLE patient DROP roles');
        $this->addSql('ALTER TABLE user DROP roles');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_1BDA53C6668B4C46 ON medecin');
        $this->addSql('ALTER TABLE medecin ADD pseudo VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD roles JSON NOT NULL, ADD password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD tel VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD datenaissance DATE NOT NULL, ADD nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP id_admin, DROP nom_admin, DROP contact');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1BDA53C686CC499D ON medecin (pseudo)');
        $this->addSql('ALTER TABLE patient ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL');
    }
}
