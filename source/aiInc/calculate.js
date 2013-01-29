// JavaScript Document

function calculateSAT(){
    
	document.getElementById('satComposite').value = 
	+document.getElementById('satVerbal').value + +document.getElementById('satMath').value;
	document.getElementById('satComposite').readOnly = true;
};

function getSatEquivalent(){
    var actScore = document.getElementById('actScore').value;
    
    if (actScore < "11" || actScore > "36")
        {
            document.getElementById('satEquivalent').value = "ACT Score is not valid.";
        }
        {
            document.getElementById('satEquivalent').value = 
                satScores[actScores.indexOf(actScore)];
        }
};

function calculateAI(){
	if(document.getElementById('satComposite').value < actScores[0] && 
            document.getElementById('satEquivalent').value < satScores[0]){
		document.getElementById('aiResult').innerHTML = "Please give a valid test score.";
	}
};