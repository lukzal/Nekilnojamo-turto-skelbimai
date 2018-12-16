<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216132859 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE skelbimas (id INT AUTO_INCREMENT NOT NULL, pardavejas_id INT NOT NULL, nekilnojamas_turtas_id INT NOT NULL, pavadinimas VARCHAR(255) NOT NULL, skelbimas VARCHAR(255) NOT NULL, sukurimo_data DATETIME NOT NULL, galiojimo_data DATETIME NOT NULL, kaina NUMERIC(10, 2) NOT NULL, INDEX IDX_542745876D2B5A7A (pardavejas_id), UNIQUE INDEX UNIQ_542745871ED6E01C (nekilnojamas_turtas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE skelbimas ADD CONSTRAINT FK_542745876D2B5A7A FOREIGN KEY (pardavejas_id) REFERENCES naudotojai (id)');
        $this->addSql('ALTER TABLE skelbimas ADD CONSTRAINT FK_542745871ED6E01C FOREIGN KEY (nekilnojamas_turtas_id) REFERENCES nekilnojamas_turtas (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE skelbimas');
    }
}
