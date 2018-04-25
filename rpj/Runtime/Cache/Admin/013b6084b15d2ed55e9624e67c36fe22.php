<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: goods_info.htm 17126 2010-04-23 10:30:26Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加新商品 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/RPJ2.0/rpj/Public/Admin/css/general.css" rel="stylesheet" type="text/css" />
<link href="/RPJ2.0/rpj/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function charea(a) {
    var spans = ['general','detail','mix'];
    for(i=0;i<3;i++) {
        var o = document.getElementById(spans[i]+'-tab');
        var tb = document.getElementById(spans[i]+'-table');
        o.className = o.id==a+'-tab'?'tab-front':'tab-back';
        tb.style.display = tb.id==a+'-table'?'block':'none';
    }

}
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="goods.php?act=list">商品列表</a></span>
<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新商品 </span>
<div style="clear:both"></div>
</h1>

<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab" onclick="charea('general');">通用信息</span>
        <span class="tab-back" id="detail-tab" onclick="charea('detail');">详细描述</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="<?php echo U('admin/product/productadd');?>" method="post" name="theForm" >
        <!-- 最大文件限制 -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
        <!-- 通用信息 -->
        <table width="90%" id="general-table" align="center">
          <tr>
            <td class="label">商品名称：</td>
            <td><input type="text" name="productName" value="" style="float:left;color:;" size="30" /></td>
          </tr>
          <tr>
            <td class="label">
            <a href="#" title="点击此处查看提示信息"><img src="/RPJ2.0/rpj/Public/Admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品货号： </td>
            <td><input type="text" name="productsn" value="" size="20"  /><span id="goods_sn_notice"></span><br />
            <span class="notice-span" style="display:block"  id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
          </tr>
          <tr>
            <td class="label">商品分组：</td>
            <td><select name="groupID"  ><option value="0">请选择...</option>
                <option value="6" >手机配件</option>
                <option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option>
                <option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;充电器</option>
                <option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option>
                <option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option>
                <option value="1" >手机类型</option>
                <option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option>
                <option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option>
                <option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option>
                <option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option>
                <option value="12" >充值卡</option>
            </select>
             </td>
          </tr>

          <tr>
            <td class="label">商品类型：</td>
            <td><select name="parentID"  ><option value="0">请选择...</option>
                <option value="6" >手机配件</option>
                <option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option>
                <option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;充电器</option>
                <option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option>
                <option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option>
                <option value="1" >手机类型</option>
                <option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option>
                <option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option>
                <option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option>
                <option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option>
                <option value="12" >充值卡</option>
            </select>
             </td>
          </tr>


          <tr>
            <td class="label">是否热销商品？</td>
            <td><input type="checkbox" name="isHot" value="1" size="20" /></td>

          </tr>

          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" name="productpicture" size="35" />
            </td>

          </tr>
          <tr>
          <td class="label">上传附件：</td>
          <td>
            <input type="file" name="attachement" size="35" />
          </td>
          </tr>
        </table>

        <!-- 详细描述 -->
        <table width="300%" id="detail-table" style="display:none">
          <tr>
            <td><textarea name="productDesc"></textarea></td>
          </tr>
        </table>

        <div class="button-div">
          <input type="hidden" name="goods_id" value="0" />
                    <input type="submit" value=" 确定 " class="button" />
          <input type="reset" value=" 重置 " class="button" />
        </div>
        <input type="hidden" name="act" value="insert" />
      </form>
    </div>
</div>
<!-- end goods form -->

</body>
</html>