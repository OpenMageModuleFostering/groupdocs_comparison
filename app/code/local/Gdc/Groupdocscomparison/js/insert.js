    function insertIframe()
    {
        form = document.forms.form;
        embedId = form.embedKey.value;
        fileId = form.fileid.value;
       if (fileId != "" && embedId != "") {
            var iframe = '<iframe src="https://apps.groupdocs.com/document-comparison/embed/' + embedId + '/' + fileId + '?&referer=Magento-Comparison/1.0" frameborder="0" width="500" height="650">If you can see this text, your browser does not support iframes. Please enable iframe support in your browser or use the latest version of any popular web browser such as Mozilla Firefox or Google Chrome. For more help, please check our documentation Wiki: http://groupdocs.com/docs/display/comparison/GroupDocs+Comparison+Integration+with+3rd+Party+Platforms</iframe>';
            var tinyMceContent = tinyMCE.activeEditor.getContent();
                        // set content
                        
            tinyMCE.activeEditor.setContent(tinyMceContent + iframe);
        } else {
            var tinyMceContent = tinyMCE.activeEditor.getContent();
                        // set content
                       
           tinyMCE.activeEditor.setContent(tinyMceContent + "Something wrong with entered data");
        }
           
    }
    
    function delForm(){
        del = document.getElementById('page_tabs_content_section_content');
        del.removeChild("groupdocs");
    }

