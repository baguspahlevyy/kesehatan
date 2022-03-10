<?php
namespace Modules\Reportall\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * @property array|null|string name
 */
class Reportall extends Model {
    protected $table = 'karyawan';
    public $timestamps = true;


	
	public function sakitall($tanggal)
	{
		 	
		$db = DB::connection('mysql');
		$listuser = $db->select("
			SELECT
			A.dep,A.NIK,
			JABATAN,
			NAMA, sakit,
			IF(KONDISI='Pasien Dalam Pengawasan','1','0') AS PDP,
			IF(KONDISI='Positif Corona','1','0') AS POSITIF,
			hari, tanggal_rapid,KETERANGAN,
			sdokter1,	
			sdokter2,
			rapid,	
			hrapid,	tanggal_sakit,	tanggal_karantina,	
			tanggal_swab1,	hswab1,	tanggal_swab2,	
			hswab2,	tempat,
			tanggal_masuk,akhir
			FROM KARYAWAN A
			RIGHT JOIN(
			SELECT *
			FROM LAPKESEHATAN WHERE TANGGAL='$tanggal' AND KONDISI <> 'SEHAT') B ON A.NIK=B.NIK 
			ORDER BY DEP, NAMA");
			return $listuser;
	}


	public function all2($tanggal)
	{
		$db = DB::connection('mysql');
		$listuser = $db->select("SELECT
		A.NIK,NAMA,SUPERVISOR,MANAGER,DBM,JABATAN,DEP,SUBDEP,
		IF(KONDISI='Sakit','1','0') AS SAKITx,
		IF(KONDISI='Sehat','1','0') AS SEHAT,
		IF(KONDISI='Pasien Dalam Pengawasan','1','0') AS PDP,
		IF(KONDISI='Positif Corona','1','0') AS Positif,
		SAKIT AS JENIS_SAKIT,
		KETERANGAN,PERIKSA,SURAT,KERJA,HARI
		FROM KARYAWAN A
		LEFT JOIN(
		SELECT NIK,KONDISI,SAKIT,PERIKSA,KETERANGAN,SURAT,KERJA,HARI
		FROM LAPKESEHATAN WHERE TANGGAL='$tanggal') B ON A.NIK=B.NIK ORDER BY NAMA");
						 
		return $listuser;
	}


public function rekap($tanggal)
	{
		$db = DB::connection('mysql');
		$listuser = $db->select("SELECT A.MANAGER,TOTAL_KARYAWAN,
					(
					SELECT COUNT(NIK)
					FROM KARYAWAN
					WHERE NIK NOT IN(SELECT NIK FROM LAPKESEHATAN WHERE TANGGAL='$tanggal')
					) AS TOTAL_BELUM
					FROM (
					SELECT MANAGER,
					COUNT(NIK) AS TOTAL_KARYAWAN
					FROM KARYAWAN 
					)  A
					ORDER BY TOTAL_BELUM DESC");
						 
		return $listuser;
	}


public function spv($tanggal)
	{
		$db = DB::connection('mysql');
		$listuser = $db->select("SELECT A.SUPERVISOR,A.MANAGER,TOTAL_KARYAWAN,TOTAL_BELUM FROM (
			SELECT SUPERVISOR,MANAGER,
			COUNT(NIK) AS TOTAL_KARYAWAN
			FROM KARYAWAN GROUP BY SUPERVISOR
			)  A
			LEFT JOIN
			(
			SELECT SUPERVISOR,MANAGER,
			COUNT(NIK) AS TOTAL_BELUM
			FROM KARYAWAN
			WHERE NIK NOT IN(SELECT NIK FROM LAPKESEHATAN WHERE TANGGAL='$tanggal')
			GROUP BY SUPERVISOR
			) B  ON A.SUPERVISOR=B.SUPERVISOR
			ORDER BY TOTAL_BELUM DESC");
						 
		return $listuser;
	}

    public function manager($tanggal)
	{
		$db = DB::connection('mysql');
		$listuser = $db->select("SELECT A.MANAGER,TOTAL_KARYAWAN,TOTAL_BELUM FROM (
			SELECT MANAGER,
			COUNT(NIK) AS TOTAL_KARYAWAN
			FROM KARYAWAN GROUP BY MANAGER
			)  A
			LEFT JOIN
			(
			SELECT MANAGER,
			COUNT(NIK) AS TOTAL_BELUM
			FROM KARYAWAN
			WHERE NIK NOT IN(SELECT NIK FROM LAPKESEHATAN WHERE TANGGAL='$tanggal')
			GROUP BY MANAGER
			) B  ON A.MANAGER=B.MANAGER
			ORDER BY TOTAL_BELUM DESC");
				
		return $listuser;
	}
	public function detail($tanggal)
	{
		$db = DB::connection('mysql');
		$listuser = $db->select("SELECT * FROM KARYAWAN WHERE NIK NOT IN(SELECT NIK FROM LAPKESEHATAN WHERE TANGGAL='$tanggal') ORDER BY NIK");
				
		return $listuser;
    }	 
}
