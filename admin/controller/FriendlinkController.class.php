<?php 
/**
* 
*/
class FriendlinkController extends Controller
{
	
	function __construct()
	{

	}
	function index(){
		$lists = M('Friendlink')->select('select * from zt_friend_link');
		//showPage();
		include "./admin/view/Friendlink/index.html";
	}
	function setting(){
		include "./admin/view/Friendlink/setting.html";
	}
	function save(){
		M('Friendlink')->insert('zt_friend_link',$_POST);
		redirect('index.php?m=admin&c=friendlink&a=index');
	}
	function del(){
		$id = gv('id');
		M('Friendlink')->delete('zt_friend_link',"id=$id");
	}
}


 ?>