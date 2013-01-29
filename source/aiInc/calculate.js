// JavaScript Document

var satMath;
var satVerbal;
var satComposite;
var satEquivalent;
var actScore;
var satScore;
var academicIndex;
var hsGPA;
var weighted = false;
var CSR;

function calculateSAT(){
	
    document.getElementById('satComposite').value = "";
    satMath = +document.getElementById('satMath').value;
		if (satMath < 0 || satMath > 800) {
			document.getElementById('satComposite').value = "Math score is not valid.";
			satMath = 0;
		}
    satVerbal = +document.getElementById('satVerbal').value;
		if (satVerbal < 0 || satVerbal > 800) {
			document.getElementById('satComposite').value = "Verbal score is not valid.";
			satVerbal = 0;
		}
    satComposite = satMath + satVerbal;
    
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
    hsGPA = +document.getElementById('hsGPA').value;
    weighted = document.getElementById('gpaWeighted').checked;
    if (weighted)
        CSR = weightedCSRs[weightedGPAs.indexOf(Math.floor(hsGPA * 10) / 10)];
      else
        CSR = unweightedCSRs[unweightedGPAs.indexOf(Math.floor(hsGPA * 10) / 10)];
    
    if(satScore < satScores[0] || satScore > "1600")
    {
	document.getElementById('aiResult').innerHTML = "Please give a valid test score.";
    } else if (hsGPA < 1)
        {
            document.getElementById('aiResult').innerHTML = "Please give a valid high school GPA.";
        } else
    {
		document.getElementById('aiResult').style = "color:";
        academicIndex = (satScore / 20) + CSR + ( (satScore / 20 ) + CSR ) / 2;
        //academicIndex = CSR;
        document.getElementById('aiResult').innerHTML = academicIndex;
    }
        

};