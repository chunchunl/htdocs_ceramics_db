<?php
require_once("../ceramics_db_connect.php");

header('Content-Type: application/json');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    try {
        if(!isset($_POST["id"])){
            throw new Exception("缺少商品ID");
        }

        // 獲取商品資訊以刪除圖片
        $sql = "SELECT image FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST["id"]);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows === 0){
            throw new Exception("找不到該商品");
        }

        $product = $result->fetch_assoc();

        // 刪除商品資料
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST["id"]);
        
        if(!$stmt->execute()){
            throw new Exception("商品刪除失敗");
        }

        // 刪除商品圖片
        $image_path = "uploads/" . $product["image"];
        if(file_exists($image_path)){
            unlink($image_path);
        }

        echo json_encode([
            "success" => true,
            "message" => "商品刪除成功"
        ]);

    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => $e->getMessage()
        ]);
    }
}
?>