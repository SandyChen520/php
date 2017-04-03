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
    <p><a href="cart_manage.php">管理购物车</a></p><a href="cart_add.php">添加信息</a></td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="cart_add_handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">添加信息</td>
          </tr>
        <tr>
          <td width="119">id</td>
          <td width="625"><label for="productId"></label>
            <input type="text" name="productId" id="productId" /></td>
        </tr>
        <tr>
          <td>商品名称</td>
          <td><input type="text" name="productName" id="productName" /></td>
        </tr>
        <tr>
          <td>价格</td>
          <td><input type="text" name="productPrice" id="author" /></td>
          
        </tr>
        <tr>
          <td>数量</td>
          <td><input type="text" name="productQuentity" id="productQuentity" /></td>
        </tr>
        <tr>
          <td>图片路径</td>
          <td><input type="text" name="productImage" id="productImage" /></td>
        </tr>
        <tr>
          <td>赠品</td>
          <td><input type="text" name="parts" id="parts" /></td>
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
