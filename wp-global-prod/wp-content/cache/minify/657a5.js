(function($){'use strict';if(typeof wpcf7==='undefined'||wpcf7===null){return;}
wpcf7=$.extend({cached:0,inputs:[]},wpcf7);$(function(){wpcf7.supportHtml5=(function(){var features={};var input=document.createElement('input');features.placeholder='placeholder'in input;var inputTypes=['email','url','tel','number','range','date'];$.each(inputTypes,function(index,value){input.setAttribute('type',value);features[value]=input.type!=='text';});return features;})();$('div.wpcf7 > form').each(function(){var $form=$(this);$form.submit(function(event){if(typeof window.FormData!=='function'){return;}
wpcf7.submit($form);event.preventDefault();});$('.wpcf7-submit',$form).after('<span class="ajax-loader"></span>');wpcf7.toggleSubmit($form);$form.on('click','.wpcf7-acceptance',function(){wpcf7.toggleSubmit($form);});$('.wpcf7-exclusive-checkbox',$form).on('click','input:checkbox',function(){var name=$(this).attr('name');$form.find('input:checkbox[name="'+name+'"]').not(this).prop('checked',false);});$('.wpcf7-list-item.has-free-text',$form).each(function(){var $freetext=$(':input.wpcf7-free-text',this);var $wrap=$(this).closest('.wpcf7-form-control');if($(':checkbox, :radio',this).is(':checked')){$freetext.prop('disabled',false);}else{$freetext.prop('disabled',true);}
$wrap.on('change',':checkbox, :radio',function(){var $cb=$('.has-free-text',$wrap).find(':checkbox, :radio');if($cb.is(':checked')){$freetext.prop('disabled',false).focus();}else{$freetext.prop('disabled',true);}});});if(!wpcf7.supportHtml5.placeholder){$('[placeholder]',$form).each(function(){$(this).val($(this).attr('placeholder'));$(this).addClass('placeheld');$(this).focus(function(){if($(this).hasClass('placeheld')){$(this).val('').removeClass('placeheld');}});$(this).blur(function(){if(''===$(this).val()){$(this).val($(this).attr('placeholder'));$(this).addClass('placeheld');}});});}
if(wpcf7.jqueryUi&&!wpcf7.supportHtml5.date){$form.find('input.wpcf7-date[type="date"]').each(function(){$(this).datepicker({dateFormat:'yy-mm-dd',minDate:new Date($(this).attr('min')),maxDate:new Date($(this).attr('max'))});});}
if(wpcf7.jqueryUi&&!wpcf7.supportHtml5.number){$form.find('input.wpcf7-number[type="number"]').each(function(){$(this).spinner({min:$(this).attr('min'),max:$(this).attr('max'),step:$(this).attr('step')});});}
$('.wpcf7-character-count',$form).each(function(){var $count=$(this);var name=$count.attr('data-target-name');var down=$count.hasClass('down');var starting=parseInt($count.attr('data-starting-value'),10);var maximum=parseInt($count.attr('data-maximum-value'),10);var minimum=parseInt($count.attr('data-minimum-value'),10);var updateCount=function(target){var $target=$(target);var length=$target.val().length;var count=down?starting-length:length;$count.attr('data-current-value',count);$count.text(count);if(maximum&&maximum<length){$count.addClass('too-long');}else{$count.removeClass('too-long');}
if(minimum&&length<minimum){$count.addClass('too-short');}else{$count.removeClass('too-short');}};$(':input[name="'+name+'"]',$form).each(function(){updateCount(this);$(this).keyup(function(){updateCount(this);});});});$form.on('change','.wpcf7-validates-as-url',function(){var val=$.trim($(this).val());if(val&&!val.match(/^[a-z][a-z0-9.+-]*:/i)){val=val.replace(/^\/+/,'');val='http://'+val;}
$(this).val(val);});if(wpcf7.cached){wpcf7.refill($form);}});});wpcf7.getId=function(form){return parseInt($('input[name="_wpcf7"]',form).val(),10);};wpcf7.submit=function(form){var $form=$(form);$('[placeholder].placeheld',$form).each(function(i,n){$(n).val('');});wpcf7.clearResponse($form);$('.ajax-loader',$form).addClass('is-active');if(typeof window.FormData!=='function'){return;}
var formData=new FormData($form.get(0));var ajaxSuccess=function(data,status,xhr,$form){var detail={id:$(data.into).attr('id'),status:data.status,inputs:[]};$.each($form.serializeArray(),function(i,field){if('_wpcf7'==field.name){detail.contactFormId=field.value;}else if('_wpcf7_version'==field.name){detail.pluginVersion=field.value;}else if('_wpcf7_locale'==field.name){detail.contactFormLocale=field.value;}else if('_wpcf7_unit_tag'==field.name){detail.unitTag=field.value;}else if('_wpcf7_container_post'==field.name){detail.containerPostId=field.value;}else if(field.name.match(/^_/)){}else{detail.inputs.push(field);}});var $message=$('.wpcf7-response-output',$form);switch(data.status){case'validation_failed':$.each(data.invalidFields,function(i,n){$(n.into,$form).each(function(){wpcf7.notValidTip(this,n.message);$('.wpcf7-form-control',this).addClass('wpcf7-not-valid');$('[aria-invalid]',this).attr('aria-invalid','true');});});$message.addClass('wpcf7-validation-errors');$form.addClass('invalid');wpcf7.triggerEvent(data.into,'invalid',detail);break;case'spam':$message.addClass('wpcf7-spam-blocked');$form.addClass('spam');$('[name="g-recaptcha-response"]',$form).each(function(){if(''===$(this).val()){var $recaptcha=$(this).closest('.wpcf7-form-control-wrap');wpcf7.notValidTip($recaptcha,wpcf7.recaptcha.messages.empty);}});wpcf7.triggerEvent(data.into,'spam',detail);break;case'mail_sent':$message.addClass('wpcf7-mail-sent-ok');$form.addClass('sent');if(data.onSentOk){$.each(data.onSentOk,function(i,n){eval(n)});}
wpcf7.triggerEvent(data.into,'mailsent',detail);break;case'mail_failed':case'acceptance_missing':default:$message.addClass('wpcf7-mail-sent-ng');$form.addClass('failed');wpcf7.triggerEvent(data.into,'mailfailed',detail);}
wpcf7.refill($form,data);if(data.onSubmit){$.each(data.onSubmit,function(i,n){eval(n)});}
wpcf7.triggerEvent(data.into,'submit',detail);if('mail_sent'==data.status){$form.each(function(){this.reset();});}
$form.find('[placeholder].placeheld').each(function(i,n){$(n).val($(n).attr('placeholder'));});$message.append(data.message).slideDown('fast');$message.attr('role','alert');$('.screen-reader-response',$form.closest('.wpcf7')).each(function(){var $response=$(this);$response.html('').attr('role','').append(data.message);if(data.invalidFields){var $invalids=$('<ul></ul>');$.each(data.invalidFields,function(i,n){if(n.idref){var $li=$('<li></li>').append($('<a></a>').attr('href','#'+n.idref).append(n.message));}else{var $li=$('<li></li>').append(n.message);}
$invalids.append($li);});$response.append($invalids);}
$response.attr('role','alert').focus();});};$.ajax({type:'POST',url:wpcf7.apiSettings.root+wpcf7.apiSettings.namespace+'/contact-forms/'+wpcf7.getId($form)+'/feedback',data:formData,dataType:'json',processData:false,contentType:false}).done(function(data,status,xhr){ajaxSuccess(data,status,xhr,$form);$('.ajax-loader',$form).removeClass('is-active');}).fail(function(xhr,status,error){var $e=$('<div class="ajax-error"></div>').text(error.message);$form.after($e);});};wpcf7.triggerEvent=function(target,name,detail){var $target=$(target);var event=new CustomEvent('wpcf7'+name,{bubbles:true,detail:detail});$target.get(0).dispatchEvent(event);$target.trigger('wpcf7:'+name,detail);$target.trigger(name+'.wpcf7',detail);};wpcf7.toggleSubmit=function(form,state){var $form=$(form);var $submit=$('input:submit',$form);if(typeof state!=='undefined'){$submit.prop('disabled',!state);return;}
if($form.hasClass('wpcf7-acceptance-as-validation')){return;}
$submit.prop('disabled',false);$('input:checkbox.wpcf7-acceptance',$form).each(function(){var $a=$(this);if($a.hasClass('wpcf7-invert')&&$a.is(':checked')||!$a.hasClass('wpcf7-invert')&&!$a.is(':checked')){$submit.prop('disabled',true);return false;}});};wpcf7.notValidTip=function(target,message){var $target=$(target);$('.wpcf7-not-valid-tip',$target).remove();$('<span role="alert" class="wpcf7-not-valid-tip"></span>').text(message).appendTo($target);if($target.is('.use-floating-validation-tip *')){var fadeOut=function(target){$(target).not(':hidden').animate({opacity:0},'fast',function(){$(this).css({'z-index':-100});});}
$target.on('mouseover','.wpcf7-not-valid-tip',function(){fadeOut(this);});$target.on('focus',':input',function(){fadeOut($('.wpcf7-not-valid-tip',$target));});}}
wpcf7.refill=function(form,data){var $form=$(form);var refillCaptcha=function($form,items){$.each(items,function(i,n){$form.find(':input[name="'+i+'"]').val('');$form.find('img.wpcf7-captcha-'+i).attr('src',n);var match=/([0-9]+)\.(png|gif|jpeg)$/.exec(n);$form.find('input:hidden[name="_wpcf7_captcha_challenge_'+i+'"]').attr('value',match[1]);});};var refillQuiz=function($form,items){$.each(items,function(i,n){$form.find(':input[name="'+i+'"]').val('');$form.find(':input[name="'+i+'"]').siblings('span.wpcf7-quiz-label').text(n[0]);$form.find('input:hidden[name="_wpcf7_quiz_answer_'+i+'"]').attr('value',n[1]);});};if(typeof data==='undefined'){$.ajax({type:'GET',url:wpcf7.apiSettings.root+wpcf7.apiSettings.namespace+'/contact-forms/'+wpcf7.getId($form)+'/refill',dataType:'json'}).done(function(data,status,xhr){if(data.captcha){refillCaptcha($form,data.captcha);}
if(data.quiz){refillQuiz($form,data.quiz);}});}else{if(data.captcha){refillCaptcha($form,data.captcha);}
if(data.quiz){refillQuiz($form,data.quiz);}}};wpcf7.clearResponse=function(form){var $form=$(form);$form.removeClass('invalid spam sent failed');$form.siblings('.screen-reader-response').html('').attr('role','');$('.wpcf7-not-valid-tip',$form).remove();$('[aria-invalid]',$form).attr('aria-invalid','false');$('.wpcf7-form-control',$form).removeClass('wpcf7-not-valid');$('.wpcf7-response-output',$form).hide().empty().removeAttr('role').removeClass('wpcf7-mail-sent-ok wpcf7-mail-sent-ng wpcf7-validation-errors wpcf7-spam-blocked');};})(jQuery);(function(){if(typeof window.CustomEvent==="function")return false;function CustomEvent(event,params){params=params||{bubbles:false,cancelable:false,detail:undefined};var evt=document.createEvent('CustomEvent');evt.initCustomEvent(event,params.bubbles,params.cancelable,params.detail);return evt;}
CustomEvent.prototype=window.Event.prototype;window.CustomEvent=CustomEvent;})();;
/*!
 * Collapse-O-Matic JavaSctipt v1.6.6
 * http://plugins.twinpictures.de/plugins/collapse-o-matic/
 *
 * Copyright 2017, Twinpictures
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, blend, trade,
 * bake, hack, scramble, difiburlate, digest and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
function collapse_init(){jQuery('.force_content_collapse').each(function(index){jQuery(this).css('display','none');});jQuery('.collapseomatic:not(.colomat-close)').each(function(index){var thisid=jQuery(this).attr('id');jQuery('#target-'+thisid).css('display','none');});jQuery('.collapseomatic.colomat-close').each(function(index){var thisid=jQuery(this).attr('id');if(jQuery("#swap-"+thisid).length>0){swapTitle(this,"#swap-"+thisid);}
if(jQuery("#swapexcerpt-"+thisid).length>0){swapTitle("#excerpt-"+thisid,"#swapexcerpt-"+thisid);}});}
function swapTitle(origObj,swapObj){if(jQuery(origObj).prop("tagName")=='IMG'){var origsrc=jQuery(origObj).prop('src');var swapsrc=jQuery(swapObj).prop('src');jQuery(origObj).prop('src',swapsrc);jQuery(swapObj).prop('src',origsrc);}
else{var orightml=jQuery(origObj).html();var swaphtml=jQuery(swapObj).html();jQuery(origObj).html(swaphtml);jQuery(swapObj).html(orightml);if(swaphtml.indexOf("<cufon")!=-1){var trigelem=jQuery(this).get(0).tagName;Cufon.replace(trigelem);}}}
function toggleState(obj,id,maptastic,trig_id){if(maptastic&&jQuery('[id^=target][id$='+id+']').hasClass('maptastic')){jQuery('[id^=target][id$='+id+']').removeClass('maptastic');}
com_effect=colomatslideEffect;com_duration=colomatduration;if(obj.attr('data-animation_effect')){com_effect=obj.attr('data-animation_effect');}
if(obj.attr('data-duration')){com_duration=obj.attr('data-duration');}
if(isFinite(com_duration)){com_duration=parseFloat(com_duration);}
if(com_effect=='slideToggle'){jQuery('[id^=target][id$='+id+']').slideToggle(com_duration,function(){if(jQuery(this).hasClass('colomat-inline')&&jQuery(this).is(':visible')){jQuery(this).css('display','inline');}
if(trig_id&&jQuery('#'+trig_id).is('.find-me.colomat-close')){offset_top=jQuery('#'+trig_id).attr('data-findme');if(!offset_top||offset_top=='auto'){target_offset=jQuery('#'+trig_id).offset();offset_top=target_offset.top;}
jQuery('html, body').animate({scrollTop:offset_top},500);}});}
else if(com_effect=='slideFade'){jQuery('[id^=target][id$='+id+']').animate({height:"toggle",opacity:"toggle"},com_duration,function(){if(jQuery(this).hasClass('colomat-inline')&&jQuery(this).is(':visible')){jQuery(this).css('display','inline');}
if(trig_id&&jQuery('#'+trig_id).is('.find-me.colomat-close')){offset_top=jQuery('#'+trig_id).attr('data-findme');if(!offset_top||offset_top=='auto'){target_offset=jQuery('#'+trig_id).offset();offset_top=target_offset.top;}
jQuery('html, body').animate({scrollTop:offset_top},500);}});}
if(jQuery('#'+id).hasClass('colomat-close')){jQuery('.google-maps-builder').each(function(index){map=jQuery(".google-maps-builder")[index];google.maps.event.trigger(map,'resize');});}}
function closeOtherGroups(rel){jQuery('.collapseomatic[rel!="'+rel+'"]').each(function(index){if(jQuery(this).hasClass('colomat-expand-only')&&jQuery(this).hasClass('colomat-close')){return;}
if(jQuery(this).hasClass('colomat-close')&&jQuery(this).attr('rel')!==undefined){jQuery(this).removeClass('colomat-close');var id=jQuery(this).attr('id');jQuery('#parent-'+id).removeClass('colomat-parent-highlight');if(jQuery("#swap-"+id).length>0){swapTitle(this,"#swap-"+id);}
if(jQuery("#swapexcerpt-"+id).length>0){swapTitle("#exerpt-"+id,"#swapexcerpt-"+id);}
toggleState(jQuery(this),id,false,false);var ancestors=jQuery('.collapseomatic','#target-'+id);ancestors.each(function(index){jQuery(this).removeClass('colomat-close');var thisid=jQuery(this).attr('id');jQuery('#target-'+thisid).css('display','none');})}});}
function closeOtherMembers(rel,id){jQuery('.collapseomatic[rel="'+rel+'"]').each(function(index){if(jQuery(this).hasClass('colomat-expand-only')&&jQuery(this).hasClass('colomat-close')){return;}
if(jQuery(this).attr('id')!=id&&jQuery(this).hasClass('colomat-close')&&jQuery(this).attr('rel')!==undefined){jQuery(this).removeClass('colomat-close');var thisid=jQuery(this).attr('id');jQuery('#parent-'+thisid).removeClass('colomat-parent-highlight');if(jQuery("#swap-"+thisid).length>0){swapTitle(this,"#swap-"+thisid);}
if(jQuery("#swapexcerpt-"+thisid).length>0){swapTitle("#excerpt-"+thisid,"#swapexcerpt-"+thisid);}
if(!jQuery(this).hasClass('colomat-close')&&jQuery(this).hasClass('snap-shut')){jQuery('#target-'+thisid).hide();}
else{toggleState(jQuery(this),thisid,false,false);}
var ancestors=jQuery('.collapseomatic','#target-'+id);ancestors.each(function(index){if(jQuery(this).hasClass('colomat-expand-only')&&jQuery(this).hasClass('colomat-close')){return;}
var pre_id=id.split('-');if(pre_id[0].indexOf('extra')!='-1'){pre=pre_id.splice(0,1);id=pre_id.join('-');if(jQuery(this).hasClass('scroll-to-trigger')){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}
if(jQuery('#'+id).hasClass('scroll-to-trigger')){offset_top=jQuery('#scrollonclose-'+id).attr('name');if(offset_top=='auto'){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}}
jQuery('#'+id).toggleClass('colomat-close');jQuery('[id^=extra][id$='+id+']').toggleClass('colomat-close');}
if(jQuery(this).attr('id').indexOf('bot-')=='-1'){jQuery(this).removeClass('colomat-close');var thisid=jQuery(this).attr('id');if(jQuery("#swap-"+thisid).length>0){swapTitle(this,"#swap-"+thisid);}
if(jQuery("#swapexcerpt-"+thisid).length>0){swapTitle("#excerpt-"+thisid,"#swapexcerpt-"+thisid);}
jQuery('#target-'+thisid).css('display','none');}})}});}
function colomat_expandall(loop_items){if(!loop_items){loop_items=jQuery('.collapseomatic:not(.colomat-close)');}
loop_items.each(function(index){jQuery(this).addClass('colomat-close');var thisid=jQuery(this).attr('id');jQuery('#parent-'+thisid).addClass('colomat-parent-highlight');if(jQuery("#swap-"+thisid).length>0){swapTitle(this,"#swap-"+thisid);}
if(jQuery("#swapexcerpt-"+thisid).length>0){swapTitle("#excerpt-"+thisid,"#swapexcerpt-"+thisid);}
toggleState(jQuery(this),thisid,false,false);});}
function colomat_collapseall(loop_items){if(!loop_items){loop_items=jQuery('.collapseomatic.colomat-close');}
loop_items.each(function(index){if(jQuery(this).hasClass('colomat-expand-only')&&jQuery(this).hasClass('colomat-close')){return;}
jQuery(this).removeClass('colomat-close');var thisid=jQuery(this).attr('id');jQuery('#parent-'+thisid).removeClass('colomat-parent-highlight');if(jQuery("#swap-"+thisid).length>0){swapTitle(this,"#swap-"+thisid);}
if(jQuery("#swapexcerpt-"+thisid).length>0){swapTitle("#excerpt-"+thisid,"#swapexcerpt-"+thisid);}
toggleState(jQuery(this),thisid,false,false);});}
jQuery(document).ready(function(){collapse_init();jQuery(document.body).on('post-load',function(){collapse_init();});jQuery('.content_collapse_wrapper').each(function(index){jQuery(this).css('display','inline');});jQuery(document).on({mouseenter:function(){jQuery(this).addClass('colomat-hover');},mouseleave:function(){jQuery(this).removeClass('colomat-hover');},focusin:function(){jQuery(this).addClass('colomat-hover');},focusout:function(){jQuery(this).removeClass('colomat-hover');}},'.collapseomatic');jQuery(document).on('keypress','.collapseomatic',function(event){if(event.which==13){event.currentTarget.click();};});jQuery(document).on('click','.collapseomatic',function(event){var offset_top;if(jQuery(this).hasClass('colomat-expand-only')&&jQuery(this).hasClass('colomat-close')){return;}
if(jQuery(this).attr('rel')&&jQuery(this).attr('rel').indexOf('-highlander')!='-1'&&jQuery(this).hasClass('must-be-one')&&jQuery(this).hasClass('colomat-close')){return;}
var id=jQuery(this).attr('id');if(jQuery(this).hasClass('colomat-close')&&jQuery(this).hasClass('scroll-to-trigger')){offset_top=jQuery('#scrollonclose-'+id).attr('name');if(offset_top=='auto'){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}}
var id_arr=id.split('-');if(id_arr[0].indexOf('extra')!='-1'){pre=id_arr.splice(0,1);id=id_arr.join('-');if(jQuery(this).hasClass('scroll-to-trigger')){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}
if(jQuery('#'+id).hasClass('scroll-to-trigger')){offset_top=jQuery('#scrollonclose-'+id).attr('name');if(offset_top=='auto'){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}}
jQuery('#'+id).toggleClass('colomat-close');jQuery('[id^=extra][id$='+id+']').toggleClass('colomat-close');}
else if(id.indexOf('bot-')!='-1'){id=id.substr(4);jQuery('#'+id).toggleClass('colomat-close');if(jQuery(this).hasClass('scroll-to-trigger')){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}
if(jQuery('#'+id).hasClass('scroll-to-trigger')){offset_top=jQuery('#scrollonclose-'+id).attr('name');if(offset_top=='auto'){var target_offset=jQuery('#'+id).offset();offset_top=target_offset.top;}}}
else{jQuery(this).toggleClass('colomat-close');jQuery('[id^=extra][id$='+id+']').toggleClass('colomat-close');}
if(jQuery("#swap-"+id).length>0){swapTitle(jQuery('#'+id),"#swap-"+id);}
if(jQuery("#swapexcerpt-"+id).length>0){swapTitle("#excerpt-"+id,"#swapexcerpt-"+id);}
jQuery(this).addClass('colomat-visited');var parentID='parent-'+id;jQuery('#'+parentID).toggleClass('colomat-parent-highlight');if(!jQuery(this).hasClass('colomat-close')&&jQuery(this).hasClass('snap-shut')){jQuery('#target-'+id).hide();}
else{toggleState(jQuery(this),id,true,id);}
if(jQuery(this).attr('rel')!==undefined){var rel=jQuery(this).attr('rel');if(rel.indexOf('-highlander')!='-1'){closeOtherMembers(rel,id);}
else{closeOtherGroups(rel);}}
if(offset_top){jQuery('html, body').animate({scrollTop:offset_top},500);}});jQuery(document).on('click','.expandall',function(event){if(jQuery(this).attr('rel')!==undefined){var rel=jQuery(this).attr('rel');var loop_items=jQuery('.collapseomatic:not(.colomat-close)[rel="'+rel+'"]');}
else if(jQuery(this).attr('data-togglegroup')!==undefined){var toggroup=jQuery(this).attr('data-togglegroup');var loop_items=jQuery('.collapseomatic:not(.colomat-close)[data-togglegroup="'+toggroup+'"]');}
else{var loop_items=jQuery('.collapseomatic:not(.colomat-close)');}
colomat_expandall(loop_items);});jQuery(document).on('click','.collapseall',function(event){if(jQuery(this).attr('rel')!==undefined){var rel=jQuery(this).attr('rel');var loop_items=jQuery('.collapseomatic.colomat-close[rel="'+rel+'"]');}
else if(jQuery(this).attr('data-togglegroup')!==undefined){var toggroup=jQuery(this).attr('data-togglegroup');var loop_items=jQuery('.collapseomatic.colomat-close[data-togglegroup="'+toggroup+'"]');}
else{var loop_items=jQuery('.collapseomatic.colomat-close');}
colomat_collapseall(loop_items);});var fullurl=document.location.toString();if(fullurl.match('#(?!\!)')){var anchor_arr=fullurl.split(/#(?!\!)/);if(anchor_arr.length>1){junk=anchor_arr.splice(0,1);anchor=anchor_arr.join('#');}
else{anchor=anchor_arr[0];}
if(jQuery('#'+anchor).length){if(!jQuery('#'+anchor).hasClass('colomat-close')){jQuery('#'+anchor).click();}
jQuery('#'+anchor).parents('.collapseomatic_content').each(function(index){parent_arr=jQuery(this).attr('id').split('-');junk=parent_arr.splice(0,1);parent=parent_arr.join('-');jQuery('#'+parent).click();})
if(typeof colomatoffset!=='undefined'){var anchor_offset=jQuery('#'+anchor).offset();colomatoffset=colomatoffset+anchor_offset.top;jQuery('html, body').animate({scrollTop:colomatoffset},50);}}}
jQuery(document).on('click','a.expandanchor',function(event){var fullurl=jQuery(this).attr('href');if(fullurl.match('#(?!\!)')){var anchor_arr=fullurl.split(/#(?!\!)/);if(anchor_arr.length>1){junk=anchor_arr.splice(0,1);anchor=anchor_arr.join('#');}
else{anchor=anchor_arr[0];}
if(jQuery('#'+anchor).length){jQuery('#'+anchor).parents('.collapseomatic_content').each(function(index){parent_arr=jQuery(this).attr('id').split('-');junk=parent_arr.splice(0,1);parent=parent_arr.join('-');if(!jQuery('#'+parent).hasClass('colomat-close')){jQuery('#'+parent).click();}})
if(!jQuery('#'+anchor).hasClass('colomat-close')){jQuery('#'+anchor).click();}}}});jQuery(document).on('click','a.colomat-nolink',function(event){event.preventDefault();});});;(function(){var isWebkit=navigator.userAgent.toLowerCase().indexOf('webkit')>-1,isOpera=navigator.userAgent.toLowerCase().indexOf('opera')>-1,isIE=navigator.userAgent.toLowerCase().indexOf('msie')>-1;if((isWebkit||isOpera||isIE)&&document.getElementById&&window.addEventListener){window.addEventListener('hashchange',function(){var id=location.hash.substring(1),element;if(!(/^[A-z0-9_-]+$/.test(id))){return;}
element=document.getElementById(id);if(element){if(!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))){element.tabIndex=-1;}
element.focus();window.scrollBy(0,-53);}},false);}})();