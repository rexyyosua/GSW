<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin_ply extends CI_Model {
		
		public function all(){
			$hasil =$this->db->get('team');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		public function find ($id){
			$hasil = $this->db->where('id',$id)
							  ->limit(1)
							  ->get('team');
			if($hasil->num_rows() > 0){
				return $hasil->row();
			}else{
				return array();
			}
		}
		
		public function create($data_pemain){
			$this->db->insert('team',$data_pemain);
		}
		
		public function update($id, $data_pemain){
			$this->db->where('id',$id)
					 ->update('team',$data_pemain);
		}
		
		public function delete($id){
			$this->db->where('id',$id)
					 ->delete('team'); 
		}
		
		public function details($id){
			$hasil =$this->db->where('id',$id)
						 ->limit(1)
						 ->get('team');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else{
				return array();
			}
		}
		
}