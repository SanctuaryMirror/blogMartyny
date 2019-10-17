function iFrameOn(){
	richTextField.document.designMode= 'On';
}
function iBold(){
	richTextField.document.execCommand("bold",false,null);	
}
function iUnderline(){
	richTextField.document.execCommand('underline',false,null);
}
function iItalic(){
	richTextField.document.execCommand('italic',false,null);
}
function iFontSize(){
	var size= prompt('podaj rozmiar czcionki od 1 do 7:', '');
	richTextField.document.execCommand('FontSize',false,size);
}
function iForeColor(){
	var color= prompt('Zdefiniuj kolor czcionki albo podaj jej kod szesnastkowy, np. white, #DEDEDE:', '');
	richTextField.document.execCommand('ForeColor',false,color);
}
function iHorizontalRule(){
	richTextField.document.execCommand('inserthorizontalrule',false,'black');
	richTextField.document.write('</br>');
}
function iUnorderedList(){
	richTextField.document.execCommand('InsertUnorderedList',false,"newUL");
}
function iOrderedList(){
	richTextField.document.execCommand('InsertOrderedList',false,"newOL");
}
function iLink(){
	var linkURL=prompt('wprowadz adres linku:','http://')
	richTextField.document.execCommand('CreateLink',false,linkURL);
}
function iUnlink(){
	richTextField.document.execCommand('Unlink',false,null);
}
function submit_form(){
var theForm=document.getElementById("myform");
myform.elements['myTextArea'].value = window.frames['richTextField'].document.body.innerHTML;
myform.submit();
}