<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181201113033 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE blokavimai (id INT AUTO_INCREMENT NOT NULL, priezastis LONGTEXT NOT NULL, baigiasi DATETIME NOT NULL, data DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE naudotojai (id INT AUTO_INCREMENT NOT NULL, naudotojo_vardas VARCHAR(255) NOT NULL, vardas VARCHAR(255) NOT NULL, pavarde VARCHAR(255) NOT NULL, el_pastas VARCHAR(255) NOT NULL, asmens_kodas INT NOT NULL, telefono_nr VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE users');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, surname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, personal_code INT NOT NULL, phone INT NOT NULL, type INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE blokavimai');
        $this->addSql('DROP TABLE naudotojai');
    }
}
