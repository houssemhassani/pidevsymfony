<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220409105056 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employee CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE tache CHANGE etat_tache etat_tache VARCHAR(255) DEFAULT \'\'\'NOT DONE\'\'\' NOT NULL, CHANGE importance importance VARCHAR(255) DEFAULT \'\'\'Normal\'\'\' NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employee CHANGE photo photo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tache CHANGE etat_tache etat_tache VARCHAR(255) DEFAULT \'NOT DONE\' NOT NULL, CHANGE importance importance VARCHAR(255) DEFAULT \'Normal\' NOT NULL');
    }
}
