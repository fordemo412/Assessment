<?php
class Model
{
    public $con= "";
    public function __construct()
    {
        $this->con = new mysqli("localhost","root","","em");
    }

    function Select_Where($tbl,$where)
    {
        // SELECT * FROM TBL WHERE NAME=THIS AND PWD =THIS WHERE 1=1
        $key = array_keys($where);
        $val = array_values($where);
        $sql = "SELECT * FROM $tbl WHERE 1=1 ";
        $i = 0;
        foreach($where as $w)
        {
            $sql.=" AND $key[$i] = '$val[$i]'";
            $i++;
        }
        // echo $sql;exit;
        $q = $this->con->query($sql);
        return $q; 
    }

    public function InsertData($tbl,$data)
    {
        // insert into tabelname (name,pwd...) values ('',''//)
        $keys = array_keys($data);
        $k = implode(",",$keys);
        $vals = array_values($data);
        $v = implode("','",$vals);

        $sql = "INSERT INTO $tbl ($k) VALUES ('$v')";
        // echo $sql;exit;
        $q = $this->con->query($sql); 
        return $q;     
    }

    public function SelectAll($tbl)
    {
        $sql = "SELECT * FROM $tbl";
        $q = $this->con->query($sql);
        while($f = $q->fetch_object())
        {
            $result[] = $f;
        }
        return $result;
    }

    function delete_where($tbl,$where)
	{
		$key_arr=array_keys($where); // 
		$value_arr=array_values($where);
		
		$del="delete from $tbl where 1=1"; // query continue
		$i=0;
		foreach($where as $w)
		{
			echo $del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->con->query($del);
		return $run;
	}    

    function UpdateData($tbl,$data,$where)
    {
        $keys = array_keys($data);
        $val = array_values($data);
        $sql = "UPDATE  $tbl SET ";
        $i = 0;
        $count = count($data);
        foreach($data as $d)
        {
                if($count == $i+1)
                {
                    $sql.=" $keys[$i] = '$val[$i]'";
                }
                else{
                    $sql.=" $keys[$i] = '$val[$i]',";
                }
                $i++;
        }
        $sql.= "    WHERE 1=1 ";
        $wk = array_keys($where);
        $wv = array_values($where);
        $k = 0;
        foreach($where as $t)
        {
            $sql.=" AND $wk[$k]='$wv[$k]'";
            $k++;
        }
        // echo $sql;exit;
        $q = $this->con->query($sql);
        return $q;
    }
}
$obj=new model;
?>