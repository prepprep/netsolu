<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 19:37:50
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16823550776c40b88c9-76753386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cb48b0ad1ba52e8d16030b3344c0b349feecefc' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1426790265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16823550776c40b88c9-76753386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550776c4129d51_78656612',
  'variables' => 
  array (
    'notes' => 0,
    'note' => 0,
    'ACTIVE_NOTE_ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550776c4129d51_78656612')) {function content_550776c4129d51_78656612($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\blog\\lib\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\blog\\lib\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"miNotes"), 0);?>


<div id="container">

    <div id="notes-list">
        <div id="notes-list-header" class="header">
            <span class="left">miNotes</span>
            <span class="right"><a href="index.php?action=new"><img src="images/CreateNote.png" alt="Create new note."></a></span>
        </div>
        <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
            <div class="notes-list-item">
                <span class="notes-list-item-title"><a href="index.php?action=navigate&id=<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
" 
                                                       <?php if ($_smarty_tpl->tpl_vars['note']->value['id']==$_smarty_tpl->tpl_vars['ACTIVE_NOTE_ID']->value) {?>class='active'<?php }?>><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['note']->value['content'],20);?>
</a></span>
                <span class="notes-list-item-timestamp"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['note']->value['last_modified'],"%b %d");?>
</span>
            </div>      
        <?php } ?>
    </div>

    <div id="notepad">
        <div id="notepad-header" class="header">
            <span><a href="#" onclick="document.getElementById('updateForm').submit();">Save</a></span>&nbsp;|&nbsp;
            <span><a href="index.php?action=delete">Delete</a></span>&nbsp;|&nbsp;
            <span>
                <a href="#" onclick="email()">Email</a>&nbsp;|&nbsp;
            </span>
            <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['note']->value['id']==$_smarty_tpl->tpl_vars['ACTIVE_NOTE_ID']->value) {?>
            <span class="right">
                <form action="txtcontent.php" method="get" id="txtform">
                    <input type="text" name="contname" id="contname" placeholder="Enter a new file name" />
                    <input type="hidden" name="getContent" value="<?php echo $_smarty_tpl->tpl_vars['note']->value['content'];?>
" />
                    <input type="button" id="btn" value="save as" onclick="fsubmit(content);"/>
                </form>
            </span>
                    <?php }?>
            <?php } ?>
        </div>

        <div>
            <?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['note']->value['id']==$_smarty_tpl->tpl_vars['ACTIVE_NOTE_ID']->value) {?>
                    <span id="timestamp"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['note']->value['last_modified'],"%B %d, %r");?>
</span>

                    <div id="tinymce-holder">
                        <form action="index.php" method="POST" id="updateForm">
                            <div id="areaContent">
                                <textarea rows="27" cols="70" id="content" name="content"><?php echo $_smarty_tpl->tpl_vars['note']->value['content'];?>
</textarea>
                                <input type="hidden" name="action" value="update"/>
                            </div>
                        </form>
                        <form action="index.php?action=reminder" method="post" id="updateComment">
                            <div id="areaComment">
                                <textarea rows="3" cols="70" name="reminder" id="comment"><?php echo $_smarty_tpl->tpl_vars['note']->value['comment'];?>
</textarea>
                                <br/><input type="submit" name="submit" value="Add Reminder:"/>
                            </div>
                        </form>   
                    </div>

                <?php }?>
            <?php } ?>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
