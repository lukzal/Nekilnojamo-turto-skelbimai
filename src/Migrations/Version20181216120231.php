<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216120231 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP FOREIGN KEY FK_204A3FF24D5228E3');
        $this->addSql('ALTER TABLE sutartis DROP FOREIGN KEY FK_22B1FF4FB480E88C');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP FOREIGN KEY FK_204A3FF26C9DB153');
        $this->addSql('ALTER TABLE sutartis DROP FOREIGN KEY FK_22B1FF4F51FC304');
        $this->addSql('ALTER TABLE sutartis DROP FOREIGN KEY FK_22B1FF4F9C89105B');
        $this->addSql('DROP TABLE butas');
        $this->addSql('DROP TABLE klientas');
        $this->addSql('DROP TABLE namas');
        $this->addSql('DROP TABLE nuoma');
        $this->addSql('DROP TABLE pirkimas');
        $this->addSql('DROP TABLE skelbimas');
        $this->addSql('DROP TABLE sutartis');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP FOREIGN KEY FK_204A3FF224666632');
        $this->addSql('DROP INDEX UNIQ_204A3FF26C9DB153 ON nekilnojamas_turtas');
        $this->addSql('DROP INDEX UNIQ_204A3FF24D5228E3 ON nekilnojamas_turtas');
        $this->addSql('DROP INDEX IDX_204A3FF224666632 ON nekilnojamas_turtas');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP sklypo_plotas_id, DROP buto_numeris_id, DROP naudotojas_id, DROP plotas, DROP kambariu_skaicius, DROP pastato_tipas, DROP metai, DROP sildymas, DROP apsauga, DROP gatves_adresas, DROP miestas, DROP aukstai');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE butas (id INT AUTO_INCREMENT NOT NULL, buto_numeris INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE klientas (id INT AUTO_INCREMENT NOT NULL, naudotojo_id INT NOT NULL, INDEX naudotojo_id (naudotojo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE namas (id INT AUTO_INCREMENT NOT NULL, sklypo_plotas INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nuoma (id INT AUTO_INCREMENT NOT NULL, kaina_per_menesi NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pirkimas (id INT AUTO_INCREMENT NOT NULL, kaina NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skelbimas (id INT AUTO_INCREMENT NOT NULL, nekilnojamas_turtas_id INT NOT NULL, naudotojas_id INT DEFAULT NULL, pavadinimas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, skelbimas LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, sukurimo_data DATETIME NOT NULL, galiojimo_pabaiga DATETIME NOT NULL, kaina NUMERIC(10, 2) NOT NULL, UNIQUE INDEX UNIQ_542745871ED6E01C (nekilnojamas_turtas_id), INDEX IDX_5427458724666632 (naudotojas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sutartis (id INT AUTO_INCREMENT NOT NULL, pirkimas_id INT DEFAULT NULL, nuoma_id INT DEFAULT NULL, nekilnojamas_turtas_id INT NOT NULL, klientas_id INT DEFAULT NULL, numeris INT NOT NULL, data DATETIME NOT NULL, papildomos_salygos LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_22B1FF4F1ED6E01C (nekilnojamas_turtas_id), UNIQUE INDEX UNIQ_22B1FF4F51FC304 (pirkimas_id), UNIQUE INDEX UNIQ_22B1FF4F9C89105B (nuoma_id), INDEX IDX_22B1FF4FB480E88C (klientas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE klientas ADD CONSTRAINT naudotojo_id FOREIGN KEY (naudotojo_id) REFERENCES naudotojai (id)');
        $this->addSql('ALTER TABLE skelbimas ADD CONSTRAINT FK_542745871ED6E01C FOREIGN KEY (nekilnojamas_turtas_id) REFERENCES nekilnojamas_turtas (id)');
        $this->addSql('ALTER TABLE skelbimas ADD CONSTRAINT FK_5427458724666632 FOREIGN KEY (naudotojas_id) REFERENCES naudotojai (id)');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4F1ED6E01C FOREIGN KEY (nekilnojamas_turtas_id) REFERENCES nekilnojamas_turtas (id)');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4F51FC304 FOREIGN KEY (pirkimas_id) REFERENCES pirkimas (id)');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4F9C89105B FOREIGN KEY (nuoma_id) REFERENCES sutartis (id)');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4FB480E88C FOREIGN KEY (klientas_id) REFERENCES klientas (id)');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD sklypo_plotas_id INT DEFAULT NULL, ADD buto_numeris_id INT DEFAULT NULL, ADD naudotojas_id INT NOT NULL, ADD plotas INT NOT NULL, ADD kambariu_skaicius INT DEFAULT NULL, ADD pastato_tipas VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD metai DATETIME NOT NULL, ADD sildymas VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD apsauga VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD gatves_adresas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD miestas VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD aukstai INT DEFAULT NULL');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD CONSTRAINT FK_204A3FF224666632 FOREIGN KEY (naudotojas_id) REFERENCES naudotojai (id)');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD CONSTRAINT FK_204A3FF24D5228E3 FOREIGN KEY (buto_numeris_id) REFERENCES butas (id)');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD CONSTRAINT FK_204A3FF26C9DB153 FOREIGN KEY (sklypo_plotas_id) REFERENCES namas (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_204A3FF26C9DB153 ON nekilnojamas_turtas (sklypo_plotas_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_204A3FF24D5228E3 ON nekilnojamas_turtas (buto_numeris_id)');
        $this->addSql('CREATE INDEX IDX_204A3FF224666632 ON nekilnojamas_turtas (naudotojas_id)');
    }
}
