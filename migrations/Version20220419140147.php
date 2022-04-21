<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220419140147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE employee ADD is_verified TINYINT(1) NOT NULL, DROP roles');
        $this->addSql('ALTER TABLE equipe CHANGE nbre-emp nbre-emp INT NOT NULL');
        $this->addSql('ALTER TABLE publication CHANGE id_citoyen id_citoyen INT DEFAULT NULL, CHANGE id_employee id_employee INT DEFAULT NULL, CHANGE confirm_publication confirm_publication TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE secteur CHANGE id_service id_service INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tache CHANGE emp_id emp_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE employee ADD roles LONGTEXT DEFAULT NULL COLLATE `utf8mb4_bin`, DROP is_verified');
        $this->addSql('ALTER TABLE equipe CHANGE nbre-emp nbre-emp INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE publication CHANGE id_employee id_employee INT NOT NULL, CHANGE id_citoyen id_citoyen INT NOT NULL, CHANGE confirm_publication confirm_publication TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE secteur CHANGE id_service id_service INT NOT NULL');
        $this->addSql('ALTER TABLE tache CHANGE emp_id emp_id INT NOT NULL');
    }
}
