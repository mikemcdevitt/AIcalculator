// JavaScript Document

function calculateSAT(){
	document.getElementById('satComposite').value = 
	+document.getElementById('satVerbal').value + +document.getElementById('satMath').value;
	document.getElementById('satComposite').readOnly = true;
};

function getSatEquivalent(){
	document.getElementById('satEquivalent').value = satScores[actScores.indexOf(document.getElementById('actScore').value)];
};

function calculateAI(){
	if(document.getElementById('satComposite').value < actScores[0] && document.getElementById('satEquivalent').value < satScores[0]){
		document.getElementById('aiResult').innerHTML = "Please give a valid test score.";
	}
};