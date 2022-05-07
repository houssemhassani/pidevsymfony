<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428131531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ajout_pub (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_like (id INT AUTO_INCREMENT NOT NULL, publication_id INT DEFAULT NULL, citoyen_id INT DEFAULT NULL, INDEX IDX_653627B838B217A7 (publication_id), INDEX IDX_653627B843787BBA (citoyen_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B838B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B843787BBA FOREIGN KEY (citoyen_id) REFERENCES citoyen (id)');
        $this->addSql('ALTER TABLE commantaire CHANGE id_employee id_employee INT NOT NULL');
        $this->addSql('ALTER TABLE publication CHANGE status status VARCHAR(1000) NOT NULL, CHANGE id_employee id_employee INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ajout_pub');
        $this->addSql('DROP TABLE post_like');
        $this->addSql('ALTER TABLE commantaire CHANGE id_employee id_employee INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication CHANGE status status VARCHAR(255) NOT NULL, CHANGE id_employee id_employee INT DEFAULT NULL');
    }
}
