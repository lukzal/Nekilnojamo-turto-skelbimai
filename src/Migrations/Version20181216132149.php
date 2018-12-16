<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216132149 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD naudotojas_id INT NOT NULL');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD CONSTRAINT FK_204A3FF224666632 FOREIGN KEY (naudotojas_id) REFERENCES naudotojai (id)');
        $this->addSql('CREATE INDEX IDX_204A3FF224666632 ON nekilnojamas_turtas (naudotojas_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP FOREIGN KEY FK_204A3FF224666632');
        $this->addSql('DROP INDEX IDX_204A3FF224666632 ON nekilnojamas_turtas');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP naudotojas_id');
    }
}
