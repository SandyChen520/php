<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>修改</title>
	</head>
	<?php
		require_once("../connect.php");
		$id = $_GET["id"];
		echo mysqli_error($con);
		$query = mysqli_query($con, "select * from article where id='$id'");
		$data = mysqli_fetch_assoc($query);
		print_r($data);
	?>
	<body>
	<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="article_add.php">发布文章</a></p>
    <p><a href="article_manage.php">管理文章</a></p><a href="article_add.php"></a></td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="article_modify_handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">发布文章</td>
          </tr>
        <tr>
          <td width="119">标题</td>
          <td width="625"><label for="title"></label>
            <input type="text" name="title" id="title" value="<?php echo $data['title']?>"/>
            <input type="hidden" name="id" id="di" value="<?php echo $data['id']?>"/>
            </td>
        </tr>
        <tr>
          <td>作者</td>
          <td><input type="text" name="author" id="author" value="<?php echo $data['author']?>"/></td>
        </tr>
        <tr>
          <td>简介</td>
          <td><label for="description"></label>
            <textarea name="description" id="description" cols="60" rows="5"><?php echo $data['description']?></textarea></td>
        </tr>
        <tr>
          <td>内容</td>
          <td><textarea name="content" cols="60" rows="15" id="content"><?php echo $data['content']?></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
</table>
</body>
</html>
