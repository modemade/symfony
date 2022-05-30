<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220525131959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cat (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE task (id INT AUTO_INCREMENT NOT NULL, add_id INT DEFAULT NULL, foll_id INT NOT NULL, fli_id INT DEFAULT NULL, ok_id INT NOT NULL, nam VARCHAR(50) DEFAULT NULL, content LONGTEXT DEFAULT NULL, date DATE DEFAULT NULL, no VARCHAR(255) NOT NULL, INDEX IDX_527EDB25339CD0A7 (add_id), INDEX IDX_527EDB25389AD5FB (foll_id), INDEX IDX_527EDB25EC837303 (fli_id), INDEX IDX_527EDB25A8677BA1 (ok_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, firs_name VARCHAR(50) DEFAULT NULL, login VARCHAR(50) DEFAULT NULL, mdp VARCHAR(100) DEFAULT NULL, no VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25339CD0A7 FOREIGN KEY (add_id) REFERENCES cat (id)');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25389AD5FB FOREIGN KEY (foll_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25EC837303 FOREIGN KEY (fli_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25A8677BA1 FOREIGN KEY (ok_id) REFERENCES cat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25339CD0A7');
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25A8677BA1');
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25389AD5FB');
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25EC837303');
        $this->addSql('DROP TABLE cat');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE `user`');
    }
}
