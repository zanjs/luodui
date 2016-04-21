<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<script type="text/javascript">
$(function() {
	<?php if ($error) { ?>art.dialog.tips('<font color=red><?php echo $error; ?></font>', 3, 0);<?php } ?>
    dr_nav(<?php echo $ntype; ?>);
    $("#dr_category").hide();
    <?php if ($dir && $catid) { ?>
    dr_load_category('<?php echo $dir; ?>', <?php echo $catid; ?>);
    <?php if ($catid) { ?>
    $("#dr_category").show();
    $(".nav_c").hide();
    <?php } else { ?>
    $(".nav_c").show();
    <?php }  } ?>
});
function dr_nav(id) {
    $(".nav_0").hide();
    $(".nav_1").hide();
    $(".nav_2").hide();
    $(".nav_"+id).show();
    if (id == 2) {
        $(".nav_c").show();
    }
}
function dr_load_category(dir, catid) {
    $.post("<?php echo SELF; ?>?s="+dir+"&c=category&m=select&id="+catid, function(data) {
        $("#dr_category").html(data);
   });
}
function dr_selected2() {
    if ($("#dr_select").attr('checked')) {
        $("#dr_category").show();
    } else {
        $("#dr_category").hide();

    }
}
function dr_select_category(id) {
    if (id == 0) {
        $(".nav_c").show();
    } else {
        $(".nav_c").hide();
    }
}


function man_type_hide(){
    $(".mantype_box").hide();
    
}

