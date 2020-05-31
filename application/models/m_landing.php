<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_landing extends CI_Model
{
  public function getAllAlternatif()
  {
    $query=$this->db->query("SELECT * FROM tbl_alternatif ORDER BY CAST(SUBSTRING(kode_alternatif, LOCATE('A',kode_alternatif)+1) AS SIGNED) ASC");
    return $query->result();
  }

  public function getAllKriteria()
  {
    $query=$this->db->query("SELECT * FROM tbl_kriteria ORDER BY CAST(SUBSTRING(kode_kriteria, LOCATE('K',kode_kriteria)+1) AS SIGNED) ASC");
    return $query->result();
  }

  public function getAllNilai()
  {
    $query=$this->db->query("SELECT kode_alternatif, nilai FROM tbl_nilai ORDER BY CAST(SUBSTRING(kode_alternatif, LOCATE('A',kode_alternatif)+1) AS SIGNED) ASC");
    return $query->result();
  }

  public function hitung_ternormalisasi()
  {
    $query=$this->db->query(
    " SELECT id_d AS id_w, nilai_d / (SELECT SUM(nilai_d) FROM (  SELECT kode_a AS id_d, MIN(nilai_v) AS nilai_d
            FROM (SELECT A.kode_kriteria AS kode_a, B.kode_kriteria AS kode_b,
                    CASE
                    WHEN A.nilai_m >= B.nilai_m THEN 1
                    WHEN B.nilai_l >= A.nilai_u THEN 0
                    ELSE (B.nilai_l - A.nilai_u) / ((A.nilai_m - A.nilai_u) - (B.nilai_m - B.nilai_l))
                    END AS nilai_v
                  FROM tbl_kriteria B
                    CROSS JOIN tbl_kriteria A
                    WHERE A.kode_kriteria <> B.kode_kriteria
                    ORDER BY CAST(SUBSTRING(kode_a, LOCATE('K',kode_a)+1) AS SIGNED) ASC, CAST(SUBSTRING(kode_b, LOCATE('K',kode_b)+1) AS SIGNED) ASC) AS tbl_d
            GROUP BY kode_a
            ORDER BY CAST(SUBSTRING(kode_a, LOCATE('K',kode_a)+1) AS SIGNED) ASC  ) AS tbl_v) AS nilai_w 
      
      FROM (  SELECT kode_a AS id_d, MIN(nilai_v) AS nilai_d
              FROM (SELECT A.kode_kriteria AS kode_a, B.kode_kriteria AS kode_b,
                      CASE
                      WHEN A.nilai_m >= B.nilai_m THEN 1
                      WHEN B.nilai_l >= A.nilai_u THEN 0
                      ELSE (B.nilai_l - A.nilai_u) / ((A.nilai_m - A.nilai_u) - (B.nilai_m - B.nilai_l))
                      END AS nilai_v
                    FROM tbl_kriteria B
                      CROSS JOIN tbl_kriteria A
                      WHERE A.kode_kriteria <> B.kode_kriteria
                      ORDER BY CAST(SUBSTRING(kode_a, LOCATE('K',kode_a)+1) AS SIGNED) ASC, CAST(SUBSTRING(kode_b, LOCATE('K',kode_b)+1) AS SIGNED) ASC) AS tbl_d
              GROUP BY kode_a
              ORDER BY CAST(SUBSTRING(kode_a, LOCATE('K',kode_a)+1) AS SIGNED) ASC ) AS tbl_normalized"
    );
    return $query->result();
  }
}