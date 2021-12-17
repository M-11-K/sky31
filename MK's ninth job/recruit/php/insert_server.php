<?php
require './connect/connect.php';
class insert_server{
    public function setReturn($code){
        $message=array(
            0=>'undefined index',
            1=>'success',
            2=>'fail',
            3=>'Illegal format'
        );
        $result=array(
            'code'=>$code,
            'message'=>$message($code)
        );
        return json_encode($result);
    }
    public function setReturns($code,$checkAll,$data){
        $result=array(
            'code'=>$code,
            'checkAll'=>$checkAll,
            'data'=>$data
        );
        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }
    public function insert($stu_num,$stu_name,$qq,$phone_num,$remarks,$image){
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)==false){
            return $this->setReturn(3);
        }
        if($stu_name==""||$stu_num==""||$qq==""||$phone_num==""){
            return $this->setReturn(0);
        }
        global $conn;
        $stmt=mysqli_prepare($conn,"insert into stu_recruit(stu_num, stu_name, qq, phone_num, remarks, image) values (?,?,?,?,?,?)");
        $stmt->bind_param('ssiisb',$stu_num,$stu_num,$qq,$phone_num,$remarks,$image);
        mysqli_stmt_execute($stmt);
        $stmt->bind_result($stmt,$stu_num,$stu_name,$qq,$phone_num,$remarks,$image);
        while($stmt->fetch()) {
            $result = array();
            $result["stu_num"] =$stu_num;
            $result["stu_name"] =$stu_name;
            $result["qq"] =$qq;
            $result["phone_num"] =$phone_num;
            $result["remarks"] =$remarks;
            $result["image"] =$image;
        }
        $stmt->close();
        if(empty($result)==false){
            return $this->setReturns(1,'success', $result);
        }
        else{
            return $this->setReturn(2);
        }
    }
    }