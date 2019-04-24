
CREATE TABLE nagari (
                id_nagari INTEGER NOT NULL,
                nama_nagari VARCHAR(20) NOT NULL,
                geom OTHER NOT NULL,
                CONSTRAINT nagari_pk PRIMARY KEY (id_nagari)
);


CREATE TABLE Jorong (
                id_jorong INTEGER NOT NULL,
                nama_jorong VARCHAR(20) NOT NULL,
                geom OTHER NOT NULL,
                CONSTRAINT jorong_pk PRIMARY KEY (id_jorong)
);


CREATE TABLE rumah (
                id_rumah VARCHAR(11) NOT NULL,
                alamat VARCHAR(50) NOT NULL,
                geom OTHER NOT NULL,
                CONSTRAINT rumah_pk PRIMARY KEY (id_rumah)
);


CREATE TABLE KK (
                no_kk INTEGER NOT NULL,
                id_rumah VARCHAR(11) NOT NULL,
                CONSTRAINT kk_pk PRIMARY KEY (no_kk)
);


CREATE TABLE jenis_usaha (
                id_jenis_usaha INTEGER NOT NULL,
                nama_jenis_usaha VARCHAR(25) NOT NULL,
                CONSTRAINT jenis_usaha_pk PRIMARY KEY (id_jenis_usaha)
);


CREATE TABLE Penduduk (
                nik INTEGER NOT NULL,
                no_kk INTEGER NOT NULL,
                nama_lengkap VARCHAR(25) NOT NULL,
                jenis_kelamin SMALLINT NOT NULL,
                tempat_lahir VARCHAR(20) NOT NULL,
                tanggal_lahir DATE NOT NULL,
                nama_lengkap_ibu VARCHAR(25) NOT NULL,
                nama_lengkap_ayah VARCHAR(25) NOT NULL,
                status_kawin VARCHAR(20) NOT NULL,
                gol_darah VARCHAR(20) NOT NULL,
                pendidikan_akhir VARCHAR(20) NOT NULL,
                jenis_pekerjaan VARCHAR(25) NOT NULL,
                status_hubkel VARCHAR(20) NOT NULL,
                tanggal_entri DATE NOT NULL,
                tanggal_ubah DATE NOT NULL,
                CONSTRAINT penduduk_pk PRIMARY KEY (nik)
);


CREATE TABLE Pegawai (
                id_pegawai VARCHAR(5) NOT NULL,
                nama_pegawai VARCHAR(25) NOT NULL,
                jabatan VARCHAR(20) NOT NULL,
                CONSTRAINT pegawai_pk PRIMARY KEY (id_pegawai)
);


CREATE TABLE SKPi (
                no_surat VARCHAR(20) NOT NULL,
                nik INTEGER NOT NULL,
                jalan_jorong VARCHAR(50) NOT NULL,
                kelurahan VARCHAR(20) NOT NULL,
                kecamatan VARCHAR(20) NOT NULL,
                kabupaten_kota VARCHAR(20) NOT NULL,
                provinsi VARCHAR(20) NOT NULL,
                alasan VARCHAR(50) NOT NULL,
                tanggal DATE NOT NULL,
                status SMALLINT NOT NULL,
                id_pegawai VARCHAR(5) NOT NULL,
                CONSTRAINT skpi_pk PRIMARY KEY (no_surat)
);


CREATE TABLE detail_SKPi_pengikut (
                no_surat VARCHAR(20) NOT NULL,
                nik INTEGER NOT NULL,
                CONSTRAINT detail_skpi_pengikut_pk PRIMARY KEY (no_surat, nik)
);


CREATE TABLE SKU (
                no_surat VARCHAR(20) NOT NULL,
                nik INTEGER NOT NULL,
                tanggal DATE NOT NULL,
                status SMALLINT NOT NULL,
                id_pegawai VARCHAR(5) NOT NULL,
                id_jenis_usaha INTEGER NOT NULL,
                id_jorong INTEGER NOT NULL,
                CONSTRAINT sku_pk PRIMARY KEY (no_surat)
);


