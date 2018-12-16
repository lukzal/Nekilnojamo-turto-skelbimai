<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181210142026 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE blokavimai (id INT AUTO_INCREMENT NOT NULL, naudotojo_id_id INT NOT NULL, priezastis LONGTEXT NOT NULL, baigiasi DATETIME NOT NULL, data DATETIME NOT NULL, INDEX IDX_F726CEF322FCF2B0 (naudotojo_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE naudotojai (id INT AUTO_INCREMENT NOT NULL, naudotojo_vardas VARCHAR(255) NOT NULL, vardas VARCHAR(255) NOT NULL, pavarde VARCHAR(255) NOT NULL, el_pastas VARCHAR(255) NOT NULL, asmens_kodas INT NOT NULL, telefono_nr VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, slaptazodis VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blokavimai ADD CONSTRAINT FK_F726CEF322FCF2B0 FOREIGN KEY (naudotojo_id_id) REFERENCES naudotojai (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blokavimai DROP FOREIGN KEY FK_F726CEF322FCF2B0');
        $this->addSql('DROP TABLE blokavimai');
        $this->addSql('DROP TABLE naudotojai');
    }
}
