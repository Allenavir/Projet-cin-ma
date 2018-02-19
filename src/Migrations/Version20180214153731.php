<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180214153731 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE films (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, realisateur VARCHAR(255) NOT NULL, acteurs VARCHAR(255) NOT NULL, duree VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, date LONGTEXT NOT NULL, resume LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, note NUMERIC(10, 0) NOT NULL, bo1 LONGTEXT NOT NULL, bo2 LONGTEXT NOT NULL, image1 VARCHAR(255) NOT NULL, image2 VARCHAR(255) NOT NULL, image3 VARCHAR(255) NOT NULL, image4 VARCHAR(255) NOT NULL, medias INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, film_id INT NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_6A2CA10C567F5183 (film_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C567F5183 FOREIGN KEY (film_id) REFERENCES films (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C567F5183');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE media');
    }
}
