<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211020125101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE club (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, membres VARCHAR(255) NOT NULL, datecreation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classroom CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE enabled enabled VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE formation ADD id VARCHAR(255) NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE club');
        $this->addSql('ALTER TABLE classroom CHANGE id id INT NOT NULL, CHANGE enabled enabled VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE formation MODIFY id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE formation DROP id, CHANGE nom nom CHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE formation ADD PRIMARY KEY (nom)');
    }
}
