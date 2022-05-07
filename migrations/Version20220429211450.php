<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220429211450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commantaire CHANGE id_publicatifefon publication_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commantaire ADD CONSTRAINT FK_93BF4CAF38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('CREATE INDEX IDX_93BF4CAF38B217A7 ON commantaire (publication_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commantaire DROP FOREIGN KEY FK_93BF4CAF38B217A7');
        $this->addSql('DROP INDEX IDX_93BF4CAF38B217A7 ON commantaire');
        $this->addSql('ALTER TABLE commantaire CHANGE publication_id id_publicatifefon INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commantaire ADD CONSTRAINT commantaire_ibfk_3 FOREIGN KEY (id_publicatifefon) REFERENCES publication (id)');
        $this->addSql('CREATE INDEX IDX_93BF4CAF42F0DF56 ON commantaire (id_publicatifefon)');
    }
}
