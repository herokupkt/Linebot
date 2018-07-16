 <?php
  

function send_LINE($msg){
 $access_token = 'aExLAT9uGTusXVaSY2Xb4zyl67mMj+LBQdQC3g18nBQaAgruxVGRlhTczGN+aH7buK+vQtH/WrfTLBwXT3O9B2VgLyTrl4029402weZKOeqiDAKNH9z/t8d541jhFjXZ5d2cNmrsD3zMO21us0RgFgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U1758729afbd9f44e813798cbdb33e8e7',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
