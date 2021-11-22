<?php

include_once 'SQLSession.php';
include_once '../model/NewProduct.php';
class hotswiperwrapperDao
{


    public function selectById($id){
        $conn = SQLSession::get_sql_connection();
        $sql = "select * from hot_swiper_wrapper where  id =" . $id;
        $result = $conn->query($sql);

        if (!$result){
            echo  mysqli_errno();
            return ;
        }
        $response  = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // todo 通过类构造器获取
                $temp = new swiper();
                $temp->id = $row['id'];
                $temp->img1 = $row['img1'];
                $temp->img2 = $row['img2'];
                $temp->img3=$row['img3'];
                $temp->img4=$row['img4'];
                // 补充属性
                $response = $temp;
            }


        }
        return $response;

    }

}