function man_type_show(id){
    man_type_hide();
    $(".mantype_"+id).show();  
}
</script>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?>
	</div>
	<div class="bk10"></div>
    <div class="table-list col-tab">
        <ul class="tabBut cu-li">
            <li class="on"><?php echo $name; ?></li>
        </ul>
        <div class="contentList pad-10">
		<form action="" method="post" id="myform" name="myform">
		<table width="100%" class="table_form">
		<tr>
			<th width="200"><font color="red">*</font>&nbsp;<?php echo lang('html-424'); ?>： </th>
			<td><?php echo $select; ?></td>
		</tr>
		<tr>
			<th><font color="red">*</font>&nbsp;<?php echo lang('179'); ?>： </th>
			<td>
            <input <?php if ($data['id']) { ?>disabled<?php } ?> type="radio" name="ntype" <?php if ($ntype == 0) { ?> checked<?php } ?> value="0" onclick="dr_nav(0)" />&nbsp;<label><?php echo lang('198'); ?></label>
            &nbsp;&nbsp;&nbsp;
            <input <?php if ($data['id']) { ?>disabled<?php } ?> type="radio" name="ntype" <?php if ($ntype == 1) { ?> checked<?php } ?> value="1" onclick="dr_nav(1)" />&nbsp;<label><?php echo lang('128'); ?></label>
            &nbsp;&nbsp;&nbsp;
            <input <?php if ($data['id']) { ?>disabled<?php } ?> type="radio" name="ntype" <?php if ($ntype == 2) { ?> checked<?php } ?> value="2" onclick="dr_nav(2)" />&nbsp;<label><?php echo lang('html-010'); ?></label>
            </td>
		</tr>

        <tr class="nav_1">
            <th><font color="red">*</font>&nbsp;<?php echo lang('html-460'); ?>： </th>
            <td>
                <?php echo $select_page; ?>
            </td>
        </tr>
        <tr class="nav_1">
            <th><?php echo lang('html-737'); ?>： </th>
            <td>
                <input type="radio" name="page[extend]" value="1" <?php if ($data['extend']) { ?>checked<?php } ?> />&nbsp;<label><?php echo lang('yes'); ?></label>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="page[extend]" value="0" <?php if (!$data['extend']) { ?>checked<?php } ?> />&nbsp;<label><?php echo lang('no'); ?></label>
                <div class="onShow"><?php echo lang('html-738'); ?></div>
            </td>
        </tr>
        <tr class="nav_2">
            <th><font color="red">*</font>&nbsp;<?php echo lang('html-739'); ?>： </th>
            <td>
                <select <?php if ($data['id']) { ?>disabled<?php } ?> name="module[dir]" onChange="dr_load_category(this.value)">
                    <option value="0"> -- </option>
                    <?php $return = $this->list_tag("action=cache name=module"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                    <option value="<?php echo $t['dirname']; ?>" <?php if ($t['dirname']==$dir) { ?>selected<?php } ?>><?php echo $t['name']; ?></option>
                    <?php } } ?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php if (!$data['id'] || $catid) { ?>
                <span><input <?php if ($data['id']) { ?>disabled<?php } ?> name="module[select]" id="dr_select" <?php if ($catid) { ?>checked<?php } ?> value="1" type="checkbox" onclick="dr_selected2()">&nbsp;<label>选择栏目</label></span>
                &nbsp;&nbsp;&nbsp;
                <?php } ?>
                <span id="dr_category"></span>
            </td>
        </tr>
        <tr class="nav_2">
            <th><?php echo lang('html-737'); ?>： </th>
            <td>
                <input type="radio" name="module[extend]" value="1" <?php if ($data['extend']) { ?>checked<?php } ?> />&nbsp;<label><?php echo lang('yes'); ?></label>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="module[extend]" value="0" <?php if (!$data['extend']) { ?>checked<?php } ?> />&nbsp;<label><?php echo lang('no'); ?></label>
                <div class="onShow"><?php echo lang('html-738'); ?></div>
            </td>
        </tr>
        <tr>
			<th><font color="red">*</font>动画类型： </th>
			<td>
            <label><input  type="radio" name="data[mantype]" <?php if ($data['mantype'] == 0) { ?> checked<?php } ?> value="0" class="nomantype" onclick="man_type_hide()" />导航</label>
            <br/>
            <label><input  type="radio" name="data[mantype]" <?php if ($data['mantype'] == 1) { ?> checked<?php } ?> value="1" class="yesmantype" onclick="man_type_show(1)" />&nbsp;1 （背景图片 + 内容图片 + 按钮链接）</label>
            <br/>
            <label><input  type="radio" name="data[mantype]" <?php if ($data['mantype'] == 2) { ?> checked<?php } ?> value="2" class="yesmantype" onclick="man_type_show(2)"  />&nbsp;2 （背景图片 + 大标题文本 + 描述文本 + 按钮链接）</label>
             <br/>
            <label><input  type="radio" name="data[mantype]" <?php if ($data['mantype'] == 3) { ?> checked<?php } ?> value="3" class="yesmantype" onclick="man_type_show(3)"  />&nbsp;3 （背景视频 + 大标题文本 + 描述文本 + 按钮链接）</label>
            
            </td>
		</tr>
        <tr>
            <th><font color="red">*</font>&nbsp;<?php echo lang('html-026'); ?>： </th>
            <td>
                <?php echo dr_field_input('name', 'Text', $field['name']['setting'], $data['name']); ?>
                <div class="onShow"><?php echo lang('html-027'); ?></div>
            </td>
        </tr>
        <tr class="nav_0 nav_c">
            <th><?php echo lang('html-376'); ?>： </th>
            <td>
                <?php echo dr_field_input('thumb', 'File', $field['thumb']['setting'], $data['thumb']); ?>
                <div class="onShow"><?php echo lang('html-381'); ?></div>
            </td>
        </tr>
        <tr class="nav_0 nav_c">
            <th><?php echo lang('html-375'); ?>： </th>
            <td>
                <?php echo dr_field_input('title', 'Text', $field['title']['setting'], $data['title']); ?>
                <div class="onShow"><?php echo lang('html-380'); ?></div>
            </td>
        </tr>
         <tr class="nav_0 nav_c mantype_box mantype_2 mantype_3">
            <th>大标题文本： </th>
            <td>
                <?php echo dr_field_input('bigtitle', 'Text', $field['bigtitle']['setting'], $data['bigtitle']); ?>
                <div class="onShow">banner 大标题文字</div>
            </td>
        </tr>
        <tr class="nav_0 nav_c">
            <th><?php echo lang('html-1005'); ?>： </th>
            <td>
                <?php echo dr_field_input('description', 'Textarea', $field['description']['setting'], $data['description']); ?>
                <div class="onShow"><?php echo lang('html-1006'); ?></div>
            </td>
        </tr>
        <tr class="nav_0">
            <th><font color="red">*</font>&nbsp;<?php echo lang('html-377'); ?>： </th>
            <td>
                <?php echo dr_field_input('url', 'Text', $field['url']['setting'], $data['url']); ?>
                <div class="onShow"><?php echo lang('html-382'); ?></div>

            </td>
        </tr>
		<tr>
			<th> </th>
			<td><input value="<?php echo lang('submit'); ?>" type="submit" name="submit" class="button" onclick="$('#dr_action').val('back')" />
			</td>
		</tr>
		</table>
		</form>
	</div>
	</div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>