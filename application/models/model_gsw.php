<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gsw extends CI_Model {
		
		public function all(){
			$hasil =$this->db->order_by('tgl','ASC')
							 ->get('jadwal');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_berita(){
			$hasil =$this->db->order_by('tanggal_berita','DESC')
							 ->get('berita');

			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_berita ($b_id){
			$hasil = $this->db->where('id_berita',$b_id)
							  ->get('berita');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_komen ($k_id){
			$hasil = $this->db->where('berita_id',$k_id)
							  ->get('komentar');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function all_team(){
			$hasil =$this->db->get('team');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find_team ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('team');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}		
}