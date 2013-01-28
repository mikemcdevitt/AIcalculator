// JavaScript Document

function calculateSat(){
	document.getElementById('satComposite').value = "worked.";
};

function getSatEquivalent(){
	
};

function calculateAI(){
	if(document.getElementById('satComposite').value < actScores[0] && document.getElementById('satEquivalent').value < satScores[0]){
		document.getElementById('aiResult').innerHTML = "Please give a valid test score.";
	}
};