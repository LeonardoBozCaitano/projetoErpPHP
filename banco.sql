CREATE TABLE tb_cidade (
cd_cidade INT(6) NOT NULL AUTO_INCREMENT,
ds_cidade VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_cidade)
);

CREATE TABLE tb_estado (
cd_estado INT(6) NOT NULL AUTO_INCREMENT,
ds_estado VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_estado)
);

CREATE TABLE tb_pais (
cd_pais INT(6) NOT NULL AUTO_INCREMENT,
ds_pais VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_pais)
);

CREATE TABLE tb_usuario (
cd_usuario INT(255) NOT NULL AUTO_INCREMENT,
ds_usuario INT(255) NOT NULL,
cd_empresa INT(255) NOT NULL,
dt_cadastro date NOT NULL,
ds_senha VARCHAR(200) NOT NULL,
ds_login VARCHAR(200) NOT NULL,

PRIMARY KEY (cd_usuario)
);

CREATE TABLE tb_profissao (
cd_profissao INT(6) NOT NULL AUTO_INCREMENT,
ds_profissao VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_profissao)
);

CREATE TABLE tb_cliente (
cd_cliente INT(6) NOT NULL AUTO_INCREMENT,
ds_cliente VARCHAR(200) NOT NULL,

ds_bairro VARCHAR(200) NOT NULL,
ds_endereco VARCHAR(200) NOT NULL,
ds_complemento VARCHAR(200) NOT NULL,
ds_cep VARCHAR(20) NOT NULL,

cd_cidade VARCHAR(200) NOT NULL,
cd_estado VARCHAR(200) NOT NULL,
cd_pais VARCHAR(200) NOT NULL,

ds_cpf VARCHAR(100) NOT NULL,

cd_profissao INT(6) NOT NULL,
ds_local_trabalho VARCHAR(200) NOT NULL,

ds_telefone_cel VARCHAR(200) NOT NULL,
ds_telefone_res VARCHAR(200) NOT NULL,
ds_email VARCHAR(200) NOT NULL,

dt_nascimento DATE NOT NULL,

ds_nome_pai VARCHAR(200) NOT NULL,
ds_nome_mae VARCHAR(200) NOT NULL,

fl_primeira_consulta BOOLEAN NOT NULL DEFAULT FALSE,

ds_nome_responsavel VARCHAR(200) NOT NULL,
ds_numero_emergencia VARCHAR(200) NOT NULL,

ds_tipo_sangue VARCHAR(4) NOT NULL,

fl_sensibilidade_anestesia BOOLEAN NOT NULL DEFAULT FALSE,
fl_hepatite BOOLEAN NOT NULL DEFAULT FALSE,
fl_cardiaco BOOLEAN NOT NULL DEFAULT FALSE,
fl_diabetico BOOLEAN NOT NULL DEFAULT FALSE,
fl_gravidez BOOLEAN NOT NULL DEFAULT FALSE,
fl_febre_reumatica BOOLEAN NOT NULL DEFAULT FALSE,
fl_aids BOOLEAN NOT NULL DEFAULT FALSE,
fl_hemorragia BOOLEAN NOT NULL DEFAULT FALSE,
fl_epilepsia BOOLEAN NOT NULL DEFAULT FALSE,
fl_alergia BOOLEAN NOT NULL DEFAULT FALSE,

fl_habito_fio_dental BOOLEAN NOT NULL DEFAULT FALSE,
fl_sangramento_gengival BOOLEAN NOT NULL DEFAULT FALSE,
fl_comer_entre_refeicao BOOLEAN NOT NULL DEFAULT FALSE,
fl_visita_dentista CHAR NOT NULL,

dt_cadastro DATE NOT NULL,
dt_modificacao DATE NOT NULL,
fl_desativado CHAR NOT NULL,

PRIMARY KEY (cd_cliente)
);

CREATE TABLE tb_remedio (
cd_remedio INT(6) NOT NULL AUTO_INCREMENT,
ds_remedio VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_remedio)
);

CREATE TABLE tb_cuidado_especiai (
cd_cuidados_especiais INT(6) NOT NULL AUTO_INCREMENT,
ds_cuidados_especiaiso VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_cuidados_especiais)
);

CREATE TABLE tb_doenca (
cd_doenca INT(6) NOT NULL AUTO_INCREMENT,
ds_doenca VARCHAR(100) NOT NULL,

PRIMARY KEY (cd_doenca)
);

CREATE TABLE tb_cliente_remedio (
cd_cliente_remedio INT(6) NOT NULL AUTO_INCREMENT,
cd_cliente INT(6) NOT NULL,
cd_remedio INT(6) NOT NULL,

PRIMARY KEY (cd_cliente_remedio)
);

CREATE TABLE tb_cliente_doenca (
cd_cliente_doenca INT(6) NOT NULL AUTO_INCREMENT,
cd_cliente INT(6) NOT NULL,
cd_doenca INT(6) NOT NULL,

PRIMARY KEY (cd_cliente_doenca)
);

CREATE TABLE tb_cliente_cuidado_especial (
cd_cliente_cuidado_especial INT(6) NOT NULL AUTO_INCREMENT,
cd_cliente INT(6) NOT NULL,
cd_cuidado_especial INT(6) NOT NULL,

PRIMARY KEY (cd_cliente_cuidado_especial)
);