CREATE TABLE SKMD (
                no_surat VARCHAR(20) NOT NULL,
                nik INTEGER NOT NULL,
                nik_pelapor INTEGER NOT NULL,
                hubungan VARCHAR(20) NOT NULL,
                tanggal DATE NOT NULL,
                status SMALLINT NOT NULL,
                id_pegawai VARCHAR(5) NOT NULL,
                CONSTRAINT skmd_pk PRIMARY KEY (no_surat)
);


CREATE TABLE SKTM (
                no_surat VARCHAR(20) NOT NULL,
                nik INTEGER NOT NULL,
                nik_ibu INTEGER NOT NULL,
                nik_ayah INTEGER NOT NULL,
                keterangan VARCHAR(20) NOT NULL,
                tanggal DATE NOT NULL,
                status SMALLINT NOT NULL,
                id_pegawai VARCHAR(5) NOT NULL,
                CONSTRAINT sktm_pk PRIMARY KEY (no_surat)
);


CREATE TABLE SKBB (
                no_surat VARCHAR(20) NOT NULL,
                nik INTEGER NOT NULL,
                keterangan SMALLINT NOT NULL,
                untuk VARCHAR(20) NOT NULL,
                tanggal DATE NOT NULL,
                status SMALLINT NOT NULL,
                id_pegawai VARCHAR(5) NOT NULL,
                CONSTRAINT skbb_pk PRIMARY KEY (no_surat)
);


ALTER TABLE SKU ADD CONSTRAINT jorong_sku_fk
FOREIGN KEY (id_jorong)
REFERENCES Jorong (id_jorong)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE KK ADD CONSTRAINT rumah_kk_fk
FOREIGN KEY (id_rumah)
REFERENCES rumah (id_rumah)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE Penduduk ADD CONSTRAINT kk_penduduk_fk
FOREIGN KEY (no_kk)
REFERENCES KK (no_kk)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKU ADD CONSTRAINT jenis_usaha_sku_fk
FOREIGN KEY (id_jenis_usaha)
REFERENCES jenis_usaha (id_jenis_usaha)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKBB ADD CONSTRAINT penduduk_skbb_fk
FOREIGN KEY (nik)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKTM ADD CONSTRAINT penduduk_sktm_fk
FOREIGN KEY (nik)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKMD ADD CONSTRAINT penduduk_skmd_fk
FOREIGN KEY (nik)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKPi ADD CONSTRAINT penduduk_skpi_fk
FOREIGN KEY (nik)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKU ADD CONSTRAINT penduduk_sku_fk
FOREIGN KEY (nik)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKMD ADD CONSTRAINT penduduk_skmd_fk1
FOREIGN KEY (nik_pelapor)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKTM ADD CONSTRAINT penduduk_sktm_fk1
FOREIGN KEY (nik_ibu)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKTM ADD CONSTRAINT penduduk_sktm_fk2
FOREIGN KEY (nik_ayah)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE detail_SKPi_pengikut ADD CONSTRAINT penduduk_detail_skpi_pengikut_fk
FOREIGN KEY (nik)
REFERENCES Penduduk (nik)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKBB ADD CONSTRAINT pegawai_skbb_fk
FOREIGN KEY (id_pegawai)
REFERENCES Pegawai (id_pegawai)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKTM ADD CONSTRAINT pegawai_sktm_fk
FOREIGN KEY (id_pegawai)
REFERENCES Pegawai (id_pegawai)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKMD ADD CONSTRAINT pegawai_skmd_fk
FOREIGN KEY (id_pegawai)
REFERENCES Pegawai (id_pegawai)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKU ADD CONSTRAINT pegawai_sku_fk
FOREIGN KEY (id_pegawai)
REFERENCES Pegawai (id_pegawai)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE SKPi ADD CONSTRAINT pegawai_skpi_fk
FOREIGN KEY (id_pegawai)
REFERENCES Pegawai (id_pegawai)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE detail_SKPi_pengikut ADD CONSTRAINT skpi_detail_skpi_pengikut_fk
FOREIGN KEY (no_surat)
REFERENCES SKPi (no_surat)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;
