function tinyBrowserPopUp(type,formelementid) {
tburl = "/js/tiny_mce/plugins/tinybrowser/tinybrowser.php" + "?type=" + type + "&feid=" + formelementid;
newwindow=window.open(tburl,'tinybrowser','height=440,width=665,scrollbars=yes,resizable=yes');
if (window.focus) {newwindow.focus()}
return false;
}