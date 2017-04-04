<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>添加信息</title>
	</head>
	<body>
	<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="cart_add.php">发布文章</a></p>
    <p></td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="address_add_handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">添加信息</td>
          </tr>
        <tr>
          <td width="119">id</td>
          <td width="625"><label for="addressId"></label>
            <input type="text" name="addressId" id="addressId" /></td>
        </tr>
        <tr>
          <td>用户名称</td>
          <td><input type="text" name="userName" id="userName" /></td>
        </tr>
        <tr>
          <td>地址</td>
          <td><input type="text" name="streetName" id="streetName" /></td>
          
        </tr>
        <tr>
          <td>邮箱</td>
          <td><input type="text" name="postCode" id="postCode" /></td>
        </tr>
        <tr>
          <td>电话</td>
          <td><input type="text" name="tel" id="tel" /></td>
        </tr>
        <tr>
          <td>是否默认</td>
          <td><input type="text" name="isDefault" id="isDefault" /></td>
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
