// JavaScript Document

var satMath;
var satVerbal;
var satComposite;
var satEquivalent;
var actScore;
var satScore;

function calculateSAT(){
    satMath = +document.getElementById('satMath').value;
    satVerbal = +document.getElementById('satVerbal').value;
    satComposite = satMath + satVerbal;
    document.getElementById('satComposite').value = "";
    
    if (satMath > 0 && satVerbal > 0 )
        {
            if (satComposite >= satScores[0] && satComposite <= 1600)
            {
                satScore = satComposite;
                document.getElementById('satComposite').value = satScore;
                calculateAI();
            } else document.getElementById('satComposite').value = "SAT scores are not valid.";
                
        } 
};

function getSatEquivalent(){
    actScore = document.getElementById('actScore').value;
    
    if (actScore < actScores[0] || actScore > "36")
        {
            document.getElementById('satEquivalent').value = "ACT Score is not valid.";
        }
        {
            satScore = satScores[actScores.indexOf(actScore)];
            document.getElementById('satEquivalent').value = satScore;
            calculateAI();
        }
};

function calculateAI(){
    var hsGPA = +document.getElementById('hsGPA').value;
    var academicIndex;
    
    if(satScore < satScores[0] || satScore > "1600")
    {
	document.getElementById('aiResult').innerHTML = "Please give a valid test score.";
    } else if (hsGPA < 1)
        {
            document.getElementById('aiResult').innerHTML = "Please give a valid high school GPA.";
        } else
    {
        academicIndex = satScore / 10;
        document.getElementById('aiResult').innerHTML = academicIndex;
    }
        
        
            
};