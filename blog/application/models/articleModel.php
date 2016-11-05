<?php

class articleModel extends CI_Model {
	public function __construct()
	{
		parent::__construct(); 
	}

	public function getArticles($table)
	{
		$data = $this->db->order_by('id','desc')->get($table);
		return $data->result_array();
	}

	public function countArticles($table,$type = array()){
        if(!empty($type))$this->db->like($type);
		$this->db->from($table);
		return $this->db->count_all_results();
		//return $this->db->count_all($table);
    }

    public function getLimitArticles($table, $arr=array('num'=>false,'offset'=>false,'con'=>array())){
        if(isset($arr['num']) and isset($arr['offset']) and ($arr['num']!==false) and ($arr['offset']!==false)){
	        if(!empty($arr['con'])) $this->db->like($arr['con']);
            $query = $this->db->order_by('id','desc')->get($table,$arr['num'],$arr['offset']);
            return $query->result_array();
        }else{
            return $this->getArticles($table);
        }
    }

	public function getArticle($table, $id, $index = ''){
	    $index = $index == ''? 'id' : $index;
	    $data = $this->db->where("$index=",$id)->get($table);
	    return $data->row_array();
	}

	public function getPN($table, $id){
		$prev = $this->db->where('id<',$id)->order_by('id','desc')->get($table);
		$next = $this->db->where('id>',$id)->order_by('id','asc')->get($table);
		return array($prev->row_array(),$next->row_array());
	}

	public function insertOne($table,$data){
		$id = $this->db->insert($table,$data);
		return $id;
	}

	public function delOne($table,$id,$index =''){
		$index = $index == ''? 'id' : $index;
		$id = $this->db->delete($table,array($index=>$id));
		return $id;
	}

	public function updateOne($table,$data,$id,$index =''){
		$index = $index == ''? 'id' : $index;
		$id = $this->db->where("$index=",$id)->update($table,$data);
		return $id;
	}
}