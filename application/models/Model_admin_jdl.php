<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_jdl extends CI_Model {
		
		public function all(){
			$hasil =$this->db->get('jadwal');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('jadwal');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		public function create($data_jadwal){
			$this->db->insert('jadwal',$data_jadwal);
		}
		
		public function update($id, $data_jadwal){
			$this->db->where('id',$id)
					 ->update('jadwal',$data_jadwal);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('jadwal'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('jadwal');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
}