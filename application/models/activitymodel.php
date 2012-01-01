<?php
class Activitymodel extends CI_Model {
	// table name
	private $tbl_activity = 'activity';
	private $tbl_follows = 'follows';

	function __construct(){
		parent::__construct();
	}
	
	function save($activity){
		$this->db->insert($this->tbl_activity, $activity);
	}
	
	// get number of users in database
	function count_activity($user_id){
		$this->db->select('count(*) AS count', FALSE);
		$this->db->from($this->tbl_activity);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_user_activity($limit, $offset, $user_id){
		$this->db->where('user_id', $user_id);
		$this->db->from($this->tbl_activity);
		$this->db->order_by("time", "desc");
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_event_activity($event_id){
		$this->db->where('event_id', $event_id);
		$this->db->order_by('time', 'desc');
		return $this->db->get($this->tbl_activity);
	}
	
	function count_all_activity($user_id){
		$this->db->select('count(*) AS count', FALSE);
		$this->db->from($this->tbl_activity);
		$this->db->where('incoming_id', $user_id);
		$this->db->or_where('user_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_all_activity($limit, $offset, $user_id){
		$this->db->where('user_id', $user_id);
		$this->db->or_where('incoming_id', $user_id);
		$this->db->from($this->tbl_activity);
		$this->db->order_by("time", "desc");
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	
	function count_incoming_activity($user_id){
		$this->db->select('count(*) AS count', FALSE);
		$this->db->from($this->tbl_activity);
		$this->db->where('incoming_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_incoming_activity($limit, $offset, $user_id){
		$this->db->where('incoming_id', $user_id);
		$this->db->from($this->tbl_activity);
		$this->db->order_by("time", "desc");
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	
	function count_friends_activity($user_id){
		$this->db->select('count(*) AS count', FALSE);
		$this->db->from($this->tbl_activity .' a');
		$this->db->from($this->tbl_follows .' f');
		$this->db->where('f.user_id = ' .$user_id .' AND f.follow_id = a.user_id', NULL, FALSE);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_friends_activity($limit, $offset, $user_id){
		$this->db->select('a.*', FALSE);
		$this->db->from($this->tbl_activity .' a');
		$this->db->from($this->tbl_follows .' f');
		$this->db->where('f.user_id = ' .$user_id .' AND f.follow_id = a.user_id', NULL, FALSE);
		$this->db->order_by("time", "desc");
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
}
?>