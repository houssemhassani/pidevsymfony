<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220429205345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users_publication_liked (user_id INT NOT NULL, publication_id INT NOT NULL, INDEX IDX_896BBB5EA76ED395 (user_id), INDEX IDX_896BBB5E38B217A7 (publication_id), PRIMARY KEY(user_id, publication_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users_publication_disliked (user_id INT NOT NULL, publication_id INT NOT NULL, INDEX IDX_91FF2A0FA76ED395 (user_id), INDEX IDX_91FF2A0F38B217A7 (publication_id), PRIMARY KEY(user_id, publication_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users_publication_liked ADD CONSTRAINT FK_896BBB5EA76ED395 FOREIGN KEY (user_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE users_publication_liked ADD CONSTRAINT FK_896BBB5E38B217A7 FOREIGN KEY (publication_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE users_publication_disliked ADD CONSTRAINT FK_91FF2A0FA76ED395 FOREIGN KEY (user_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE users_publication_disliked ADD CONSTRAINT FK_91FF2A0F38B217A7 FOREIGN KEY (publication_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE users_publication_liked');
        $this->addSql('DROP TABLE users_publication_disliked');
    }
}
