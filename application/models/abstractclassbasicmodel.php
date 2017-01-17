<?php
abstract class AbstractclassBasicModel extends CI_Model
{

		const DB_TABLE= 'abstract';
 		const DB_TABLE_PK = 'abstract';

 		private $last_id;

 		public function insert()
 		{
 			$this->db->insert($this::DB_TABLE, $this);
 			$this->last_id = $this->db->insert_id();
 		}


 		private function update()
 		{
 			$this->db->update($this::DB_TABLE, $this, array($this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK}));
 			$this->last_id =$this->{$this::DB_TABLE_PK};
 		}

 		public function populate($row)
 		{
 			foreach($row as $key => $value)
 			{
 				$this->$key = $value;
 			}
 		}

 		public function updateData(array $dataArray,$field = false, $dbId)
 		{
 			if($field)
 			{
 				$field_name = $field;
 			}
 			else
 			{
 				$field_name = $this::DB_TABLE_PK;
 			}
 			$this->db->where($field_name,$dbId);
 			$this->db->update($this::DB_TABLE,$dataArray);
 		}

 		public function load($id)
 		{
 			$query = $this->db->get_where($this::DB_TABLE,array(
 				$this::DB_TABLE_PK => $id,
 				));

 			$this->populate($query->row());
 		}

 		public function delete()
 		{
 			$this->db->delete($this::DB_TABLE, array(
 				$this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK},
 				));
 			unset($this->{$this::DB_TABLE_PK});
 		}


 		public function save()
 		{
	
 			if( $this->{$this::DB_TABLE_PK} != 0 ){
 				$this->update();
 			}else{
 				$this->insert();
 			}
 		}


 		public function getLastID()
 		{
 			return $this->last_id;
 		}
}