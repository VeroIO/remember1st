<?php 
	include_once '../core/database.php';
	class m_category extends database
	{
		function list_all_category(){
			$sql = "select * from category";
			$this->setQuery($sql);
	        $result = $this->loadAllRow();
	        return $result;
		}
		function list_category($tu,$lay){
			$sql = "select * from category limit $tu,$lay";
			$this->setQuery($sql);
	        $result = $this->loadAllRow();
	        return $result;			
		}		
		function del_category($id){
			$sql= "delete from category where id='$id' ";
			$this->setQuery($sql);
			$result = $this->execute(array($id));
			return $result;
		}
		function add_category($cateid,$catename){
			$sql= "INSERT INTO category(id,type) VALUES('$cateid','$catename')";
			$this->setQuery($sql);
			$result = $this->execute();
			return $result;
		}
		function update_info($username,$midman_name,$midman_fbid,$midman_fb){
			$sql = "update info_mm set fstlogin='1',midman_name='$midman_name',midman_fbid='$midman_fbid',midman_fb='$midman_fb' where username='$username'";
			$this->setQuery($sql);
			$result = $this->execute(array($username));
			return $result;
		}				
	}
?>