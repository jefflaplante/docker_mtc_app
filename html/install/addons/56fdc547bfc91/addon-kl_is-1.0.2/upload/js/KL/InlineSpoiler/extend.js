/**
 * KL_InlineSpoiler_extend
 *
 *	@author: Katsulynx
 *  @last_edit:	14.09.2015
 */
if("undefined"==typeof RedactorPlugins)var RedactorPlugins={};!function(a,d,b,e){a(b).on("EditorInit",function(b,c){a.extend(c.editor.editorConfig.buttonsCustom.insert.dropdown,{inlineSpoiler:{callback:function(a,b){a.execCommand("inserthtml","[iSpoiler]"+a.getSelection()+"[/iSpoiler]");return!1},className:"icon inlineSpoiler",title:RELANG.xf.inlineSpoiler}})})}(jQuery,this,document,"undefined");