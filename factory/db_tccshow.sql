CREATE DATABASE db_tccshow;
USE db_tccshow;

CREATE TABLE tb_usuario (
    usuario_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_nome VARCHAR(100) NOT NULL,
    usuario_email VARCHAR(100) NOT NULL,
    usuario_tipo ENUM("USUARIO", "ALUNO", "PROFESSOR"),
    usuario_senha VARCHAR(60) NOT NULL
);

CREATE TABLE tb_cliente (
    cliente_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cliente_nome VARCHAR(100) NOT NULL,
    cliente_sexo ENUM("M", "F") NOT NULL,
    cliente_celular VARCHAR(15) NOT NULL,
    cliente_dtNasc DATE NOT NULL,
    usuario_cod_fk INT NOT NULL,

    CONSTRAINT REL_Usuario_Cliente
    FOREIGN KEY (usuario_cod_fk) REFERENCES tb_usuario (usuario_cod)
);

CREATE TABLE tb_aluno (
    aluno_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    aluno_ETEC VARCHAR(100) NOT NULL,
    aluno_RM VARCHAR(6) NOT NULL,
    aluno_curso VARCHAR(5) NOT NULL,
    aluno_modulo INT NOT NULL,
    cliente_cod_fk INT NOT NULL,

    CONSTRAINT REL_Cliente_Aluno
    FOREIGN KEY (cliente_cod_fk) REFERENCES tb_cliente (cliente_cod)
);

CREATE TABLE tb_professor (
    prof_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prof_matricula VARCHAR(15) NOT NULL,
    prof_ETEC VARCHAR(100) NOT NULL,
    cliente_cod_fk INT NOT NULL,

    CONSTRAINT REL_Cliente_Professor
    FOREIGN KEY (cliente_cod_fk) REFERENCES tb_cliente (cliente_cod)
)