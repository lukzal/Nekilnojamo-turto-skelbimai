<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216132508 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sutartis (id INT AUTO_INCREMENT NOT NULL, bustas_id INT NOT NULL, klientas_id INT NOT NULL, data DATETIME NOT NULL, papildomos_salygos VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_22B1FF4F79C7EAB4 (bustas_id), INDEX IDX_22B1FF4FB480E88C (klientas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4F79C7EAB4 FOREIGN KEY (bustas_id) REFERENCES nekilnojamas_turtas (id)');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4FB480E88C FOREIGN KEY (klientas_id) REFERENCES naudotojai (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sutartis');
    }
}
