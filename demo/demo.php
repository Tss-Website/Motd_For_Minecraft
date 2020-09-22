<?php
$url="https://motd.tsfk.top/api.php?ip=【改为你的ip】&port=【改为你的端口】"; //这里必须修改哦！
$json_string = file_get_contents($url);
$data = json_decode($json_string, true);

$content = $data['status'];
if(!$content)
print '拉取失败<!--';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="referrer" content="never">
 <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>服务器状态</title>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css"/>
</head>
<body>

<div class="mdui-container">
  <div class="mdui-table-fluid">
    <table class="mdui-table mdui-table-hoverable">
      <tbody>
      <tr>
        
        <td>在线状态</td>
        <td><?php echo $data['status'];?></td>
        
      </tr>
	  <tr>
        
        <td>当前MOTD</td>
        <td><?php echo $data['motd'];?></td>
        
      </tr>
      <tr>
        
        <td>协议版本</td>
        <td><?php echo $data['agreement'];?></td>
        
      </tr>
      <tr>
        
        <td>支持游戏版本</td>
        <td><?php echo $data['version'];?></td>
        
      </tr>
	  <tr>
        
        <td>在线人数</td>
        <td><?php echo $data['online'];?></td>
        
      </tr>
	  
	  <tr>
        
        <td>最大进入人数</td>
        <td><?php echo $data['max'];?></td>
        
      </tr>
	  <tr>
        
        <td>游戏模式</td>
        <td><?php $gm= $data['gamemode'];
		if($gm == 'null') {
echo '检测失败';
} else{
echo $data['gamemode'];}
		?></td>
        
      </tr>
	  <tr>
        
        <td>延迟</td>
        <td><?php echo $data['delay'];?> ms</td>
        
      </tr>
	  <tr>
        
        
      </tr>
      </tbody>
    </table>
  </div>
</div>

<script src="//cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js"></script>
</body>
