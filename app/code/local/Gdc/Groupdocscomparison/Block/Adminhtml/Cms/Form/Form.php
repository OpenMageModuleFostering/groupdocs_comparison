<?php
class Gdc_Groupdocscomparison_Block_Adminhtml_Cms_Form_Form extends Mage_Adminhtml_Block_Cms_Form_Form {
    public function  __construct() {
        parent::__construct();
    }
}
echo '
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
           
            <h2><a href="http://groupdocs.com/">GroupDocs Compare</a></h2>
            <form action="#" name="form">
                <label for="embedKey">Embed Key</label>
                <br />
                <input type="text", name="embedKey" value="" />
                <br />
                <label for="fileId">File ID</label>
                <br>
                <input type="text" name="fileId" value="">
                <br>
                <input type="button" name="doRequest" value="Make request" onClick="insertIframe();">
                <input type="button" name="cancel" value="Cancel" onClick="window.close();">
            </form>  
            <br>
            <a target="blank" href="http://groupdocs.com/docs/display/gendoc/FAQs">See our FAQ</a> to learn how to use Comparison.
        </div>
    </body>
</html>';
?>
<script language="JavaScript" type="text/javascript">
   
    function insertIframe()
    {
        form = document.forms.form;
        embedId = form.embedKey.value;
        fileId = form.fileid.value;
       if (fileId != "" && embedId != "") {
            var iframe = '<iframe src="https://apps.groupdocs.com/document-comparison/embed/' + embedId + '/' + fileId + '?&referer=Magento-Comparison/1.0" frameborder="0" width="500" height="650">If you can see this text, your browser does not support iframes. Please enable iframe support in your browser or use the latest version of any popular web browser such as Mozilla Firefox or Google Chrome. For more help, please check our documentation Wiki: http://groupdocs.com/docs/display/comparison/GroupDocs+Comparison+Integration+with+3rd+Party+Platforms</iframe>';
            var tinyMceContent = window.opener.tinyMCE.activeEditor.getContent();
                        // set content
                        console.log(tinyMceContent);
            window.opener.tinyMCE.activeEditor.setContent(tinyMceContent + iframe);
        } else {
            var tinyMceContent = window.opener.tinyMCE.activeEditor.getContent();
                        // set content
                        console.log(tinyMceContent);
            window.opener.tinyMCE.activeEditor.setContent(tinyMceContent + "Something wrong with entered data");
        }
        window.close(); 
           
    }
</script>