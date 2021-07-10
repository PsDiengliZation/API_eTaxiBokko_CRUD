<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210710130756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chauffeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone INT NOT NULL, login VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, permis VARCHAR(255) NOT NULL, cni INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, proprietaire_id INT NOT NULL, immatricule VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, nbre_place INT NOT NULL, visite_technique VARCHAR(255) NOT NULL, assurance VARCHAR(255) NOT NULL, INDEX IDX_292FFF1D76C50E4A (proprietaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D76C50E4A FOREIGN KEY (proprietaire_id) REFERENCES chauffeur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D76C50E4A');
        $this->addSql('DROP TABLE chauffeur');
        $this->addSql('DROP TABLE vehicule');
    }
}
