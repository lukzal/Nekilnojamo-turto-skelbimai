<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216130526 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nekilnojamas_turtas (id INT AUTO_INCREMENT NOT NULL, namo_numeris INT NOT NULL, plotas INT NOT NULL, kambariu_skaicius INT DEFAULT NULL, pastato_tipas VARCHAR(255) DEFAULT NULL, metai DATETIME NOT NULL, sildymas VARCHAR(255) DEFAULT NULL, apsauga VARCHAR(255) DEFAULT NULL, gatves_adresas VARCHAR(255) NOT NULL, miestas VARCHAR(255) NOT NULL, aukstai INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE nekilnojamas_turtas');
    }
}
