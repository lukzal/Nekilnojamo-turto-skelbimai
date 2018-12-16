<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216131946 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE butas');
        $this->addSql('DROP TABLE namas');
        $this->addSql('DROP TABLE nuoma');
        $this->addSql('DROP TABLE pirkimas');
        $this->addSql('DROP TABLE skelbimas');
        $this->addSql('DROP TABLE sutartis');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP plotas, DROP kambariu_skaicius, DROP pastato_tipas, DROP metai, DROP sildymas, DROP apsauga, DROP gatves_adresas, DROP miestas, DROP aukstai');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE butas (id INT AUTO_INCREMENT NOT NULL, buto_numeris INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE namas (id INT AUTO_INCREMENT NOT NULL, sklypo_plotas INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nuoma (id INT AUTO_INCREMENT NOT NULL, kaina_per_menesi NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pirkimas (id INT AUTO_INCREMENT NOT NULL, kaina NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skelbimas (id INT AUTO_INCREMENT NOT NULL, pavadinimas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, skelbimas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, sukurimo_data DATETIME NOT NULL, galiojimo_pabaiga DATETIME NOT NULL, kaina NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sutartis (id INT AUTO_INCREMENT NOT NULL, data DATETIME NOT NULL, papildomos_salygos VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD plotas INT NOT NULL, ADD kambariu_skaicius INT DEFAULT NULL, ADD pastato_tipas VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD metai DATETIME NOT NULL, ADD sildymas VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD apsauga VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD gatves_adresas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD miestas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD aukstai INT DEFAULT NULL');
    }
}
