<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181201114030 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blokavimai ADD naudotojo_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE blokavimai ADD CONSTRAINT FK_F726CEF322FCF2B0 FOREIGN KEY (naudotojo_id_id) REFERENCES naudotojai (id)');
        $this->addSql('CREATE INDEX IDX_F726CEF322FCF2B0 ON blokavimai (naudotojo_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blokavimai DROP FOREIGN KEY FK_F726CEF322FCF2B0');
        $this->addSql('DROP INDEX IDX_F726CEF322FCF2B0 ON blokavimai');
        $this->addSql('ALTER TABLE blokavimai DROP naudotojo_id_id');
    }
}
