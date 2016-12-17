/**
 * KL_InlineSpoiler_extend
 *
 *	@author: Katsulynx
 *  @last_edit:	14.09.2015
 */
 if(typeof RedactorPlugins == 'undefined') var RedactorPlugins = {};

!function($, window, document, undefined) {
	$(document).on('EditorInit', function(e, data){
        var inlineSpoilerFunc = function(ed, ev) {
            ed.execCommand('inserthtml', '[iSpoiler]'+ed.getSelection()+'[/iSpoiler]');
            return false;
        }
        
        var inlineSpoiler = {
            inlineSpoiler : {
                callback: inlineSpoilerFunc,
                className: "icon inlineSpoiler",
                title: RELANG.xf.inlineSpoiler
            }
        }
    
        $.extend(data.editor.editorConfig.buttonsCustom.insert.dropdown, inlineSpoiler);
        
        //console.log(data.editor.editorConfig.buttonsCustom.insert);
	});
}
(jQuery, this, document, 'undefined');