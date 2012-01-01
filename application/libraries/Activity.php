<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Activity
 *
 * Activity library for CodeIgniter.
 *
 * @package		Activity
 * @author		Abban Dunne (http://abandon.ie)
 * @version		0.1
 * @license		MIT License Copyright (c) 2008 Erick Hartanto
 */

class Activity{
	function __construct(){
		$this->ci =& get_instance();
		$this->ci->load->database();
		$this->ci->load->model('Activitymodel');
	}
	
	function save($type, $serial, $event_id=0, $incoming_id=0){
		$this->ci->load->library('session');
		$time = unix_to_human(now(), TRUE, 'eu');
		
		$data = array(
			'type'=>$type,
			'user_id'=>$this->ci->session->userdata('user_id'),
			'user_username'=>$this->ci->session->userdata('username'),
			'user_name'=>$this->ci->session->userdata('name'),
			'user_email'=>$this->ci->session->userdata('email'),
			'event_id'=>$event_id,
			'incoming_id'=>$incoming_id,
			'time'=>$time,
			'data'=>serialize($serial)
		);
		
		$this->ci->Activitymodel->save($data);
	}
	
	function manual_save($type, $user_id, $user_username, $user_name, $user_email, $serial, $event_id=0, $incoming_id=0){
		$time = unix_to_human(now(), TRUE, 'eu');
		
		$data = array(
			'type'=>$type,
			'user_id'=>$user_id,
			'user_username'=>$user_username,
			'user_name'=>$user_name,
			'user_email'=>$user_email,
			'event_id'=>$event_id,
			'event_name'=>$event_name,
			'incoming_id'=>$incoming_id,
			'time'=>$time,
			'data'=>serialize($serial)
		);
		
		$this->ci->Activitymodel->save($data);
	}
	
	function get_activity($limit, $offset, $type, $id){
		$method = 'get_' .$type .'_activity';
		$feeds = $this->ci->Activitymodel->$method($limit, $offset, $id);
		if($feeds) $activity = $this->_build_feeds($feeds);
		if(isset($activity)) return $activity;
	}
	
	function incoming_activity(){
		
	}
	
	function friends_activity(){
		
	}
	
	function event_activity(){
		
	}
	
	private function _build_feeds($feeds){
		foreach($feeds as $key => $feed){
			$activity[$key]->time = $feed->time;
			$activity[$key]->type = $feed->type;
			$activity[$key]->event_id = $feed->event_id;
			$activity[$key]->user_id = $feed->user_id;
			$activity[$key]->user_name = $feed->user_name;
			$activity[$key]->user_username = $feed->user_username;
			$activity[$key]->user_email = $feed->user_email;
			$data=unserialize($feed->data);
			
			//Build Activity Message
			
			$activity[$key]->message = '';
			$activity[$key]->message .= '<a href="' .site_url('member/' .$feed->user_username) .'">';
			
			if($this->ci->tank_auth->is_logged_in() && $this->ci->session->userdata('user_id') == $feed->user_id){
				$activity[$key]->message .= 'You';
				$adjective = ' are';
			}else{
				$activity[$key]->message .= ($feed->user_name) ? $feed->user_name : $feed->user_username;
				$adjective = ' is';
			}
			
			$activity[$key]->message .= '</a>';
			
			if($feed->type == "create"){
				$activity[$key]->message .= ' published the event, <a href="' .site_url('event/'.$data['event_slug'] .'/' .$feed->event_id) .'">' .$data['event_name'] .'</a>.';
			}
			
			if($feed->type == "attend"){
				$activity[$key]->message .= $adjective .' attending the event, <a href="' .site_url('event/'.$data['event_slug'] .'/' .$feed->event_id) .'">' .$data['event_name'] .'</a>.';
			}
			
			if($feed->type == "checkin"){
				$activity[$key]->message .= ' checked into the event, <a href="' .site_url('event/'.$data['event_slug'] .'/' .$feed->event_id) .'">' .$data['event_name'] .'</a>.';
			}
			
			if($feed->type == "comment"){
				$activity[$key]->message .= ' commented on the event, <a href="' .site_url('event/'.$data['event_slug'] .'/' .$feed->event_id) .'">' .$data['event_name'] .'</a>.';
			}
			
			if($feed->type == "status"){
				$activity[$key]->message .= ' said, ' .$data['status'];
			}
			
			if($feed->type == "follow"){
				$activity[$key]->message .= $adjective .' following <a href="' .site_url('member/' .$data['follow_username']) .'">';
				
				if($this->ci->tank_auth->is_logged_in() && $this->ci->session->userdata('user_id') == $feed->incoming_id){
					$activity[$key]->message .= 'you';
				}else{
					$activity[$key]->message .= ($data['follow_name']) ? $data['follow_name'] : $data['follow_username'];
				}
				$activity[$key]->message .= '</a>.';
			}
		}
		return $activity;
	}
}