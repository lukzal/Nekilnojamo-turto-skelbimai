<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216133851 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD buto_numeris_id INT DEFAULT NULL, ADD sklypo_plotas_id INT DEFAULT NULL, ADD plotas INT NOT NULL, ADD kambariu_skaicius INT DEFAULT NULL, ADD pastato_tipas VARCHAR(255) DEFAULT NULL, ADD metai DATETIME NOT NULL, ADD sildymas VARCHAR(255) DEFAULT NULL, ADD apsauga VARCHAR(255) DEFAULT NULL, ADD gatves_pavadinimas VARCHAR(255) NOT NULL, ADD miestas VARCHAR(255) NOT NULL, ADD aukstai INT DEFAULT NULL');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD CONSTRAINT FK_204A3FF24D5228E3 FOREIGN KEY (buto_numeris_id) REFERENCES butas (id)');
        $this->addSql('ALTER TABLE nekilnojamas_turtas ADD CONSTRAINT FK_204A3FF26C9DB153 FOREIGN KEY (sklypo_plotas_id) REFERENCES namas (id)');
        $this->addSql('CREATE INDEX IDX_204A3FF24D5228E3 ON nekilnojamas_turtas (buto_numeris_id)');
        $this->addSql('CREATE INDEX IDX_204A3FF26C9DB153 ON nekilnojamas_turtas (sklypo_plotas_id)');
        $this->addSql('ALTER TABLE sutartis ADD kaina_per_menesi_id INT DEFAULT NULL, ADD kaina_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4FA1BFF1F3 FOREIGN KEY (kaina_per_menesi_id) REFERENCES nuoma (id)');
        $this->addSql('ALTER TABLE sutartis ADD CONSTRAINT FK_22B1FF4FD6013F2F FOREIGN KEY (kaina_id) REFERENCES pirkimas (id)');
        $this->addSql('CREATE INDEX IDX_22B1FF4FA1BFF1F3 ON sutartis (kaina_per_menesi_id)');
        $this->addSql('CREATE INDEX IDX_22B1FF4FD6013F2F ON sutartis (kaina_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP FOREIGN KEY FK_204A3FF24D5228E3');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP FOREIGN KEY FK_204A3FF26C9DB153');
        $this->addSql('DROP INDEX IDX_204A3FF24D5228E3 ON nekilnojamas_turtas');
        $this->addSql('DROP INDEX IDX_204A3FF26C9DB153 ON nekilnojamas_turtas');
        $this->addSql('ALTER TABLE nekilnojamas_turtas DROP buto_numeris_id, DROP sklypo_plotas_id, DROP plotas, DROP kambariu_skaicius, DROP pastato_tipas, DROP metai, DROP sildymas, DROP apsauga, DROP gatves_pavadinimas, DROP miestas, DROP aukstai');
        $this->addSql('ALTER TABLE sutartis DROP FOREIGN KEY FK_22B1FF4FA1BFF1F3');
        $this->addSql('ALTER TABLE sutartis DROP FOREIGN KEY FK_22B1FF4FD6013F2F');
        $this->addSql('DROP INDEX IDX_22B1FF4FA1BFF1F3 ON sutartis');
        $this->addSql('DROP INDEX IDX_22B1FF4FD6013F2F ON sutartis');
        $this->addSql('ALTER TABLE sutartis DROP kaina_per_menesi_id, DROP kaina_id');
    }
}
